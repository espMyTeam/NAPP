/*
 * Author : Bassirou ngom (bassiroungom26@gmail.com)
 * date : 17/05/2017
 * description : NAPP => projet auto nettoyage des panneaux solaires
 */

#include <ESP8266WiFi.h>

const char* ssid     = "Orange_81139C"; // ssid du reseau wifi
const char* password = "83846847";     // le mot de passe du wifi

const char* host = "192.168.1.101"; //adresse ip du serveur web

const char* ressource_enregistrement = "/napp/utils.php?tension=";

const char* ressource_lecture = "/napp/utils.php";

boolean etat = false;

String ordre ="";

const int SEUIL_TENSION = 10;

long timeSendingRequest=millis(), timeSendingValue = millis(); 


int heure=19; //heure de televersement
unsigned long times=0;
unsigned long delai_envoi = 0;
unsigned long MAX_ULONG = 4294967295L;
unsigned long temp;
const int HEURE_DEBUT = 10;
const int HEURE_FIN =  17;

void setup() {
  Serial.begin(115200);
  delay(10);

  
  Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
  
  WiFi.begin(ssid, password);
  
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi connected");  
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}


void loop() {
  getheure();

  if(heure >= HEURE_DEBUT || heure < HEURE_FIN){  // nettoyage que pendant la journee
    
    if( millis() - timeSendingValue > 5000){ // toutes les 5s envoie la valeur de la tension
      sendRequete();
      timeSendingValue=millis();
    }

   if( millis() - timeSendingRequest > 1000){ //toutes les secondes verifier s'il doit nettoyer ou pas
      readRequete();
      timeSendingRequest = millis();
   }
  
   if(getTensionPanneau() < SEUIL_TENSION){ //nettoyage automatique en fonction de la valeur de la tension lue
     nettoyage();
   }
  }

 
  //delay(5000);
}


void sendRequete(){
   WiFiClient client;
  const int httpPort = 80;//888;  //le port 80 par defaut
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
   // return;
  }
  else{
    float tension = getTension();
    client.print("GET ");
    client.print(ressource_enregistrement);
    client.print(String(tension, 2));
    client.print(" HTTP/1.1\r\n");
    client.print("Host: ");
    client.print(host);
    client.print("\r\n");
    client.print("Connection: close\r\n\r\n");
    client.println();
    while(client.available()){
      String line = client.readStringUntil('\r');
        Serial.print(line);
     }
    client.stop();
    Serial.println();
    Serial.println("closing connection");
  }
}

void readRequete(){
   WiFiClient client;
  const int httpPort = 80;//888;  //le port 80 par defaut
  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
   // return;
  }
  else{
    client.print("GET ");
    client.print(ressource_enregistrement);
    client.print(" HTTP/1.1\r\n");
    client.print("Host: ");
    client.print(host);
    client.print("\r\n");
    client.print("Connection: close\r\n\r\n");
    client.println();
   int nbligne=0;
    while(client.available()){
      String line = client.readStringUntil('\r');
      if(nbligne==8)
       ordre = line;
      nbligne++;
    }
    client.stop();
    Serial.println();
    Serial.println("closing connection");
    if(ordre != ""){
      if( ordre == "1")
        nettoyage();
    }
  }
}


float getTensionPanneau(){
  return 0.0;
}


void nettoyage(){
  //put here you code
}


void getHeure() //cette fonction permet de calculer l'heure dans la carte arduino en se basant sur millis
{
  temp = millis();
  if(temp < times){
    if((MAX_ULONG-times+temp) >= 3600000){
      times = temp;
     if(heure == 23 ) 
        heure = 0;
      else 
        heure +=1;
    }
  }
  else{
    
    if(temp-times >= 3600000 )
    {
      times = temp; //+(temp-times-3600000)
      
      //heure = heure == 23 ? heure+1 : 0    
      if(heure == 23 ) 
        heure = 0;
      else 
        heure +=1; 
    }
  }
  //return heure;
}



