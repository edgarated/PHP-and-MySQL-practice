<?php 
$ninjas = ["Ebuka", "Chiamaka", "Ifechukwu", "okowa"];
echo $ninjas[3] ."<br/>";

function sayName($fullName){

echo " Her full name is {$fullName['firstName']} {$fullName['lastName']} <br/>";
};
sayName(["firstName"=> "Chiamaka", "lastName" => "Osuji"]);


echo "THIS IS THE END";
?>