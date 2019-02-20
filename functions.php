<?php 

//EXAMPLE 1

//Function below has no arguement
function sayHello(){

echo "Good morning miss pepeye <br/>" ;


}
sayHello() ;


//EXAMPLE 2
//function below has an arguement that can be called as an associative array
function products ($sample){

echo "The {$sample["food1"]} and {$sample["food2"]} served here is not cool at all <br/>";

}
products(["food1" => "rice", "food2" => "beans"]);


//EXAMPLE 3
//function below has an arguement that can be called as an associative array
function foodFave($food){

 return "He just loves to eat {$food["fave1"]} and {$food["fave2"]} <br/>";

  }

  $realFood = foodFave(["fave1" => "rice", "fave2"=> "beans"]);
  echo $realFood;

//EXAMPLE 4
//Function below takes two arguement

  function schoolName($school1, $school2){

echo " He actually went to $school2 before joining $school1" ."<br/>";

  }

schoolName("FGCE", "GTC")
?>