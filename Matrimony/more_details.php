<?php
include "db.php";
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$siblings = $_POST['siblings'];
$height = $_POST['height'];
$b_time = $_POST['b_time'];
$color = $_POST['color'];
$job = $_POST['job'];
$rashi = $_POST['rashi'];
$nakshatra = $_POST['nakshatra'];
$god = $_POST['god'];
$region = $_POST['region'];
$address = $_POST['address'];
$expectations = $_POST['expectations'];
$inc_id = $_POST['inc_id'];


$sql=mysqli_query($dbc,"update member set father_name='$father_name', mother_name='$mother_name', siblings='$siblings', height='$height', b_time='$b_time', color='$color', job='$job', rashi='$rashi', nakshatra='$nakshatra',god='$god', region='$region',address='$address', expectations='$expectations' where id='$inc_id'");

header("location:view_details.php");
?>