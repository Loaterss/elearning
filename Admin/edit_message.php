<?php
include "connection.php";
if (isset($_POST['submitedit'])){
$id=$_POST['id'];
					  
					  $L_message   =   $_POST["value_message"];
					  
					  $L_sender   =   $_POST["value_sender"];
					  
					  $L_receiver   =   $_POST["value_receiver"];
					  
						
						$sql234=mysqli_query($con,"UPDATE `message` set   
						  `message` = '$L_message'  ,`sender` = '$L_sender'  ,`receiver` = '$L_receiver'
										WHERE `message_ID`='$id'");

header('location:message_table.php?msg=Details successfully Edited  && clr=success');

}

?>
										