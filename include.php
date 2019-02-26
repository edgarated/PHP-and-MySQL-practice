<?php 
//The include syntax below helps to spill out what is in include2.php into this current page
include("include2.php");
// require("include2.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<!-- The include syntax below helps to spill out what is in include3.php into this current page -->
  <?php include("include3.php")    ?>
  <?php include("include3.php")    ?>
  <?php include("include3.php")    ?>
  <?php include("include3.php")    ?>
  

</body>
</html>