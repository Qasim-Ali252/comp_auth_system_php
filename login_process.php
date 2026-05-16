<?php
session_start();
include db.php;

$user=$_POST['user'];
$password=$_POST['password'];

$query = "SELECT * FROM users WHERE username = '$user' OR email = '$user'";

$result =  mysqli_query($conn , $query);

//check user exist 

if (mysqli_num_rows($result)) {
       $row= mysqli_fetch_assoc($result);

       if(password_verify($password , $row['password'])){
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['username'] = $row['username'];

       }

       //remember me
       if(isset($_POST['remember'])){
        setcookie("user" , $user, time() + (86400*7));
       }

       //redirect to dashboard 
       header("Location : dashboard.php");
       exit();

}
else{
    'INVALID CREDENTIALS';
}


?>