<?php

include "db.php";


$id=$_GET['id'];

$lastId="VM";
function randomPassword() {
$alphabet = '1234567890';
$pass=array();
$alphaLength=strlen($alphabet)-1;
for($i=0;$i<8;$i++) {
$n = rand(0,$alphaLength);
$pass[$i] = $alphabet[$n];
}
return implode($pass);
}
$id=randomPassword();

$un_no=$lastId.$id;
 
 
 $sql = mysqli_query($dbc, "insert into member set un_no = '$un_no' where id ='$id'");
         
		  echo $un_no;
   
//header("location:login.php");   
 ?>


 
 

