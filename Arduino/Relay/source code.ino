//I got help from this source https://www.youtube.com/watch?v=RRbg_ipttWQ

#include<avr/io.h>

int main(){
  
  DDRD|=(1<<PD4);
  while(1){
    PORTD|=(1<<PD4);
  }
}