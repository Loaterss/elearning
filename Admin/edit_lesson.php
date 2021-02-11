<?php
include "connection.php";
if (isset($_POST['submitedit'])){
$id=$_POST['id'];
					  
					  $subject   =   $_POST["subject"];
					  
					  $topic   =   $_POST["topic"];
					  
					 
					  
					  $class   =   $_POST["class"];
					  	  
			 //uploading videos and Documents
			 $target_path = "../Video_upload/"; //Declaring Path for uploaded video	
			 $target_path1 = "../PDF_upload/"; //Declaring Path for uploaded pdf			
			 $validextensions = array("jpeg", "3gp", "mp4", "jpg", "png","PNG","JPG"); 
			 $validextensions1 = array("pdf", "doc", "docx", "ppt", "pptx"); //Extensions which are allowed 
			 $ext = explode('.', basename($_FILES['file']['name']));//explode file name from dot(.)
			 $ext1 = explode('.', basename($_FILES['pdf']['name'])); 
			 $file_extension = end($ext); 
			 $file_extension1 = end($ext1);//store extensions in the variable
				 
			 //generate Name for the image;
			 $imageName = "video_".rand(100000,900000) . "." . $file_extension;	
			 $docName = "doc_".rand(100000,900000) . "." . $file_extension1;			
			 $target_path = $target_path . $imageName;
			 $target_path1 = $target_path1 . $docName;//set the target path with a new name of image
			 $videosize = 50240000 ;
			 $docsize = 50240000 ; //imgage size should be less than 3MBs
			 
			 if (($_FILES["file"]["size"] < $videosize ) && in_array($file_extension, $validextensions) &&
			  ($_FILES["pdf"]["size"] < $docsize ) && in_array($file_extension1, $validextensions1)) //Approx. 100kb files can be uploaded.
			 {
				 if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path) && move_uploaded_file($_FILES['pdf']['tmp_name'], $target_path1)) 
				 {
					  
						
						$sql234=mysqli_query($con,"UPDATE `lesson` set   
						  `subject` = '$subject'  ,`topic` = '$topic'  ,`video` = '$imageName'  ,`pdf` = '$docName'  ,`class` = '$class'
										WHERE `lesson_ID`='$id'");

header('location:lesson_table.php?msg=Details successfully Edited  && clr=success');

}
				 }
				}
else {
		 
	header('location:lesson_table.php?msg=Error on mysqli_query please try again !!! ');
	}	

?>
										