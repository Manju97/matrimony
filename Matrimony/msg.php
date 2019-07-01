<?php

include "db.php";

$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['sub'];
$msg=$_POST['msg'];

                echo 'File uploaded successfully';
				
$sql=mysqli_query($dbc,"INSERT INTO `message`( `name`, `email`, `sub`, `msg`) VALUES ('$name', '$email', '$sub', '$msg')");
				
			


header("location:index.html");
?>