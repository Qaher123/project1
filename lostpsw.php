<?php

  if(isset($_POST['email'])){

    if(empty($_POST['email'])){
      echo "email is required!";
    }else{
      echo "There is a mail sent to you with the further information you need.";
    }


  }else{
    echo "";
  }

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lost password</title>
</head>
<body>

<p>Lost password</p>

<form class="" action="lostpsw.php" method="post">


  <label for="email">email:</label>
  <input type="email" name="email" value="">

  <button type="submit" name="lost">submit</button>



</form>


</body>
</html>
