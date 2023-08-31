<?php
  echo "Exception Handling : <br/><br/>"; 
  echo "Simple Try Throw Catch Exception Handling : <br/><br/>";
  function leap($year)
  {
    if($year % 4 != 0)
    {
      throw new Exception("$year is not a Leap Year.!");
    }
    else
    {
      echo "$year is a Leap Year";
    }
  }

  try{
    leap(2001);
  }
  catch (Exception $exception){
    echo "Message : ".$exception -> getMessage();                       //by the inbuild exception dunction
  }
