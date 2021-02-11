<?php
include "connection.php";
if (isset($_POST['submitadd'])){
 
					  
					  $f_name   =   $_POST["f_name"];
					  
					  $l_name   =   $_POST["l_name"];
					  
					  $email   =   $_POST["email"];
					  
					  $username   =   $_POST["username"];
					  
					  $password   =  base64_encode( $_POST["password"]);
					  
					  $phone   =   $_POST["phone"];
			
						 
						  $sql=mysqli_query($con,"INSERT INTO `Teacher` (  
							`f_name`  ,`l_name`  ,`email`  ,`username`  ,`password`  ,`phone`) VALUES (  '$f_name'  ,'$l_name'  ,'$email'  ,'$username'  ,'$password'  ,'$phone') ");
		 
	
		 
			header('location:Teacher_table.php?msg=Record successfully added  && clr=success');
		 }
											  
		
	 
	
			 
			 
			 
			 
	 
	 
	 
	 
	 
	 
		  
		 
					 
	  ?>
	  
	  
	   
	  
	  
	  
	 
	 
	  
										