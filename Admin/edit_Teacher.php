<?php
include "connection.php";
if (isset($_POST['submitedit'])){
$id=$_POST['id'];
					  
					  $f_name   =   $_POST["f_name"];
					  
					  $l_name   =   $_POST["l_name"];
					  
					  $email   =   $_POST["email"];
					  
					  $username   =   $_POST["username"];
					  
					  $password   =  base64_encode( $_POST["password"]);
					  
					  $phone   =   $_POST["phone"];
					  
						
						$sql234=mysqli_query($con,"UPDATE `Teacher` set   
						  `f_name` = '$f_name'  ,`l_name` = '$l_name'  ,`email` = '$email'  ,`username` = '$username'  ,`password` = '$password'  ,`phone` = '$phone'
										WHERE `Teacher_ID`='$id'");

header('location:Teacher_table.php?msg=Details successfully Edited  && clr=success');

}

?>
										