
/*
 *      dht11.c:
 *	Simple test program to test the wiringPi functions
 *	DHT11 test
 */

/*#include <wiringPi.h>*/

#include <stdio.h>
#include <stdlib.h>
#include <stdint.h>
#include <time.h>
#include <unistd.h>
#define MAXTIMINGS 80
#define OPEN_DIO 60
#define OPEN_IRQ 59
int dht11_dat[5] = {0,0,0,0,0};

int gpioexport(int gpioid) 
{
	FILE *filestream;

	if ((filestream=fopen("/sys/class/gpio/export","w"))==NULL) {
		printf("Error on export GPIO\n");
		return -1;
	}	
	fprintf(filestream,"%d",gpioid);
	fclose(filestream);
	return 0;
}

int gpiosetdir(int gpioid,char *mode) 
{
	FILE *filestream;
	char filename[50];

	sprintf(filename,"/sys/class/gpio/gpio%d/direction",gpioid);
	if ((filestream=fopen(filename,"w"))==NULL) {
		printf("Error on direction setup\n");
		return -1;
	}	
	fprintf(filestream,mode);
	fclose(filestream);
	return 0;
}

int gpiogetbits(int gpioid) 
{
	FILE *filestream;
	char filename[50];
	char retchar;

	sprintf(filename,"/sys/class/gpio/gpio%d/value",gpioid);
	if ((filestream=fopen(filename,"r"))==NULL) {
		printf("Error on gpiogetbits %d\n",gpioid);
		return -1;
	}	
	retchar=fgetc(filestream);
	fclose(filestream);
	if (retchar=='0') return 0;
	else return 1;
}

int gpiosetbits(int gpioid) 
{
	FILE *filestream;
	char filename[50];

	sprintf(filename,"/sys/class/gpio/gpio%d/value",gpioid);
	if ((filestream=fopen(filename,"w"))==NULL) {
		printf("Error on setbits %d\n",gpioid);
		return -1;
	}	
	fprintf(filestream,"1");
	fclose(filestream);
	return 0;
}

int gpioclearbits(int gpioid) 
{
	FILE *filestream;
	char filename[50];

	sprintf(filename,"/sys/class/gpio/gpio%d/value",gpioid);
	if ((filestream=fopen(filename,"w"))==NULL) {
		printf("Error on clearbits %d\n",gpioid);
		return -1;
	}	
	fprintf(filestream,"0");
	fclose(filestream);
	return 0;
}

void read_dht11_dat()
{
  int laststate = 1;
  uint8_t counter = 0;
  uint8_t j = 0, i;
  float f; // fahrenheit

  dht11_dat[0] = dht11_dat[1] = dht11_dat[2] = dht11_dat[3] = dht11_dat[4] = 0;
  //printf ("pin0 %d\n",gpiogetbits(DHTPIN));
  gpioexport(OPEN_IRQ);
  gpioexport(OPEN_DIO);
  gpiosetdir(OPEN_DIO,"out");
  gpiosetdir(OPEN_IRQ,"in");
  
  // pull pin down for 18 milliseconds
  gpioclearbits(OPEN_DIO);
  //printf ("pin1 %d\n",gpiogetbits(DHTPIN));
  usleep(1000000);
  // then pull it up for 40 microseconds
  gpiosetbits(OPEN_DIO);
  usleep(250);//250us
  gpioclearbits(OPEN_DIO);
  usleep(250);//primo bit a 1 start
  
  gpiosetbits(OPEN_DIO);
  usleep(250);//250us
  gpioclearbits(OPEN_DIO);
  usleep(500);//secondo bit a 1 parity
  
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);//manda i bit di messaggio 000
  
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);//manda i bit di spare 0000
  
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(500);
  gpioclearbits(OPEN_DIO);
  usleep(250);//mando i bit di data-id 00000001
  
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(250);
  gpioclearbits(OPEN_DIO);
  usleep(250);
  gpiosetbits(OPEN_DIO);
  usleep(500);//mando i bit di data-value 0000000000000000
  
  gpioclearbits(OPEN_DIO);//mando il bit di stop 1
  
  
  
  //printf ("pin2 %d\n",gpiogetbits(DHTPIN));
  //usleep(1000000); 
  //gpioclearbits(OPEN_DIO);
  //usleep(20000);
 // sleep(0.1);
  // prepare to read the pin
  //	  //printf("pin %d\n",gpiogetbits(DHTPIN));
	  //printf("laststate %d\n", laststate);
    counter = 0;
   // for (i = 0; i < 5; ++i)   printf(" %d ",umidity[i]);
    while (1) {
      counter++;
      printf ("%d",gpiogetbits(OPEN_IRQ));
      usleep(250);
      if (counter == 2000) {
        break;
      }
    }
   // laststate = gpiogetbits(DHTPIN);

 //   if (counter == 255) break;

    // ignore first 3 transitions
  //  if ((i >= 4) && (i%2 == 0)) {
//    	printf ("counter1 %d\n",counter);
  //  	printf ("i %d\n",i);
      // shove each bit into the storage bytes
 //     dht11_dat[j/8] <<= 1;
  //    if (counter > 16)
    //    dht11_dat[j/8] |= 1;
    //  printf("j1 %d\n",j);
    //  printf("dht %d\n",dht11_dat[j/8]);
    //  printf("dht2 %d\n",dht11_dat);
   //   j++;
  //  }
  }

  // check we read 40 bits (8bit x 5 ) + verify checksum in the last byte
  // print it out if data is good
//  printf("j %d \n",j);
  
//  if ((j >= 40) && 
 //     (dht11_dat[4] == ((dht11_dat[0] + dht11_dat[1] + dht11_dat[2] + dht11_dat[3]) & 0xFF)) ) {
 //   f = dht11_dat[2] * 9. / 5. + 32;
 //   printf("Humidity = %d.%d %% Temperature = %d.%d *C (%.1f *F)\n", 
  //          dht11_dat[0], dht11_dat[1], dht11_dat[2], dht11_dat[3], f);
//  }
 // else
 // {
 //   printf("Data not good, skip\n");
 // }
//}

int main (void)
{

  printf ("Netus DHT11 Temperature test program\n") ;

//  if (wiringPiSetup () == -1)
 //   exit (1) ;

  while (1) 
  {
     read_dht11_dat();
     usleep(1000000); // wait 1sec to refresh
  }

  return 0 ;
}
