<?php

include 'db.php';
$id=$_GET['id'];


$sql=mysqli_query($dbc,"DELETE from `member` where id='$id'");


 header("location:action.php");


?>