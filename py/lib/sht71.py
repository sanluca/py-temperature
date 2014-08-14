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
import ablib
import sys,os,time
from threading import Thread

class MySht(Thread):
    CLOCK_BIT='31'
    DATA_BIT='32'
    GPIO_OUT='low'#0 
    GPIO_IN='in'#1 
    j='J7'

    #Macro per settare la direzione del flusso dei dati
    #pin data ingresso/uscita
    DATA_LINE_IN=ablib.Pin(j,DATA_BIT,GPIO_IN)
    DATA_LINE_OUT=ablib.Pin(j,DATA_BIT,GPIO_OUT)
    #pin clock in uscita
    CLOCK_LINE_OUT=ablib.Pin(j,CLOCK_BIT,GPIO_OUT)
    #pin data 0 1
    DATA_LINE_LOW= DATA_LINE_OUT.off()
    DATA_LINE_HIGH=DATA_LINE_OUT.on()
    #pin data in lettura
    DATA_LINE_READ=DATA_LINE_IN.get_value()
    #pin clock 0 1
    CLOCK_LINE_LOW= CLOCK_LINE_OUT.off()
    CLOCK_LINE_HIGH= CLOCK_LINE_OUT.on()

    CMD_READ_TEMP=0x03
    CMD_READ_HUM=0x05

    def SendStart(self):
# Invia la sequenza di inizializzazione sul bus I2C
        self.DATA_LINE_OUT
        self.CLOCK_LINE_HIGH
        time.sleep(1000/1000000.0)
        self.DATA_LINE_IN
        self.DATA_LINE_LOW
        self.CLOCK_LINE_LOW
        self.CLOCK_LINE_HIGH
        time.sleep(1000/1000000.0)
        self.DATA_LINE_HIGH
        self.CLOCK_LINE_LOW
        self.DATA_LINE_IN
        print "sendstart"
    
    def SendReset(self):
# Resetta il Sensore
        i=0
        #while i==12:
        for i in range(12):
            self.CLOCK_LINE_HIGH
            time.sleep(1)
            self.CLOCK_LINE_LOW
            i+=1

    def SendByte(self,byte):
    # Invia un byte al sensore
        print "sendbyte byte %s" %byte
        i=0x80

        self.DATA_LINE_OUT
        tempbyte=byte
        while i>0:
    #for (i=0x80; i>0; i/=2):# in python?
            if (tempbyte & i):
                self.DATA_LINE_HIGH
            else:
                self.DATA_LINE_LOW
            i=i/2
            print "sendbyte %s" %i

            self.CLOCK_LINE_HIGH
            time.sleep(1000/1000000.0)
            self.CLOCK_LINE_LOW

        self.DATA_LINE_IN
        self.CLOCK_LINE_HIGH
        self.CLOCK_LINE_LOW
        return 1


    def ReadByte(self,withack):
# Legge un byte dal sensore e invia un ack
# withack
#   1 = ACK inviato
#   0 = ACK non inviato
        i=0x80
        tempbyte=0
        self.DATA_LINE_IN
        while i>0:
    #for (i=0x80;i>0;i/=2):
            self.CLOCK_LINE_HIGH
            if (self.DATA_LINE_READ):
                print "readbyte data line %s" %self.DATA_LINE_READ
                tempbyte |=i
            i=i/2
            print "readbyte %s" %i
        self.CLOCK_LINE_LOW
    
        if (withack):
      #ACK del byte
            self.DATA_LINE_OUT
            self.DATA_LINE_LOW
            self.CLOCK_LINE_HIGH
            self.CLOCK_LINE_LOW
            self.DATA_LINE_IN
        else:
      #Senza ACK
            self.DATA_LINE_OUT
            self.DATA_LINE_HIGH
            self.CLOCK_LINE_HIGH
            self.CLOCK_LINE_LOW
            self.DATA_LINE_IN
        return tempbyte

    def ReadTemperature(self):
#Legge la temperatura

        self.SendStart()
        if self.SendByte(self.CMD_READ_TEMP)==False:
            return 0
        while (self.DATA_LINE_READ):
            Msb=self.ReadByte(1)
            Lsb=self.ReadByte(1)
            Chk=self.ReadByte(0)

        return((Msb<<8)+Lsb)

    def ReadHumidity(self):
#unsigned char Lsb,Msb,Chk;
	print "entro in readumidity"
        self.SendStart()
        if self.SendByte(self.CMD_READ_HUM)==False:
            return 0
        while (self.DATA_LINE_READ):
            Msb=self.ReadByte(1)
            Lsb=self.ReadByte(1)
            Chk=self.ReadByte(0)
	print "readumidity"
        return((Msb<<8)+Lsb)
    
    def run(self):

        while 1:
    #assume 12 bit (rather than 8 bit) accuracy
            soh = self.ReadHumidity()
            sot = self.ReadTemperature()
  #  if (verbose) fprintf(stderr, "soh=%d [0x%x]  sot=%d [0x%x]\n", soh, soh,  sot, sot);
    
    # new formula from SHT7x version 4.1 datasheet
            rel_humidity = -2.0468 + (0.0367 * soh) + (-1.5955E-6 * soh * soh)
    
    # older formula
    #rel_humidity = -4 + (0.0405 * soh) + -2.8E-6
#endif

            if (rel_humidity > 99.9):
                rel_humidity = 100.0
            elif (rel_humidity < 0.1):
                rel_humidity = 0.0

            temperature_c = -39.66 + (0.01 * sot)
            print ("Rel. Humidity: %.2f %%\n", rel_humidity)
            print ("Temperature  : %.2f C\n", temperature_c)
            time.sleep(2)
            
prova=MySht()
prova.start()




    
    
    
