<?php
include('connection.php');
$id=$_GET['id'];
$sql1="DELETE from `Teacher` where `Teacher_ID` ='$id'";
mysqli_query($con,$sql1);
header('location:Teacher_table.php?msg=Record deleted successfully && clr=success');
?>
 