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
import time,sys,math,smtplib,ablib
from threading import Thread
from database import *
from tools import *
class MyStorage(Thread):
    db=Mydata()
    lista=[]
    listadhtum=[]
    listadhtemp=[]
    midnight=0
    night=0
    
    def dallas(self):
        while True:
            try:
                sensor = ablib.DS18B20("000003dcd532")
                self.actual1 = sensor.getTemp()
                self.actual = "%.02f" %self.actual1
                if self.actual == None:
                    pass
                else:
                    self.db.update_manual('temp_ac',float(self.actual))
                    break
            except Exception,e:
                logCritical("storage dallas %s" %e)
                if e[0] == 2006:
                    self.db.riavvio_db()
                time.sleep(0.3)
    def dht(self):
        try:
            if os.path.exists("/dev/shm/dht11.txt"):
                for line in file("/dev/shm/dht11.txt"):
                    if line.strip().endswith("OK"):
                        listadht=line.split()
                        self.umidht=listadht[0]
                        self.tempdht=listadht[2]
                        self.db.update_manual('umidht',float(self.umidht))
                        self.db.update_manual('tempdht',float(self.tempdht))

            else:
                self.umidht=0
                self.tempdht=0
        except:
            self.umidht=0
            self.tempdht=0
                    
                    
    def insert_storage(self,day,month,year,hour,te,min,max,lu):
        self.db.insert_hours(day,month,year,hour,te,min,max,lu)
    
    def insert_dht(self,day,month,year,hour, umidity, min, max,temperature, mint, maxt, len):
        self.db.insert_dht(day,month,year,hour, umidity, min, max,temperature, mint, maxt, len)
        
    def insert_hours_day(self,day,month,year,hours):
        self.db.insert_hours_day(day,month,year,hours)
        
    def Media(self,numeri):
        if not numeri:
            return None
        somma = 0
        for num in numeri:
            somma += num
        self.media= float(somma) / len(numeri)
        
    def email(self):
        z= self.db.view_email()
        self.email=z[1]
        self.active=int(z[2])
    
    def run(self):
        while True:
            actualTime=time.localtime()
            year=actualTime[0]
            month=actualTime[1]
            day  =actualTime[2]
            hour =actualTime[3]
            minute=actualTime[4]
            self.dallas()
            self.dht()
            self.lista.append(float(self.actual))
            self.listadhtum.append(float(self.umidht))
            self.listadhtemp.append(float(self.tempdht))
            
            if minute!=0:
                if self.midnight==0:
                    pass
                else:
                    self.midnight=0
            else:
                if self.midnight==0:
                    self.Media(self.lista)
                    minuu=min(self.lista)
                    maxii=max(self.lista)
                    media1="%.02f" % self.media
                    minu="%.02f" % minuu
                    maxi="%.02f" %maxii
                    lu = len(self.lista)
                    self.insert_storage(day,month,year, hour, float(media1), float(minu), float(maxi) ,lu)
                    self.lista=[]
                    #insert_dht(self,day,month,year,hour, umidity, min, max,temperature, mint, maxt, len):
                    self.Media(self.listadhtum)
                    umminn=min(self.listadhtum)
                    ummaxx=max(self.listadhtum)
                    umedia="%.02f" %self.media
                    umin="%.02f" %umminn
                    umax="%.02f" %ummaxx
                    ulu=len(self.listadhtum)
                    
                    self.Media(self.listadhtemp)
                    teminn=min(self.listadhtemp)
                    temaxx=max(self.listadhtemp)
                    tedia="%.02f" %self.media
                    tmin="%.02f" %teminn
                    tmax="%.02f" %temaxx
                    self.insert_dht(day,month,year,hour, float(umedia), float(umin), float(umax),float(tedia), float(tmin), float(tmax), ulu)
                    self.listadhtum=[]
                    self.listadhtemp=[]
                    self.midnight=1
            #salvo il funzionamento giornaliero della caldaia        
            if hour==23:
                if minute==59:
                    if self.night==0:
                        y=self.db.view_work()
                        start=float(y[1])
                        stop=float(y[2])
                        tot=float(y[3])
                        days=int(y[4])
                        con=int(y[5])
                        led=int(y[6])
                        totday=float(y[7])
                        if led==0:
                        #Id INT PRIMARY KEY AUTO_INCREMENT, day INT, month INT, year INT, hours FLOAT
                            totday=totday/3600
                            self.insert_hours_day(day,month,year,totday)
                            self.db.update_work('totday',0)
                        else:
                            s=time.time()
                            totday=(s-start)+totday
                            totday=totday/3600
                            #day=day-1#giorno precedente da cambiare
                            self.insert_hours_day(day,month,year,totday)
                            self.db.update_work('start',s)
                            self.db.update_work('totday',0)
                    self.night=1  
                else:
                    self.night=0
                

            time.sleep(60)
