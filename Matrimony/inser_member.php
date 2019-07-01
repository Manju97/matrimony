<?php

include "db.php";

$fname=$_POST['f_name'];
$lname=$_POST['l_name'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$religion=$_POST['religion'];
$gender=$_POST['gender'];
$region=$_POST['region'];
$education=$_POST['education'];
$job=$_POST['job'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$address=$_POST['address'];


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
 

$file = rand(1000,100000)."-".$_FILES['file']['name'];
				$file_loc = $_FILES['file']['tmp_name'];
				$file_size = $_FILES['file']['size'];
				$file_type = $_FILES['file']['type'];
				$folder="uploads/";
				
				// new file size in KB
				$new_size = $file_size/1024;  
				// new file size in KB
				
				// make file name in lower case
				$new_file_name = strtolower($file);
				// make file name in lower case
				
				$final_file=str_replace(' ','-',$new_file_name);
				
				if(move_uploaded_file($file_loc,$folder.$final_file))
				{
					
                //echo 'File uploaded successfully';
$sql=mysqli_query($dbc,"INSERT INTO `member`( `fname`, `lname`,  `dob`, `age`,`religion`, `gender`,  `region`,`education`,`job`, `phone`,`email`, `password`, `address`, `final_file`, `file_type`, `new_size`,`created`,`un_no`) VALUES ('$fname', '$lname', '$dob', '$age', '$religion','$gender', '$region','$education','$job','$phone', '$email', '$password','$address', '$final_file','$file_type','$new_size','Users','$un_no')");
				
			
		
			

            }
               
			 
      
	else {
        $sql=mysqli_query($dbc,"INSERT INTO `member`( `fname`, `lname`,  `dob`, `age`,`religion`, `gender`,  `region`,`education`, `job`, `phone`,`email`, `password`, `address`,`created`,`un_no`) VALUES ('$fname', '$lname', '$dob', '$age', '$religion','$gender', '$region','$education','$job','$phone', '$email', '$password','$address', 'Users','$un_no')");
		
	
    }

	$emailID="$email";

ob_start();


    
      
        $to = $emailID;
                $subject ="Login Details";
                $message = "
				Thank you for registering with Valmiki Matrimony. Your
				Register Id : $un_no <br>
				User Name : $phone <br>
                Password : $password<br> ";   
                             
echo    $message;       
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: <info@valmikimatrimonial.in>' . "\r\n";
                $success=mail($to,$subject,$message,$headers);

header("location:login.php");
?>