<?php
$host="localhost";
$userName="root";
$passWord="";
$DataBase="valmikim_matri";
//$connect=mysql_connect($host,$userName,$passWord);
//mysql_select_db($DataBase);


$con = mysqli_connect('localhost','root','','valmikim_matri');

$mysqli = new mysqli("localhost", "root", "", "valmikim_matri");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

DEFINE('DB_USER','root');
DEFINE('DB_PASSWORD','');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','valmikim_matri');

$dbc=@mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
or die('Could not connect to mysql'.mysqli_connect_error());

?>
