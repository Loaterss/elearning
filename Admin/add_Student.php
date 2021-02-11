<?php
include "connection.php";
if (isset($_POST['submitadd'])){
 
					  
					  $f_name   =   $_POST["f_name"];
					  
					  $l_name   =   $_POST["l_name"];
					  
					
					  
					  $username   =   $_POST["username"];
					  
					  $password   =  base64_encode( $_POST["password"]);
					  
					  $class   =   $_POST["class"];
			
						 
						  $sql=mysqli_query($con,"INSERT INTO `student` (  
							`f_name`  ,`l_name`  ,`username`  ,`password`  ,`class`) VALUES (  '$f_name'  ,'$l_name'  ,'$username'  ,'$password'  ,'$class') ");
  
						 
						  
						  
						 
						 
	
		header('location:Student_table.php?msg=Record successfully added  && clr=success');
		 
		 }					
			
	
			 
			 
			 
			 
	 
	 
	 
	 
	 
	 
		  
		 
					 
	  ?>
	  
	  
	   
	  
	  
	  
	 
	 
	  
										