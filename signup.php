<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Login</title>
    <style>
</style>
</head>
<body>
    <h2>Formularz rejestracji</h2>
<div class="cry">
    <form action="nowy.php" method="post">
        <br>Login: <input type="text" name="ulogin">
        <br>Hasło: <input type="password" name="uhaslo">
        <br>Potwierdź hasło: <input type="password" name="uhaslop">
        <br><input type="submit" class="button button4" value="Zaloguj">    
    </form>
    <div class="comeback"><a href="index.php"><button class="button button4">Wróć do strony głównej</button></a></div>
    </div>
</body>
</html>