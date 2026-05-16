<?php

//get form data 
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

//validate empty empty fields 
if(empty($fullname) || empty($email) || empty($username)) || empty($password) || empty($confirm_password){
    die("all fields are required");
}


// check password match 
if($password != $confirm_password){
    die ("password do not match ");
}
 // check duplicate user 

 $checkquery = "SELECT * FROM users WHERE email ='$email' OR username = '$username';

 $result = mysqli_query($conn,$checkquery);

 if(mysqli_num_rows($result) > 0 ){
     die("username or email already exist...");
 }
  
 //hash password 
$hashedpassword = password_hash($password , PASSWORD_DEFAULT);

//INSERT USER 
$query = "INSERT INTO users (fullname , email, username, password)VALUES ('$fullname', '$email', '$username' , $hashedpassword)";

mysli_query($conn , $query);


//redirect to login page 

header("Location: login.php");
exit();

?>