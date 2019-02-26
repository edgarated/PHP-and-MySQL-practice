<?php 

// to retain input values
$email = $title = $ingredients = "";

//check for errors
$errors = array("email" => "", "title" => "", "ingredients" => "");


if(isset($_POST["submit"])){

//check email

        if(empty($_POST["email"])){
        $errors["email"]= "This is not your email <br/>";
      } else{
        $email = $_POST["email"];

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $errors["email"]= "Kindly put a valid email address <br/>";
      }

  }

  //check title

        if(empty($_POST["title"])){
          $errors["title"]= "Kindly add a title <br/>";
      }     else{
          $title = $_POST["title"];
        if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
          $errors["title"]= "Title must be letters and spaces only <br/>";
        }
        }

  //check ingredients

        if (empty($_POST["ingredients"])){
          $errors["ingredients"]= "add at least one ingredient <br/>";
        } else{
      $ingredients = $_POST["ingredients"];
      if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)){
        $errors["ingredients"]="Must be a comma separated list <br/>";
 
    }

      }

  if(array_filter($errors)){

  }else{

    header("Location:index.php");
  }


}




?>

<!DOCTYPE html>
<html lang="en">
<?php include ("header.php")?>;
<section class="container grey-text">
<h4 class="center">Add Okpa</h4>
<form class="white" action="add.php" method="POST"> 
<label>Your Email :</label>
<input type="text" name="email" value = "<?php echo htmlspecialchars($email) ?>">
<div class="red-text"><?php echo $errors["email"]?></div>

<label>Pizza Title :</label>
<input type="text" name="title"  value = "<?php echo htmlspecialchars($title) ?>">
<div class="red-text"><?php echo $errors["title"]?></div>

<label>Add ingredients(comma separated):</label>
<input type="text" name="ingredients" value = "<?php echo htmlspecialchars($ingredients) ?>">
<div class="red-text"><?php echo $errors["ingredients"]?></div>
<div class="center">
<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
</div>

</form>

</section>
<?php include ("footer.php")?>

</html>