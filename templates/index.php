<?php 

$conn = mysqli_connect("localhost", "bumble", "12345", "okpa_ngwo");

if(!$conn){
  echo "connection failed " . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html lang="en">
<?php

include ("header.php");
include ("footer.php");
?>
</html>