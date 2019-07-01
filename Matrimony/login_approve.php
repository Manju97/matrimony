<?php
session_start();
$uname=$_POST['uname'];
$password=$_POST['password'];


include 'dbconfig.php';



 $sql = mysql_query("select * from  member where phone='$uname' and password='$password'");
 $sql1 = mysql_query("select * from  admin_login where user_name='$uname' and password='$password'");

if($uname=="" && $password=="")
{
	$_SESSION["uname"] = $uname;
		$_SESSION["password"] = $password;
		?>
		<script type="text/javascript">
			window.location="register_details.php";
		</script>
	<?php
}

else if($row1 =mysql_fetch_row($sql))
{
		$_SESSION["uname"] = $uname;
		$_SESSION["password"] = $password;
		?>
		<script type="text/javascript">
	  window.location="register_details.php";
          
        
		 
         </script>
	<?php
}	
		 
	

else if($row1 =mysql_fetch_row($sql1))
{
	$_SESSION["uname"] = $uname;
		$_SESSION["password"] = $password;
	?>
		<script type="text/javascript">
			window.location="action.php";
		</script>
	<?php
}

else{
	
	?>
	
	<script type="text/javascript">
	  window.location="login.php";
          alert("Please Check Username and Password!!");
        
		 
         </script>
<?php 
}
$_SESSION['status']="Active"
?>