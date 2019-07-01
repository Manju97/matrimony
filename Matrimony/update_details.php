<?php

include "db.php";

 $id = $_POST['id'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$education = $_POST['education'];
$job = $_POST['job'];
$religion = $_POST['religion'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$fathername = $_POST['father_name'];
$mothername = $_POST['mother_name'];
$b_time = $_POST['b_time'];
$nakshatra = $_POST['nakshatra'];
$rashi = $_POST['rashi'];
$siblings = $_POST['siblings'];
$height = $_POST['height'];
$god = $_POST['god'];
$address = $_POST['address'];
$expectations = $_POST['expectations'];
$region = $_POST["region"];
$color = $_POST["color"];


 $sql = mysqli_query($dbc, "UPDATE `member` SET `dob`='$dob',`age`='$age',`education`='$education',`job`='$job',`religion`='$religion',`gender`='$gender',`phone`='$phone',`father_name`='$fathername',`mother_name`='$mothername',`b_time`='$b_time',`nakshatra`='$nakshatra',`rashi`='$rashi',`siblings`='$siblings',`height`='$height',`god`='$god',`address`='$address',`expectations`='$expectations',`region`='$region',`color`='$color' WHERE id='$id'"); 

/*  echo "UPDATE `member` SET `dob`='$dob',`age`='$age',`education`='$education', `job`='$job',`religion`='$religion',`gender`='$gender',`phone`='$phone',`father_name`='$fathername',`mother_name`='$mothername',`b_time`='$b_time',`nakshatra`='$nakshatra',`rashi`='$rashi',`siblings`='$siblings',`height`='$height',`god`='$god',`address`='$address',`expectations`='$expectations',`region`='$region',`color`='$color' WHERE id='$id'";  */

header("location:view_details.php");


?>