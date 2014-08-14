#!/bin/sh
### BEGIN INIT INFO
# Provides:          pytemperature
# Required-Start:    
# Required-Stop:
# Should-Start:      
# Default-Start:     2 3
# Default-Stop:      0 1 6 
# Short-Description: pytemperature.
# Description:       pytemperature.
### END INIT INFO

case $1 in 
  start)
   /media/data/pytemperature/py/main.py start
  ;;
  stop)
   kill -9 $(cat /var/run/pytemperature.pid)
  ;;
esac
