<?php   
session_start(); 
session_destroy(); //destroy the session
header("location:/group1/login.php"); //to redirect back to "index.php" after logging out
exit();
?>