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
import _mysql

class Mydata():
    def __init__(self):
    
        self.db=_mysql.connect(host="127.0.0.1",db="temp",user="root",passwd="root")
        
    def database_conn(self):
        self.db=_mysql.connect(host="127.0.0.1",db="temp",user="root",passwd="root")
    
    def create_db(self):
        self.db.query("""create table if not exists manual (Id INT PRIMARY KEY AUTO_INCREMENT, temp_ac FLOAT, temp FLOAT,mintemp FLOAT, calendar NUMERIC, button NUMERIC, bt NUMERIC, scan NUMERIC, cel NUMERIC, tempdht FLOAT, umidht FLOAT);""")
        self.db.query("""create table if not exists work (Id INT PRIMARY KEY AUTO_INCREMENT, start DOUBLE, stop DOUBLE, tot DOUBLE, day NUMERIC, con NUMERIC, led NUMERIC, totday DOUBLE, startcon DOUBLE);""")
        self.db.query("""create table if not exists hours(Id INT PRIMARY KEY AUTO_INCREMENT, day INT, month INT, year INT, hour INT, temp FLOAT, min FLOAT, max FLOAT, len NUMERIC);""")
        self.db.query("""create table if not exists hours_day(Id INT PRIMARY KEY AUTO_INCREMENT, day INT, month INT, year INT, hours FLOAT);""")
        self.db.query("""create table if not exists dht(Id INT PRIMARY KEY AUTO_INCREMENT, day INT, month INT, year INT, hour INT, umidity FLOAT, min FLOAT, max FLOAT,temperature FLOAT, mint FLOAT, maxt FLOAT, len NUMERIC);""")
        self.db.query("""create table if not exists bluetooth(Id INT PRIMARY KEY AUTO_INCREMENT,name char(64), device char(64), scan NUMERIC);""")
        self.db.query("""create table if not exists email(Id INT PRIMARY KEY AUTO_INCREMENT,email char(40), activ NUMERIC);""")
        self.db.query("""create table if not exists pec_mssgs (id mediumint(5) unsigned NOT NULL auto_increment, uid tinyint(3) unsigned NOT NULL default '0', m tinyint(2) NOT NULL default '0',d tinyint(2) NOT NULL default '0',y smallint(4) NOT NULL default '0',start_time time NOT NULL default '00:00:00',end_time time NOT NULL default '00:00:00',title varchar(50) NOT NULL default '',text text NOT NULL,PRIMARY KEY  (id)) TYPE=MyISAM;""")
        self.db.query("""create table if not exists pec_users (uid smallint(6) NOT NULL auto_increment,username char(15) NOT NULL default '',password char(32) NOT NULL default '',fname char(20) NOT NULL default '',lname char(30) NOT NULL default '0',userlevel tinyint(2) NOT NULL default '0',email char(40) default NULL,PRIMARY KEY  (uid)) TYPE=MyISAM;""")
        self.db.query("""create table if not exists calendar_users (user_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,username VARCHAR(30) NOT NULL,password VARCHAR(30) NOT NULL,description TEXT,group_id INT(11) NOT NULL ) TYPE = MYISAM; """)
        self.db.query("""create table if not exists calendar_cat (cat_id int(11) NOT NULL auto_increment,cat_name varchar(150) NOT NULL default '',PRIMARY KEY  (cat_id),UNIQUE KEY cat_id (cat_id)) TYPE=MyISAM; """)
        self.db.query("""create table if not exists calendar_events (id int(11) NOT NULL auto_increment,timestamp timestamp(14) NOT NULL,title varchar(255) NOT NULL default '',description text NOT NULL,url varchar(100) NOT NULL default '',email varchar(120) NOT NULL default '',cat tinyint(2) NOT NULL default '0',starttime varchar(8) NOT NULL default '',endtime varchar(8) NOT NULL default '',day tinyint(2) NOT NULL default '0',month smallint(2) NOT NULL default '0',year smallint(4) NOT NULL default '0',approved tinyint(1) NOT NULL default '0',priority tinyint(1) NOT NULL default '0',user varchar(30) NOT NULL default '',timezone varchar(5) NOT NULL default '',PRIMARY KEY (id),UNIQUE KEY id (id)) TYPE=MyISAM;""")
        self.db.query("""create table if not exists calendar_param (name VARCHAR(150) NOT NULL,value VARCHAR(150)) TYPE = MYISAM; """)

    def populate_db(self):
        self.db.query("insert into manual (temp_ac, temp,mintemp,calendar, button, bt, scan,cel,tempdht,umidht) values (%f,%f,%f,%d,%d,%d,%d,%d)" %(10, 10, 5,0, 0, 0, 0,0,0,0))
        self.db.query("insert into work (start, stop, tot, day, con, led, totday, startcon) values (%f,%f,%f,%d,%d,%d,%f,%f)" %(1, 1, 0, 0, 0, 0, 0, 0))
        self.db.query("insert into email (email, activ) values ('%s',%d)" %('sanluca78@gmail.com', 0))
        self.db.query("insert into pec_users (username, password, fname, lname, userlevel, email) VALUES ('%s','%s','%s','%s','%s','%s')" %('luca', 'luca', 'default', 'user', 2, ''))
        self.db.query("insert into calendar_users (user_id, username, password, description, group_id) VALUES (null, 'luca', 'wekcBDDymwQBs', '', '0')")
        self.db.query("insert into calendar_cat VALUES (1,'General')")
        self.db.query("insert into calendar_param (name, value) VALUES ('session_timeout', '3600')")
        
    def delete_table(self):
        self.db.query("drop table if exists manual")
        self.db.query("drop table if exists work")
        self.db.query("drop table if exists hours")
        self.db.query("drop table if exists calendar")
        self.db.query("drop table if exists bluetooth")
        self.db.query("drop table if exists email")
        
    def database_close(self):
        self.db.close()
    
    def riavvio_db(self):
        self.database_close()
        self.database_conn()
        
	
    def save_manual(self,temp,rele):
        self.db.query("insert into manual values (?,?,?)",(None, temp, rele))
        
    def update_manual(self,par,value):
        self.db.query("update manual set %s=%f where id = 1" %(par,value))
        
    def view_manual(self):
        self.db.query("select * from manual where id = 1") 
        r=self.db.store_result()
        for row in r.fetch_row(0):
            return row
        
    def update_work(self,par,value):
        self.db.query("update work SET %s=%f where id = 1" %(par,value))
    
    def view_work(self):
        self.db.query("select * from work where id = 1")
        r=self.db.store_result() #rende disponibili i risultati
        for x in r.fetch_row(0):
            return x
        
    def insert_hours(self,day,month,year,hour, temp, min, max, len):
        self.db.query("insert into hours (day, month, year, hour, temp, min, max, len) values (%d,%d,%d,%d,%f,%f,%f,%d)" %(day,month,year,hour, temp, min, max, len))
    
    def insert_dht(self,day,month,year,hour, umidity, min, max,temperature, mint, maxt, len):
        self.db.query("insert into dht (day, month, year, hour, umidity, min, max,temperature, mint, maxt, len) values (%d,%d,%d,%d,%f,%f,%f,%f,%f,%f,%d)" %(day,month,year,hour, umidity, min, max,temperature, mint, maxt, len))
#Id INT PRIMARY KEY AUTO_INCREMENT, day INT, month INT, year INT, hours FLOAT
    def insert_hours_day(self,day,month,year,hours):
        self.db.query("insert into hours_day (day, month, year, hours) values (%d,%d,%d,%f)" %(day,month,year,hours))

    def view_hours(self):
        self.db.query("select * from hours")
        r=self.db.store_result() #rende disponibili i risultati
        return r
        
    def delete_hours_all(self):
        self.db.query("delete from hours")

    def insert_bt(self,name,mc,scan):
        self.db.query("insert into bluetooth (name, device, scan) values ('%s','%s','%s')" %(name,mc,scan))

    def view_bt(self):
        self.db.query("select * from bluetooth")
        r=self.db.store_result()
        results=r.fetch_row(0)
        return results
        
    def delete_bt_all(self):
        self.db.query("delete from bluetooth")

    def update_bt(self,par,value,id):
        self.db.query("update bluetooth SET %s=%d where id = %d" %(par,value,id))

    def update_email(self,par,value):
        self.db.query("update email SET %s=%d where id = 1" %(par,value))

    def view_email(self):
        self.db.query("select * from email where id = 1")
        r=self.db.store_result() #rende disponibili i risultati
        results=r.fetch_row(0)
        for x in results:
            return x

    #id, uid , m ,d ,y ,start_ '00:00:00',end '00:00:00',title ,text       
    def view_calendar(self,m,d,y):
        self.db.query("select * from pec_mssgs where m='%s' and d='%s' and y='%s'" %(m,d,y))
        r=self.db.store_result()
        results=r.fetch_row(0)
        return results
    
    def view_calendarix(self,month,day,year):
        self.db.query("select * from calendar_events where month='%s' and day='%s' and year='%s'" %(month,day,year))
        r=self.db.store_result()
        results=r.fetch_row(0)
        return results
    
    def delete_row_calendar(self,day,month,year):
        self.db.query("delete from calendar where day=%d and month=%d and year=%d" % (day,month,year))
