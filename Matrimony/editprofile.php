<?php
$user_id=$_POST['user_id'];
//$section=$_POST['section'];
	if(isset($_POST['submit'])){
    // Include the database configuration file
    include_once 'dbConfig_knj.php';
    
    // File upload configuration
    $targetDir = "uploads/";
    $allowTypes = array('jpg','png','jpeg','gif');
    
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if((array_filter($_FILES['files']['name']))){
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql
                    $insertValuesSQL .= "('".$fileName."', '$user_id'),";
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].', ';
            }
        }
        
        if(($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // Insert image file name into database
			
            $insert = $db->query("INSERT INTO member (final_file, un_no) VALUES $insertValuesSQL");
            if($insert){
                $errorUpload = ($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType =($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = 	($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                $statusMsg = "Files are uploaded successfully.";
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }
    
    // Display status message
	
    echo $statusMsg;
	echo "<input type='hidden' value='$statusMsg' id='statusMessage'>";
	//echo "<input type='hidden' value='$class' id='class'>";
	//echo "<input type='hidden' value='$section' id='section'>";
}
?>
<script>
var statusMessage = document.getElementById('statusMessage').value;
statusMessage=statusMessage.replace("<br/>","");
alert(statusMessage);
window.location="edit_details.php";
</script>
