<?php


//String concantenation using the dot notation
$stringOne = "My email is";
$stringTwo = "hello@gmail.com";
echo $stringOne ." " .$stringTwo;
//PRINTS My email is hello@gmail.com

$name = "mario";
echo 'Hello, my name is  '. $name;
// PRINTS Hello my name is mario

$name = "Ken";
echo "Hello my name is $name";
//PRINTS Hello my name is ken  //double quote prints out the value of the variable  (variable interpolation)

$name = "Ken";
echo 'Hello my name is $name';
// PRINTS Hello my name is $name  //error due to single quote


//ESCAPING CHARACTERS

echo "Hello dear she said \"HOW ARE YOU\"";
//PRINTS Hello dear she said "HOW ARE YOU"

echo 'hello, she said"how are you"';
// PRINTS hello, she said"how are you" //prints it out without escape value

//Getting a character out of a string
//counting is zero based

$name = "chiamaka";
echo $name[5]."<br>";
//Prints: a

//STRING FUNCTIONS

$location = "Lagos";
echo strlen($location); //prints 5
echo strtoupper($location);//PRINTS LAGOS
echo strtolower($location); //PRINTS lagos
echo str_replace('L','M',$location ); // replaces L in Lagos with M  PRINTS : Magos







?>