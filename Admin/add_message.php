<?php
include "connection.php";
if (isset($_POST['submitadd'])){
 
					  
					  $L_message   =   $_POST["value_message"];
					  
					  $L_sender   =   $_POST["value_sender"];
					  
					  $L_receiver   =   $_POST["value_receiver"];
					  
						
						$sql234=mysqli_query($con,"INSERT INTO `message` (  
						  `message`  ,`sender`  ,`receiver`) VALUES (  '$L_message'  ,'$L_sender'  ,'$L_receiver') ");

header('location:message_table.php?msg=Record successfully added  && clr=success');

}

?>
										