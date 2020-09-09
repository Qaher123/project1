<?php



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>

  <form class="" action="index.php" method="post">

      <label for="user_name">Username:</label>
      <br>
      <input type="text" name="user_name" placeholder="Username" maxlength="20" required>
      <br><br>

      <label for="password">Password:</label>
      <br>
      <input type="password" name="password" placeholder="password" maxlength="20" required>
      <br><br>

      <button type="submit" name="login">Login</button>

  </form>

  <a href="lostpsw.php">forgot Password?</a>
  <a href="signup.php">Register here</a>



</body>
</html>
