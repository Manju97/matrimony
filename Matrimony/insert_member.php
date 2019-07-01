<?php

include "db.php";

$fname=$_POST['f_name'];
$lname=$_POST['l_name'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$religion=$_POST['religion'];
$gender=$_POST['gender'];
$education=$_POST['education'];
$phone=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$father_name=$_POST['father_name'];
$mother_name=$_POST['mother_name'];
$siblings=$_POST['siblings'];
$height=$_POST['height'];
$b_time=$_POST['b_time'];
$nakshatra=$_POST['nakshatra'];
$job=$_POST['job'];
$rashi=$_POST['rashi'];
$god=$_POST['god'];
$expectations=$_POST['expectations'];
$address=$_POST['address'];
$region=$_POST['region'];
$color=$_POST['color'];


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
					
                echo 'File uploaded successfully';
				$sql=mysqli_query($dbc,"INSERT INTO `member`(`fname`, `lname`, `phone`, `gender`, `dob`, `age`,`education`,`job`, `religion`, `region`,`email`, `password`, `father_name`,`mother_name`, `siblings`, `height`, `b_time`, `nakshatra`, `rashi`, `god`, `color`, `expectations`, `address`,`status`,`final_file`, `file_type`, `new_size`,`created`,`un_no`) VALUES ('$fname', '$lname', '$phone', '$gender', '$dob', '$age','$education','$job', '$religion','$region', '$email', '$password','$father_name','$mother_name','$siblings','$height','$b_time','$nakshatra','$rashi', '$god','$color', '$expectations', '$address', 'Not Approved','$final_file','$file_type','$new_size','Admin','$un_no')");
				
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
				
            }
               
      
	else {
        $sql=mysqli_query($dbc,"INSERT INTO `member`(`fname`, `lname`, `phone`, `gender`, `dob`, `age`,`education`,`job`,  `religion`, `region`,`email`, `password`, `father_name`,`mother_name`, `siblings`, `height`, `b_time`, `nakshatra`, `rashi`, `god`,`color`, `expectations`, `address`,`status`,`created`,`un_no`) VALUES ('$fname', '$lname', '$phone', '$gender', '$dob', '$age','$education',  '$job', '$religion','$region', '$email', '$password','$father_name','$mother_name','$siblings','$height','$b_time','$nakshatra','$rashi', '$god','$color', '$expectations', '$address', 'Not Approved','Admin','$un_no')");
		
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
    }



header("location:action.php");
?>