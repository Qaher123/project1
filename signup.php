<?php

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repeat_password'])) {

  if (empty($_POST['firstname'])){
    echo "Firstname is required!";
  }

  elseif (empty($_POST['lastname'])) {
    echo "Lastname is required!";
  }

  elseif (empty($_POST['email'])) {
    echo "Email is required!";
  }

  elseif (empty($_POST['username'])) {
    echo "Username is required!";
  }

  elseif (empty($_POST['password'])) {
    echo "Password is required!";
  }

  elseif(empty($_POST['repeat_password'])){
    echo "Repeat password is required!";
  }

  elseif ($_POST['password'] != $_POST['repeat_password']) {
    echo "Passwords do not match!";
  }

  else{
    echo "You can now log in have fun.";
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
  <input type="text" name="firstname" value=""><br>

  <label for="tussenvoegsels">insertion:</label><br>
  <input type="text" name="tussenvoegsels" value=""><br>

  <label for="lastname">Last name:</label><br>
  <input type="text" name="lastname" value=""><br>

  <label for="email">email:</label><br>
  <input type="email" name="email" value=""><br>

  <label for="username">Username:</label><br>
  <input type="text" name="username" value=""><br>

  <label for="password">Password:</label><br>
  <input type="password" name="password" value=""><br>

  <label for="repeat_password">Repeat Password:</label><br>
  <input type="password" name="repeat_password" value=""><br><br>

  <button type="submit" name="Register">Register</button>

</form>

</body>
</html>
