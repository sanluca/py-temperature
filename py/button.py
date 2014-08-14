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
import time,sys,os
from threading import Thread
from baseconfig import *
sys.path.append("%slib" %workingDir)
#db
from database import *
from paglcd import *
import ablib
from tools import *
#logCritical("")
class MyButton(Thread):
    db=Mydata()
    plcd=Myplcd()
    pos=0
    menuSet=False
    menuMtemp=False
    menuCal=False
    menuBt=False
    menuHo=False
    enter=False
    lcd = ablib.Daisy24(0,0x38)
    ledlcd=False
    press1=False
    
    
    def but(self):
        try:
            bu = ablib.Pin('J6','15','in')
            self.b = bu.get_value()
        except Exception,e:
            logCritical("%s" %e)
            time.sleep(0.5)
        
    def but1(self):
        try:
            bu1 = ablib.Pin('J6','16','in')
            self.b1=bu1.get_value()
        except Exception,e:
            logCritical("%s" %e)
            time.sleep(0.5)
    def actualTime(self):
        actualTime=time.localtime()
        self.year=actualTime[0]
        self.month=actualTime[1]
        self.day=actualTime[2]
        self.hour=actualTime[3]
        self.minute=actualTime[4]
    
    def view_work(self):
        y=self.db.view_work()
        self.hour=(int(y[5]))
        self.led=int(y[6])
            
    def view_manual(self):
        #(temp_ac, temp,calendar, button, bt)
        z=self.db.view_manual()
        self.temp_ac=z[1]
        self.set=z[2]
        self.mintemp=z[3]
        self.cal=z[4]
        self.manual=z[5]
        self.bt=z[6]
        self.scan=z[7]
        self.cel=z[8]
        self.temp_dht=z[9]
        self.umi_dht=z[10]
        
    def manual_b1(self):
        command=("reboot")
        os.system(command)
    def manual_b2(self):
        command=("shutdown -h now")
        os.system(command)        

    def tempUP(self):
        self.view_manual()
        self.set=int(self.set)+1
        self.db.update_manual('temp',int(self.set))
    
    def tempDOWN(self):
        self.view_manual()
        self.set=int(self.set)-1
        self.db.update_manual('temp',int(self.set))
        
    def tempMinUP(self):
        self.view_manual()
        self.mintemp=int(self.mintemp)+1
        self.db.update_manual('mintemp',int(self.mintemp))
    
    def tempMinDOWN(self):
        self.view_manual()
        self.mintemp=int(self.mintemp)-1
        self.db.update_manual('mintemp',int(self.mintemp))
        
    def menuCalendar(self,cal):
        self.view_manual()
        self.db.update_manual('calendar',int(cal))
        if int(cal)==1:
            self.db.update_manual('button',0)
        else:
            self.db.update_manual('button',1)
            
    def menuBluetooth(self,cal):
        self.db.update_manual('bt',int(cal))
        
    def menuHourUP(self):
        self.view_work()
        self.h=int(self.hour)+1
        self.db.update_work('con',int(self.h))
    
    def menuHourDOWN(self):
        self.view_work()
        if self.hour>0:
            self.h=int(self.hour)-1
            self.db.update_work('con',int(self.h))
        
    
    def run(self):
        self.plcd.pagina(0,True)
        i=0
        z=0
        
        while True:
            self.pos=self.plcd.returnPos()    
            self.but()
            self.but1()
            time.sleep(0.2)
            z+=1
            
            if self.b==0 and self.b1==1:
                self.manual_b1()
                            
            if self.b1==0 and self.b==1:
                self.manual_b2()
            
            if self.lcd.pressed(0):
                self.ledlcd=True
                if self.press1==True and self.menuSet==False and self.menuMtemp==False and self.menuCal==False and self.menuBt==False and self.menuHo==False:
                    if self.pos <=7:
                        self.pos=self.pos+1
                        self.plcd.pagina(self.pos,True)    
                        
                elif self.menuSet==True:
                    self.tempUP()
                    time.sleep(0.5)
                    self.plcd.pagina(2,False)
                    self.enter=True
                    
                elif self.menuMtemp==True:
                    self.tempMinUP()
                    time.sleep(0.5)
                    self.plcd.pagina(3,False)
                    self.enter=True
                
                elif self.menuCal==True:
                    self.menuCalendar(1)
                    time.sleep(0.5)
                    self.plcd.pagina(4,False)
                    self.enter=True
                    
                elif self.menuBt==True:
                    self.menuBluetooth(1)
                    time.sleep(0.5)
                    self.plcd.pagina(6,False)
                    self.enter=True
                    
                elif self.menuHo==True:
                    self.menuHourUP()
                    time.sleep(0.5)
                    self.plcd.pagina(7,False)
                    self.enter=True
                    
            if self.lcd.pressed(1):
                self.ledlcd=True
                if self.press1==True and self.menuSet==False and self.menuMtemp==False and self.menuCal==False and self.menuBt==False and self.menuHo==False:
                    if self.pos > 0:
                        self.pos=self.pos-1
                        self.plcd.pagina(self.pos,True)
                        
                elif self.menuSet==True:
                    self.tempDOWN()
                    time.sleep(0.5)
                    self.plcd.pagina(2,False)
                    self.enter=True
                    
                elif self.menuMtemp==True:
                    self.tempMinDOWN()
                    time.sleep(0.5)
                    self.plcd.pagina(3,False)
                    self.enter=True
                
                elif self.menuCal==True:
                    self.menuCalendar(0)
                    time.sleep(0.5)
                    self.plcd.pagina(4,False)
                    self.enter=True
                    
                elif self.menuBt==True:
                    self.menuBluetooth(0)
                    time.sleep(0.5)
                    self.plcd.pagina(6,False)
                    self.enter=True
                
                elif self.menuHo==True:
                    self.menuHourDOWN()
                    time.sleep(0.5)
                    self.plcd.pagina(7,False)
                    self.enter=True
                    
            
            if self.lcd.pressed(2):
                if self.pos==2:
                    self.menuSet=True
                    self.plcd.pagina(2,False)
                    
                elif self.pos==3:
                    self.menuMtemp=True
                    self.plcd.pagina(3,False)
                    
                elif self.pos==4:
                    self.menuCal=True
                    self.plcd.pagina(4,False)
                    
                elif self.pos==6:
                    self.menuBt=True
                    self.plcd.pagina(6,False)
                
                elif self.pos==7:
                    self.menuHo=True
                    self.plcd.pagina(7,False)
                    
                if self.enter==True:
                    self.menuSet=False
                    self.menuMtemp=False
                    self.menuCal=False
                    self.menuBt=False
                    self.enter=False
                    self.menuHo=False
                    self.plcd.pagina(self.pos,True)  
            
            if i==1200:
                self.plcd.pagina(0,True)
                self.ledlcd=False
                self.lcd.backlightoff()
                i=0
                
            if self.ledlcd==True:
                i+=1
                self.lcd.backlighton()
                self.press1=True
                
            if self.ledlcd==False and z>=1200:
                self.plcd.pagina(0,True)
                z=0
                self.press1=False