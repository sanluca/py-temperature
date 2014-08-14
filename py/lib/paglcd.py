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
import time,sys,os,ablib
from database import *
from tools import *

class Myplcd():
    pos=0
    db=Mydata()
    lcd = ablib.Daisy24(0,0x38)
    
    def actualTime(self):
        actualTime=time.localtime()
        self.year=actualTime[0]
        self.month=actualTime[1]
        self.day=actualTime[2]
        self.hour=actualTime[3]
        self.minute=actualTime[4]
        
    def view_manual(self):
        try:
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
        except Exception,e:
            logCritical("paglcd %s" %e)
            if e[0] == 2006:
                self.db.riavvio_db()
                time.sleep(0.3)
        
    def view_work(self):
        y=self.db.view_work()
        self.hour=(int(y[5]))
        
    def pagina(self,pos,font):
        self.view_manual()
        self.actualTime()
        self.lcd.clear()
        self.lcd.setcontrast(5)
        
        if font == True:
            self.lcd.setsinglefont()
        else:
            self.lcd.setdoublefont()
            
        if pos==0:
            self.lcd.putstring("%s/%s/%s-%s:%s" %(self.day,self.month,self.year,self.hour,self.minute))
            self.lcd.setcurpos(0,1)
            self.lcd.putstring("%s gradi" %self.temp_ac)
            self.pos=0
        
        elif pos==1:
            self.lcd.putstring("DHT %s C %s " %(self.temp_dht,self.umi_dht))
            self.pos=1
        
        elif pos==2:
            self.lcd.putstring("Set %s C" %self.set)
            self.pos=2
        
        elif pos==3:
            self.lcd.putstring("Min Temp %s C" %self.mintemp)
            self.pos=3
        
        elif pos==4:
            self.lcd.putstring("Calendario %s" %self.cal)
            self.pos=4
        
        elif pos==5:
            self.lcd.putstring("Manuale %s" %self.manual)
            self.pos=5
        
        elif pos==6:
            self.lcd.putstring("Bluetooth %s" %self.bt)
            self.pos=6
        
        elif pos==7:
            self.view_work()
            self.lcd.putstring("Ore Cont %s" %self.hour)
            self.pos=7
            
        
    def returnPos(self):
        return self.pos
        
        
        
        
        
        

        