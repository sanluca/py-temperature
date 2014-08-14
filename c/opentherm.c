/*
 * Copyright (c) 2010-2013 Douglas Gilbert.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 * 1. Redistributions of source code must retain the above copyright
 *    notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 * 3. The name of the author may not be used to endorse or promote products
 *    derived from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR AND CONTRIBUTORS ``AS IS'' AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED.  IN NO EVENT SHALL THE AUTHOR OR CONTRIBUTORS BE LIABLE
 * FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 * DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS
 * OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)
 * HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY
 * OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */


/*****************************************************************
 * w1_bbtest.c
 *
 * One wire "bit-banging" test program. Uses bidirectional GPIO line on
 * the FoxLX/G20 to manipulate the one wire IO line. For The FoxLX on the
 * G port only IOG0 and IOG24 are suitable. The IO line should have a
 * pull-up resistor on it (try 4.7k). This utility runs the master end
 * of one wire protocol in the user space. This code follows the Linux
 * convention as uses "w1" as an abbreviation for "one wire".
 *
 * Based on Arduino OneWire library logic
 *
 * Note that the one wire protocol does not like being interrupted by
 * the OS scheduler as often happens to a user space program like this.
 * So getting CRC errors from time to time is expected. Note that the
 * I2C protocol is much more robust in this respect.
 *
 * Alternative: Instead of using this bit banging user space program
 * then the Linux kernel w1_gpio module could be used together with
 * a w1 "slaves" driver. For the one wire temperature chips: DS18B20,
 * DS18C20 and DS1822; the additional module is called w1_therm .
 * You will need to find which GPIO line it uses (I used PB16 on the
 * FoxG20). If a w1 slave is found then:
 *    # cat '/sys/devices/w1 bus master/w1_master_slaves'
 * will return the device id. Then use that device id like this:
 *    # cat '/sys/devices/w1 bus master/28-0000018a43ea/w1_slave'
 *    3e 01 4b 46 7f ff 02 10 6c : crc=6c YES
 *    3e 01 4b 46 7f ff 02 10 6c t=19875
 * The temperature*16 is in the first 2 bytes, LSB,MSB
 * 318/16 = 19.875 C [0x13e=318]
 *
 ****************************************************/

/**************************************************************
 * Linux seems to have a pass-through interface for w1 based
 * on the netlink mechanism. In the kernel source see:
 *   Documentation/w1/w1.netlink
 **************************************************************/

#define _XOPEN_SOURCE 500

#include <stdio.h>
#include <stdlib.h>
#include <ctype.h>
#include <string.h>
#include <unistd.h>
#include <sys/ioctl.h>
#include <fcntl.h>
#include <time.h>
#include <errno.h>


static const char * version_str = "0.01 201302108";


#define EXPORT_FILE "/sys/class/gpio/export"
#define UNEXPORT_FILE "/sys/class/gpio/unexport"
#define GPIO_BASE_FILE "/sys/class/gpio/gpio"
#define PIO_BASE_FILE "/sys/class/gpio/pio"
#define GPIO_BANK_ORIGIN "/sys/class/gpio/gpiochip0"
/* Earlier kernels (G20+G25) offset GPIO numbers by 32 so
 * /sys/class/gpio/gpiochip32 (a directory) was the lowest numbered bank
 * and corresponded to PIOA (therefore PA0 was gpio number 32). By lk 3.7
 * /sys/class/gpio/gpiochip0 existed and corresponded to PIOA (therefore
 * PA0 becomes gpio number 0).
 * In lk 3.8 the sysfs gpio file names changed from /sys/class/gpio/gpio37
 * to /sys/class/gpio/pioB5 however the export and unexport files still
 * expect GPIO numbers.
 */


<<<<<<< .mine
#define DEF_dht11_PIN 59
#define DEF_open 60
=======
#define DEF_dht11_PIN 59
#define DEF_dht11_PINN 60
>>>>>>> .r68

static int dht11_pin = DEF_dht11_PIN;
<<<<<<< .mine
static int open=DEF_open;
=======
static int open = DEF_dht11_PINN;
>>>>>>> .r68
static int dht11_port = 'B';     /* bank (i.e. 'A', 'B', etc ). */
static int dht11_pin_in_bank = (DEF_dht11_PIN % 32);

static int exp_dht11 = -1;
static int unexp_dht11 = -1;
static int direction_dht11 = -1;
static int val_dht11 = -1;

static int origin0 = 0;



/* On the g20, each call to rand() in the loop takes about
 * 0.40 microseconds */
static int dht11_delay_us(int microseconds, int plus_io)
{
    int k, num;
    int n = 0;

    if (plus_io)
        microseconds -= 2;  /* approximate one IO operation overhead */
    if (microseconds <= 0)
        return 0;
    else if (microseconds >= 200) {
        struct timespec ts;

        ts.tv_sec = microseconds / 1000000;
        ts.tv_nsec = (microseconds % 1000000) * 1000;
        nanosleep(&ts, NULL);   /* assume won't be interrupted */
    } else {
        num = (microseconds * 5) / 2;
        for (k = 0; k < num; ++k)
            n += rand();
    }
    return n;
}

static int dht11_getbit(void)
{
    char b[2];
    int res;
    memset(b, 0,  sizeof(b));
    if ((res = pread(val_dht11, b, 1, 0)) <= 0) {
        return 1;
    }
    return ('0' != b[0]);
}


static void dht11_dir_out(void)
{
    pwrite(direction_dht11, "out", 3, 0);
}

static void dht11_dir_in(void)
{
    pwrite(direction_dht11, "in", 2, 0);
}

static void dht11_setbit(int state)
{
    if (state)
        pwrite(direction_dht11, "high", 4, 0);
    else
        pwrite(direction_dht11, "low", 3, 0);
}

static void dht11_data(int state)
{
    if (state)
        pwrite(direction_dht11, "in", 2, 0);
    else
        pwrite(direction_dht11, "low", 3, 0);
}

// Return -1 for problems, 0 for okay
static int init_atmel_pin()
{
    struct stat sb;
    char b[256];
    char base_dir[128];

    exp_dht11 = open(EXPORT_FILE, O_WRONLY);
    if (exp_dht11 < 0) {
        fprintf(stderr, "Open %s: %s\n", EXPORT_FILE, strerror(errno));
        return -1;
    }
    unexp_dht11 = open(UNEXPORT_FILE, O_WRONLY);
    if (unexp_dht11 < 0) {
        fprintf(stderr, "Open %s: %s\n", UNEXPORT_FILE, strerror(errno));
        return -1;
    }
    snprintf(b, sizeof(b), "%d", dht11_pin);
    if (pwrite(exp_dht11, b, strlen(b), 0) < 0) {
        fprintf(stderr, "Unable to export dht11 [pin %d] (already in use?): "
                "%s\n", dht11_pin, strerror(errno));
        return -1;
    }
    /* check if /sys/class/gpio/gpio<knum> directory exists */
    snprintf(base_dir, sizeof(base_dir), "%s%d", GPIO_BASE_FILE, dht11_pin);
    if (stat(base_dir, &sb) >= 0) {
    } else {
        /* check if /sys/class/gpio/pio<bank><bn> directory exists */
        snprintf(base_dir, sizeof(base_dir), "%s%c%d", PIO_BASE_FILE,
                 dht11_port, dht11_pin_in_bank);
        if (stat(base_dir, &sb) >= 0) {
        } else {
            fprintf(stderr, "Unable to find sysfs directory %s (for "
                    "direction)\n", base_dir);
            return -1;
        }
    }
    snprintf(b, sizeof(b), "%s/direction", base_dir);
    direction_dht11 = open(b, O_RDWR);
    if (direction_dht11 < 0) {
        fprintf(stderr, "Open %s: %s\n", b, strerror(errno));
        return -1;
    }
    snprintf(b, sizeof(b), "%s/value", base_dir);
    val_dht11 = open(b, O_RDWR);
    if (val_dht11 < 0) {
        fprintf(stderr, "Open %s: %s\n", b, strerror(errno));
        return -1;
    }
    return 0;
}

static void cleanup_atmel_pins(void)
{
    char b[256];

    if (val_dht11 >= 0)
        close(val_dht11);
    if (direction_dht11 >= 0)
        close(direction_dht11);
    if (unexp_dht11 >= 0) {
        if (dht11_pin >= 0) {
            snprintf(b, sizeof(b), "%d", dht11_pin);
            if (pwrite(unexp_dht11, b, strlen(b), 0) < 0)
                fprintf(stderr, "Unable to unexport dht11: %s\n",
                        strerror(errno));
        }
        close(unexp_dht11);
    }
    if (exp_dht11 >= 0)
        close(exp_dht11);
}



static void dht11_depower(void)
{
    dht11_dir_in();
}

static unsigned char dht11_read_byte(void)
{
    char c[2];
    unsigned char res = 0;
    int mask, k, i;
    i=0;
    for (k = 0, mask=0x80; k<8; ++k, mask >>=1) {
        /* aspetto si alzi */
	do  pread(val_dht11, c, 1, 0);
	while (('0' == c[0]));
        dht11_delay_us(25,1);
        pread(val_dht11, c, 1, 0);
        printf("%c",c[0]);
        if (c[0] == '1' ) res |= mask;
	do {
	    pread(val_dht11, c, 1, 0);
	    ++i;
	}
	while (('1' == c[0])&& (i<200)); /* se non metto un limite ai cicli
					    posso entrare in loop infinito
					    nel caso di perdita di bit */
    }
    return res;
}

static void dht11_read(void)
{
    char umidity[5];
    int i,r;
    dht11_dir_out();
    dht11_data(0);
    dht11_delay_us(18000,0);
    dht11_dir_in();

/*
*    questa fase anche se prevista dal protocollo se abilitata
*    crea probelmi.
*    forse l'istruzione precedente dura troppo a lungo e 
*    le seguenti sforano, facendo perdere i primi bit dei dati
*    utili
*/    
/*
    dht11_delay_us(40,1);
    r=dht11_getbit();
    if ( 0 != r)
    {
        printf("ko, dht NON ha risposto\n");
	cleanup_atmel_pins();
	exit(-1);

    }
    dht11_delay_us(80,1);
    r=dht11_getbit();
    if ( 1 != r)
    {
        printf("ko, dht NON ha rialzato segnale\n");
        cleanup_atmel_pins();
        exit(-1);

    }

*/

//  compenso aspettando qualche istante
//    dht11_delay_us(60,0);
    while (dht11_getbit()) {}
    while (!dht11_getbit()) {}


    /* aspetto si abbassi prima di iniziare il ciclo di lettura */
    while (dht11_getbit()) {}
    /* inizio ciclo lettura */
    for (i = 0; i < 5; ++i) {
        umidity[i]=dht11_read_byte();
    }
    for (i = 0; i < 5; ++i)   printf(" %d ",umidity[i]);
    if ( umidity[0]+umidity[1]+umidity[2]+umidity[3]-umidity[4]) printf(" NO\n"); else printf(" OK\n");

}


static void dht11_read_raw(void)
{
    char umidity[5];
    char c[2];
    int t;
    memset(c, 0,  sizeof(c));
    char letture[1001];
    int i,r,res,b,n,byte,bit,mask;
    //dht11_dir_out();
   // dht11_data(0);    
  //  dht11_delay_us(18000,0);
    dht11_dir_in();
  //  t=rand(); // a volte si piglia un "1" del pullup.ritardiamo giusto un attimo
    for (i=0;i<1000;i++)
	{
            res = pread(val_dht11, c, 1, 0);
            printf("leggo dalla caldaia %d: \n",res);
            letture[i]=('0' != c[0]);
            
	}
	
//    for (i=0;i<1000;i++)	printf("%d",letture[i]); printf("\n");
	
  //  i=0;
  //  b=0;
  //  while (!letture[i]) i++;
   // while ( letture[i]) i++;
  //  for (byte=0 ; byte<5 ; ++byte)
//	{
//	 printf("\nleggo byte %d: ",byte);
	// umidity[byte]=0;
	// for (bit=0, mask=0x80; bit<8; ++bit, mask >>=1)
	//    {
	//	while (!letture[i]) i++;
	//	r=0;
	//	while (letture[i]) { i++; r++; }
		//if ( r>5 ) { umidity[byte] |= mask; printf("1");} else printf("0");
	//	if (r>5){umidity[byte] |= mask;}
/*		printf("%d\n",mask);*/
	  //  }
	//}
//    printf("\ni= %d\n",i);
   // for (i = 0; i < 5; ++i)   printf(" %d ",umidity[i]);
  //  if ( umidity[0]+umidity[1]+umidity[2]+umidity[3]-umidity[4]) printf(" NO\n"); else printf(" OK\n");
}



int main(int argc, char ** argv)
{
    int ch, opt, k, j;
    int ret = 1;
    struct stat sb;


    if (stat(GPIO_BANK_ORIGIN, &sb) >= 0) 
        origin0 = 1;
    if (dht11_pin < 0)
        dht11_pin = ((dht11_port - 'A' + (! origin0)) * 32) + dht11_pin_in_bank;
    else {
        dht11_port = (dht11_pin / 32) + (! origin0) + 'A';
        dht11_pin_in_bank = (dht11_pin % 32);
//        printf("Note: gpio P%c%d is being used for dht11\n", dht11_port, dht11_pin_in_bank);
    }
    if (init_atmel_pin() < 0) goto the_end;

/**/
    for (k=0; k<2 ; k++) {
        //printf("RAW:  "); 
        dht11_read_raw();
        sleep(2);
        }
        
        
//    for (k=0; k<10 ; k++) {
//        printf("prot: ");
//        dht11_read();
 //       sleep(2);
 //   }

/**/
the_end:

    cleanup_atmel_pins();
    return ret;
}

