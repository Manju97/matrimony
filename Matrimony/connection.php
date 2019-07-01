<?php
$host="localhost";
$userName="root";
$passWord="";
$DataBase="valmikim_matri";
$connect=mysql_connect($host,$userName,$passWord);
mysql_select_db($DataBase);


//ENTER THE RELEVANT INFO BELOW
    $mysqlUserName      = "root";
    $mysqlPassword      = "";
    $mysqlHostName      = "localhost";
    $DbName             = "valmikim_matri";
    $backup_name        = "mybackup.sql";
    $tables             = "";
	
	

	$mysql_host = 'localhost';
// MySQL username
$mysql_username = 'valmikim_matri';
// MySQL password
$mysql_password = '';
	
$servername = "localhost";
$username = "root";
$password = "";
$db = "valmikim_matri";

//create connection for ajax

$connect = mysqli_connect('localhost','root','','valmikim_matri');
if (!$connect) {
    die('Could not connect: ' . mysqli_error($connect));
}
$con=mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connecting to MySQL server: ' . mysql_error());

//end

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$conn1 = mysqli_connect($servername, $username, $password, $db);

$con1 = mysql_connect("localhost","root","");

if (!$con1) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("valmikim_matri", $con1);

try{
		$DB_con = new PDO("mysql:host={$host};dbname={$DataBase}",$userName,$passWord);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>
