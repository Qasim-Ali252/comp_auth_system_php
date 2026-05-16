<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location : login.php");
    exit();
}
 
<h2>WELCOME <?php echo $_SESSION['fullname'];?> </h2>

<a href="logout.php">Logout</a>

?>