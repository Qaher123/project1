<?php

if( isset($_POST['password']) && isset($_POST['repeat_password'])) {



  if ($_POST['password'] != $_POST['repeat_password']) {
    echo "Passwords do not match!";
  }



}

else{
  echo "";
}


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>

<form class="" action="signup.php" method="post">

  <label for="firstname">First name:</label><br>
  <input type="text" name="firstname" value="" required><br>

  <label for="tussenvoegsels">insertion:</label><br>
  <input type="text" name="tussenvoegsels" value=""><br>

  <label for="lastname">Last name:</label><br>
  <input type="text" name="lastname" value="" required><br>

  <label for="email">email:</label><br>
  <input type="email" name="email" value="" required><br>

  <label for="username">Username:</label><br>
  <input type="text" name="username" value="" required><br>

  <label for="password">Password:</label><br>
  <input type="password" name="password" value="" required><br>

  <label for="repeat_password">Repeat Password:</label><br>
  <input type="password" name="repeat_password" value="" required><br><br>

  <button type="submit" name="Register">Register</button>

  <a href="index.php">Ik heb al een account signup</a>

</form>

</body>
</html>
