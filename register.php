<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
     <h2>user registeration</h2>

     <form action="registeration_process.php" method="POST">
        <input type="text"  name ="fullname" placeholder = "Full name">

        <br>
        <br>
        <input type="email" name ="email" placeholder = "Email">
        <br><br>

        <input type="text" name="username" placeholder = "User name">

        <input type="password" name= "password" placeholder = "Password">
        <br><br>
        <input type="password" name= "confirm_password" placeholder = "Confirm password">

        <br><br>
        <input type="submit" value="Register">
     </form>
</body>
</html>