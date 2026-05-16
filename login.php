<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form </title>
</head>
<body>
     <form action="login_process.php" method = "POST" value="<?php 
         if(isset($_COOKIE['user'])){
            echo $_COOKIE['user'];
         }
     ?>">
        <input type="text"  name="user" placeholder="Username or Email">
        <br><br>
        <input type="password" name="password" placeholder="password">

        <input type="checkbox" name="remember">
        Remember Me

        <br><br>

        <button type="submit">Login</button>
     </form>
</body>
</html>