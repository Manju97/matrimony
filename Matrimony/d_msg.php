<?php

include "db.php";
$id=$_GET['id'];
               
				
$sql=mysqli_query($dbc,"DELETE from `message` where id='$id'");
				
			


header("location:message.php");
?>