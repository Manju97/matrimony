<?php 
session_start();
    session_destroy();
    $_SESSION = array();
    header("location:./login.php");  
/*session_unset();//to ensure you are using same session
session_destroy(); //destroy the session
header("location:http://localhost/matrimony/login.php"); //to redirect back to "login.php" after logging out
exit();*/
?>