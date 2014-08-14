#!/usr/bin/python
###################################################################################################                                                                                              
#                                                                                               
# DEVELOPERS : Luca Sanna                                                                        
# VERSIONE : 0.1                                                                                  
#                                                                                                                    
# E-MAIL: sanluca78@gmail.com                                                                                        
# COPYRIGHT: (c) 2013                                                                       
# PROGRAMMA: Py-Temperature  
#This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.                                                                          
###################################################################################################
import time,sys,smtplib
from datetime import *
from threading import Thread
from baseconfig import *
sys.path.append("%slib" %workingDir)
#db
from database import *
import ablib
#from buddy import *
#bluetooth
from bt import *
from tools import *

class MyThread(Thread):
    db=Mydata()
    bts=btscan()
    #buddy = iBuddyDevice()
    comando=0
    con_start=0
    arrayy=[]
    rele1 = ablib.Pin('J7','37','low')
    cel=0
        
    def db_man(self):
        while True:
            try:
                x = self.db.view_manual()
                self.actual=int(float(x[1]))
                self.set = float(x[2])
                self.mintemp=float(x[3])
                self.calendar = int(x[4])
                self.button = int(x[5])
                self.bt = int(x[6])
                self.scandevice=int(x[7])
                self.cel=int(x[8])
                break
            except Exception,e:
                logCritical("db man control %s" %e)
                time.sleep(0.5)
                if e[0] == 2006:
                    time.sleep(5)
                    command=("/etc/init.d/mysql restart")
                    os.system(command)
                    time.sleep(5)
            	    self.db.riavvio_db()
                    try:
                        host=smtplib.SMTP ("127.0.0.1")
                        ret=host.sendmail("luca@example.com", "sanluca78@gmail.com", "reboot mysql")
                    except:
                        pass
                   
    def actualtime(self):
        actualTime=time.localtime()
        self.year=actualTime[0]
        self.month=actualTime[1]
        self.day=actualTime[2]
        self.hour=actualTime[3]
        self.minute=actualTime[4]
                    
     #id, uid , m ,d ,y ,start_ '00:00:00',end '00:00:00',title ,text 
     #(id,timestamp,title,description,url,email,cat,starttime,endtime,day,month,year,approved,priority,user,timezone   
    def db_calendar(self):
        try:
            self.actualtime()
            x = self.db.view_calendarix(self.month,self.day,self.year)
            self.arrayy=[]
            for b in x:
                m=int(b[10])
                d=int(b[9])
                y=int(b[11])
                start=b[7]
                end=b[8]
                title=str(b[2])
                text=int(b[3])
                campistart=start.split(':')
                campiend=end.split(':')
                ho,mo=campiend
                hh,mm=campistart
                if title== "caldaia" :
                    #minuti in 24H 1440
                    minon= (int(hh)*60)+int(mm)
                    minoff=(int(ho)*60)+int(mo)
                    self.arrayy.append([minon,minoff,text])
                    
            minact=(int(self.hour)*60)+int(self.minute)
            power=False
        
            for interval in self.arrayy:  
                if minact>=interval[0] and minact <=interval[1]:
                    power=True
                    intervall=interval[2]

            if power==True and self.comando==0:
                self.db.update_manual('temp',intervall)
                
            elif power==False and self.comando==1:
                self.db.update_manual('temp',self.mintemp)
                
        except Exception,e:
            logCritical("control calendar %s" %e)
            time.sleep(0.5)
        
    def db_work_start(self):
        while True:
            try:
                actual=time.time()
                self.db.update_work('start',actual)
                self.db.update_work('led',1)
                if self.con_start==0:
                    self.db.update_work('startcon',actual)
                    self.con_start=1
            	    time.sleep(1)
                break
            except Exception,e:
                logCritical("db work start %s" %e)
                time.sleep(0.5)
            
    def db_work_stop(self):
        try:
            self.db.update_work('stop',time.time())
            self.db.update_work('led',0)
            y=self.db.view_work()
            start=float(y[1])
            stop=float(y[2])
            tot=float(y[3])
            day=int(y[4])
            con=int(y[5])
            led=int(y[6])
            totday=float(y[7])
            dayy=date.today().day
            if stop < start:
                s=0
            else:
                s=(stop-start)+tot
                self.db.update_work('tot',s)
                
                d=(stop-start)+totday
                self.db.update_work('totday',d)

        except Exception,e:
            logCritical("work stop %s" %e)
            time.sleep(0.5)
    
    def cont_hour(self):
        try:
            y=self.db.view_work()
            tempo=time.time()
            start_con=float(y[8])
            hour=(int(y[5]) * 3600)
            led=int(y[6])
            stopp =start_con + hour
            if hour > 0:
                if tempo > stopp:
                    #logCritical("start %s stop %s time %s" %(start_con,stopp,tempo))
            	    if led==1:
                	    self.db.update_manual('temp',self.mintemp)
                	    self.con_start=0
        except Exception,e:
            logCritical("cont_hour stop %s" %e)
            time.sleep(0.5)
            
    def run(self):
        i=0
        while True:

            #900 cicli = 1 ora
            #azzero dopo un ora di inattivita in caso abbia spento
            #il termostato manualmente
            #da rivedere
            if self.comando==0:
                i+=1
            if i==900 and self.comando==0 and self.set==self.mintemp:
                self.con_start=0
                i=0
                
            self.db_man()
                
            if self.calendar==1:
                self.db_calendar()
                self.con_start=0
            else:
                if self.comando==1:
                    self.cont_hour()
                       
            if self.actual < self.set and self.bt == 0 and self.comando==0:
                self.db_work_start()
                self.rele1.on()
                self.comando=1
                self.actualtime()
                #self.buddy.doColorName(iBuddyDevice.GREEN, 0.5)
                logCritical("1 %s %s %s" %(self.day,self.hour,self.minute))
       
            if self.actual < self.set and self.cel == 1 and self.bt == 1 and self.comando==0:
                self.db_work_start()
                self.rele1.on()
                self.comando=1
                self.actualtime()
                #self.buddy.doColorName(iBuddyDevice.GREEN, 0.5)
                logCritical("2 %s %s %s" %(self.day,self.hour,self.minute))
            
            if self.bt == 1 and self.cel==1 and self.comando==1 and self.actual > self.set:
                self.db_work_stop()
                self.rele1.off()
                self.comando=0
                i=0
                self.actualtime()
                #self.buddy.doReset()
                logCritical("3 %s %s %s" %(self.day,self.hour,self.minute))
                    
            if self.bt==0 and self.comando==1 and self.actual > self.set:
                self.db_work_stop()
                self.rele1.off()
                self.comando=0 
                i=0
                self.actualtime()
                #self.buddy.doReset()
                logCritical("4 %s %s %s" %(self.day,self.hour,self.minute))
               
            if self.bt == 1 and self.cel==0 and self.comando==1:
                self.db_work_stop()
                self.rele1.off()
                self.comando=0
                i=0
                self.actualtime()
                #self.buddy.doReset()
                logCritical("1 %s %s %s" %(self.day,self.hour,self.minute))

            time.sleep(4)
