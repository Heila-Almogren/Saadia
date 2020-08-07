#include <Stepper.h>

const int stepsPerRevolution = 100;  

Stepper StepperMotor(stepsPerRevolution, 8, 9, 10, 11); 

void setup() {
  
}

void loop() {
  int sensorReading = analogRead(A0);
  int motorSpeed = map(sensorReading, 0, 1023, 0, 250);
  
  if (motorSpeed > 0){
  		StepperMotor.setSpeed(motorSpeed);
    	StepperMotor.step(stepsPerRevolution / 100);
  }
}