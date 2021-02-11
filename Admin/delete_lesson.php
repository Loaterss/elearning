<?php
include('connection.php');
$id=$_GET['id'];
$sql1="DELETE from `lesson` where `lesson_ID` ='$id'";
mysqli_query($con,$sql1);
header('location:lesson_table.php?msg=Record deleted successfully && clr=success');
?>
 