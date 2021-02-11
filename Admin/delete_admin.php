<?php
include('connection.php');
$id=$_GET['id'];
$sql1="DELETE from `admin` where `admin_ID` ='$id'";
mysqli_query($con,$sql1);
header('location:admin_table.php?msg=Record deleted successfully && clr=success');
?>
 