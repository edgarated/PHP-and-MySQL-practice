<?php 

//LOCAL VARIABLE

function myFunc(){
echo "Hello <br/>";

}
myFunc(); //Hello


//GLOBAL VARIABLE

$name = "chizoba";

function fullName(){
global $name;
$name = "Kunle";
echo " how are you doing $name";

}
fullName();



function say ($name){
$name = "finidi";
echo "$name";

}
echo $name ."<br>";
say($name);







?>