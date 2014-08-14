// ------------------------------------------------------------
// SHT71 definizioni sensore
// ------------------------------------------------------------

#define CLOCK_BIT          89 // Clock line: (J6.18 - PB20 - ID84)
#define DATA_BIT           88 // Data line: (J6.17 - PB21 - ID85)

#define GPIO_OUT           0 
#define GPIO_IN            1 


// Macro per settare la direzione del flusso dei dati
#define DATA_LINE_IN       gpiosetdir(DATA_BIT,GPIO_IN)
#define DATA_LINE_OUT      gpiosetdir(DATA_BIT,GPIO_OUT)

#define DATA_LINE_LOW      gpiosetdir(DATA_BIT,GPIO_OUT);gpioclearbits(DATA_BIT)
#define DATA_LINE_HIGH     gpiosetdir(DATA_BIT,GPIO_IN)
//#define DATA_LINE_READ     gpiogetbits(DATA_BIT)?(1):(0)
#define DATA_LINE_READ     gpiogetbits(DATA_BIT)

#define CLOCK_LINE_LOW     gpioclearbits(CLOCK_BIT)
#define CLOCK_LINE_HIGH    gpiosetbits(CLOCK_BIT)

#define CMD_READ_TEMP      0x03
#define CMD_READ_HUM       0x05


int gpioexport(int gpioid);
int gpiosetdir(int gpioid,int mode);
int gpiogetbits(int gpioid);
int gpiosetbits(int gpioid);
int gpioclearbits(int gpioid);


// Definizione delle Funzioni
void SendStart(void);       // Sequenza di inizio invio dati
void SendReset(void);       // Resetta il sensore
static int SendByte(unsigned char byte);    // Invia un byte al sensore
static unsigned char ReadByte(int withack); // Legge un byte dal sensore
static int ReadTemperature(void);  // Legge la temperatura dal sensore
static int ReadHumidity(void);     // Legge l'umidit� dal sensore


