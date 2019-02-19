<?php 
$price = 1000;

if($price < 20 ) {
  echo "Buy the food ";
} else if ($price ==50){
  echo "condition fully met, buy the food";
} else{
 
  // echo "Come back home ASAP";

}


$products = [

["name" => "fish", "price"=> 32],

["name" => "banana", "price"=> 24],

["name" => "garri", "price"=> 13],

["name" => "Abacha", "price"=> 10],

["name" => "fio-fio", "price"=> 40],

];

foreach($products as $product){

  if($product["price"] > 30 || $product["price"]> 20){

    // echo $product["name"] . "<br>";
  }

}

?>
<!-- 
USING IF ELSE STATEMENT TO MANIPULATE THE DOM -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<div>
<ul>
<?php 
foreach($products as $product){?>
<?php if ($product > 20) {?>
<li><?php echo $product ["name"]  ?></li>

<?php }?>

<?php }?>
</ul>
</div>
</body>
</html>