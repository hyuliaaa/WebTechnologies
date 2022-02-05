<?php 

    echo "<h1>Hello bb</h1>";

    //variables - container in php
    $name = "Amemily";
    $age = 17;
    echo "There was one a women called $name. <br>";
    echo "She is $age years old. <br>";
    $name = "Molly ";   
    echo "Hey $name <br>";

    //data types: string - plain text
    $phrase  = "Google"; // knows this is going to be a string
    //two types of numbers : whole and decimal;
    $age = 30; //integer
    $gpa = 30.0; // float number 

    //boolean variable (true, false)
    $isMale = true;

    //null - "no value" 

    echo "4.5 <br>";

    //working with strings
    $phrase = "Giraffe Academy <br>" ;
    echo $phrase;


    //string function
    echo strtolower($phrase);
    echo  ($phrase) ;
  //      echo $phrase[0]; //index position in the string 
    echo str_replace("Giraffe", "Panda",$phrase);


    //working with numbers
    echo 2+3; // prints 5 , operations -> (-,/,*, %)
    echo "2+3"; //prints 2+3 

    $num = 10;
    $num++;
    echo $num; //11 


    //get user input: we need an HTML forms, a way that php can get info about the user
    
  //arrays - we can put any type of info
  $friends = array("Kevin","Karen");
  echo $friends[0];
    
  //functions 
  function printHi(){
    echo "Helloo!<br>";
  }

  //returning value 
  function cube ($num){
    return $num*$num*$num;
  }

  //calling function
  printHi();

  $cubeResult = cube(5);
  echo $cubeResult;


?> 
