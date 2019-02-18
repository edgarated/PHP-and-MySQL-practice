<?php 

//  PHP ARRAYS 
// we have 
//  1 : indexed
//  2 : associative 
// 3 : multi dimensional arrays 


// INDEXED ARRAY

$peopleOne = ["John", "Doe", "Jane", "Doe"];
// echo $peopleOne[2];

//PRINTS jane


$scores = [5,6,7,8,9,0,4,3];
// echo $scores[4] ."<br>";


//PRINTS 9

//New method of writing an Array in PHP

$peopleTwo = array("Chung-li", "Tiger lee", "Seun woo");
// echo $peopleTwo[2];

//to view an array in the browser

$scores = [5,6,7,8,9,0,4,3];
// print_r($scores) ;
//PRINTS Array ( [0] => 5 [1] => 6 [2] => 7 [3] => 8 [4] => 9 [5] => 0 [6] => 4 [7] => 3 )

 
$numbers = array(1,2,3,4,5,6,7,8,);
// print_r($numbers);
//Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 )

//to overide a value in an array
$numbers[1] = 25;
// print_r($numbers); 
// prints Array ( [0] => 1 [1] => 25 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 )

//to add a value to the end of an array
$newScores = [1,2,3,4,5];
$newScores[] = 23;
// print_r($newScores);
// PRINTS Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 23 )

$newScores = [1,2,3,4,5];
array_push($newScores,244);
// print_r ($newScores);
//PRINTS Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 244 )

//TO KNOW THE LENGTH OF AN ARRAY 
$newScores = [1,2,3,4,5];
// echo count($newScores );
//5

//  TO MERGE ARRAYS

$peopleThree = array_merge($peopleOne,$peopleTwo);
// print_r($peopleThree);
//Array ( [0] => John [1] => Doe [2] => Jane [3] => Doe [4] => Chung-li [5] => Tiger lee [6] => Seun woo )


//ASSOCIATE ARRAYS (KEYS AND VALUE PAIRS)
$profile2 = ["name" => "jphn", "age"=> 61,"occupation"=> "resting"];
$profile = ["name" => "Ebuka", "age"=> 6,"occupation"=> "coding"];

// echo $profile["name"] ."<br>"; //Ebuka
// echo $profile["age"]."<br>"; //6
// echo $profile["occupation"]."<br>"; //coding

//prints the whole array
print_r($profile);

//to replaces a value of an array
$profile ["name"] = "chiamaka";
print_r($profile); 
//Array ( [name] => chiamaka [age] => 6 [occupation] => coding )

//to count the array
// echo count($profile); //3

$profile3 = array_merge($profile,$profile2);
print_r($profile3);
echo count($profile3);


//MULTI DIMENTIONAL ARRAYS
//$name array has other arrays inside
$name =[
  ["name" => "peter", "age"=> 1,"occupation"=> "chesting"],
  ["name" => "philip", "age"=> 6,"occupation"=> "madonna"],
  ["name" => "mercy", "age"=> 11,"occupation"=> "coding"],
  ["name" => "jacob", "age"=> 14,"occupation"=> "racing"],
];

//$location array has other arrays inside
$location = [
["chiamaka" => "Yaba", "fola"=> "ketu", "adeoye" => "ojota"],
["keti" => "Yaba", "fela"=> "ketu", "musa" => "ojota"],
["lara" => "anthony", "dera"=> "ngwo", "olayinka" => "ojota"],
["amaka" => "Yaba", "dave"=> "ketu", "ajayi" => "ojota"],

];


$location[] =["amaka" => "Yaba", "dave"=> "ketu", "tunde" => "ojota"];
echo count($location);
// print_r($location[2]["dera"]);

print_r($name[3]["name"]); //prints the name
echo count($name); // prints the number of values in the array
$name[]= ["amaka" => "Yaba", "dave"=> "ketu", "tunde" => "ojota"]; //adds an array into the array
// print_r($name);


//TO REMOVE AN ARRAY
$removeArray = array_pop($location);
print_r($removeArray);

?>