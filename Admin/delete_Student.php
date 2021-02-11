<?php
include('connection.php');
$id=$_GET['id'];
$sql1="DELETE from `Student` where `Student_ID` ='$id'";
mysqli_query($con,$sql1);
header('location:Student_table.php?msg=Record deleted successfully && clr=success');
?>
 