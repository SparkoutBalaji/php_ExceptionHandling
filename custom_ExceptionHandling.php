<?php

class CustomException extends Exception             //inherit the inbuild Exception class by extends 
{
  public function custom()
  {
    global $year;                                   //without global scope didn't call the value 2001
    return "Message : $year is a Leap Year.!";
  }
}
try{
  $year = 2001;
  if($year % 4 == 0)
  {
    throw new CustomException();                    //throw to the class
  }
  else
  {
    echo "Message : $year is Not a Leap Year";      //modulus not a 0, it's return 2001 is Not a Leap Year
  }
}
catch(CustomException $ce)                          //class object 
{
  echo $ce -> custom();
}