
 <?php
session_start();
include "connection.php";
 
	session_destroy();
	unset($_SESSION['SESS_MEMBER_ID']);
	
	 
	header('location:index.php?msg=Successfully Logged Out && clr=red ');
	
	mysqli_close($con);
?>
 
 