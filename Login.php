<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Login</title>
</head>
<body>
    <h2>Login Form</h2>
<div class="cry">
    <form action="sesje.php" method="post">
    
      <b>Log in to website!</b>
      <form action="" method="POST">
         <br>Login: <input type="text" name="ulogin">
         <br>Password: <input type="password" name="uhaslo">
         <br><input type="submit" class="button button4" value="Zaloguj">
         </form>
    <div class="comeback"><a href="index.php"><button class="button button4">Go Back To Home Page</button></a></div>
    </div>
</body>
</html>