<?php
include "connection.php";
if (isset($_POST['submitedit'])){
$id=$_POST['id'];
					  
					  $L_name   =   $_POST["value_name"];
					  
					  $L_username   =   $_POST["value_username"];
					  
					  $L_password   = base64_encode( $_POST['value_password']);

					  
						
						$sql234=mysqli_query($con,"UPDATE `admin` set   
						  `name` = '$L_name'  ,`username` = '$L_username'  ,`password` = '$L_password'
										WHERE `admin_ID`='$id'");

header('location:admin_table.php?msg=Details successfully Edited  && clr=success');

}

?>
										