<?php  
//Loops helps us execute a certain block of code as many times as we want without having to write it out that many times.
//FOR LOOPS

//EXAMPLE1
$blogs = [1,2,3,4,5,6,];

for($i = 0; $i < count($blogs) ; $i++){

  // echo $i . " some". " ". "<br/>";
}

//EXAMPLE2
$ninjas = ["chiamaka", "sikiru", "ebuka", "dave", "olamide", "woo shaun pee"];

for($i = 0; $i < count($ninjas); $i++){

// echo  $i  ." : ". $ninjas[$i] . "<br/>";

}


//FOR EACH

// EXAMPLE1
// $yipees = [1,2,3,4];

// foreach($yipees as $yipee){
// echo "Hello" ."<br/>";

// }

//EXAMPLE2
$ninjas = ["chiamaka", "sikiru", "ebuka", "dave", "olamide", "woo shaun pee"];
foreach ($ninjas as $ninja){
// echo $ninja ."<br/>";
}

//EXAMPLE3
$profiles = [

["name" => "Ebuka", "location" =>"lagos", "nija" => "javascript"],
["name" => "Tunde", "location" =>"lagos", "nija" => "javascript"],
["name" => "Ajayi", "location" =>"lagos", "nija" => "javascript"],
["name" => "Titi", "location" =>"lagos", "nija" => "javascript"],
["name" => "okonfolami", "location" =>"lagos", "nija" => "javascript"],

];

// foreach($profiles as $profile){

// echo $profile["name"] . " - " .$profile["location"];
// echo " <br/>";

// }

//WHILE LOOPS
//EXAMPLE1
$i = 0;
while($i < 10){

  // echo $i. "<br/>";

  $i++;
}
?>
<!-- 
LOOPING THROUGH CODE IN HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
<h1>profile</h1>
<ul>
<!-- loops through the $profile array and split out the name and location values; -->
<?php
foreach($profiles as $profile){?>

<h1><?php echo $profile ["name"]?></h1>
<p><?php echo $profile ["location"]?></p>

<?php } ?>
</ul>

<!-- outputs -->
<!-- profile
Ebuka
lagos

Tunde
lagos

Ajayi
lagos

Titi
lagos

okonfolami
lagos -->

</body>
</html>