<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "auth_db";

$conn = mysqli_connect($host , $user , $password , $database);

if(!$conn)
{
    die ("connection failed");
}
?>