<?php
include "db.php";

echo $id=$_GET['id'];

$sql=mysqli_query($dbc,"DELETE from `member` where id='$id'");

echo "DELETE from `member` where id='$id'";
header("location:more_photos.php");

?>
