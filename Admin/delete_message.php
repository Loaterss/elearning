<?php
include('connection.php');
$id=$_GET['id'];
$sql1="DELETE from `message` where `message_ID` ='$id'";
mysqli_query($con,$sql1);
header('location:message_table.php?msg=Record deleted successfully && clr=success');
?>
 