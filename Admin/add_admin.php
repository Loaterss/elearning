<?php
include "connection.php";
if (isset($_POST['submitadd'])){
 
					  
					  $L_name   =   $_POST["value_name"];
					  
					  $L_username   =   $_POST["value_username"];
					  
					  $L_password   =   base64_encode($_POST["value_password"]);
					  
						
						$sql234=mysqli_query($con,"INSERT INTO `admin` (  
						  `name`  ,`username`  ,`password`) VALUES (  '$L_name'  ,'$L_username'  ,'$L_password') ");

header('location:admin_table.php?msg=Record successfully added  && clr=success');

}

?>
										
