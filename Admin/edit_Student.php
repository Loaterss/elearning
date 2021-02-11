<?php
include "connection.php";
if (isset($_POST['submitedit'])){
$id=$_POST['id'];
					  
					  $f_name   =   $_POST["f_name"];
					  
					  $l_name   =   $_POST["l_name"];
					  
					 
					  
					  $username   =   $_POST["username"];
					  
					  $password   =  base64_encode( $_POST["password"]);
					  
					  $class   =   $_POST["class"];
					  
						
						$sql234=mysqli_query($con,"UPDATE `student` set   
						  `f_name` = '$f_name'  ,`l_name` = '$l_name' ,`username` = '$username'  ,`password` = '$password'  ,`class` = '$class'
										WHERE `student_ID`='$id'");

header('location:Student_table.php?msg=Details successfully Edited  && clr=success');

}

?>
										