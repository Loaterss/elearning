
 <?php
include "connection.php";
 session_start();
  if(isset($_POST['kosh'])){
		 
	
$username	= $_POST['username'];
$pass 		= base64_encode( $_POST['password']);


if(empty($username) || empty($pass)){
 header('location:index.php?msg=Please Fill in Empty Fields !!! && clr=red ');
}

		
	//Adding the escape character
	$username = addslashes($username);
	$password = addslashes($pass);
	
	
	$username = mysqli_real_escape_string($con, $username);
	$password = mysqli_real_escape_string($con, $pass);
	
$sql = 'SELECT * FROM `admin` WHERE `username` ="'.$_POST['username'].'" AND `password` ="'.base64_encode($_POST['password']).'"';
$result = mysqli_query($con,$sql);

			if (mysqli_num_rows($result)==1){
	    //Login Successful
		session_start();
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['admin_ID'];
			$_SESSION['SESS_NAME'] 		= $member['username'];
			 
			session_write_close();
			
			 
				 
				 header("location:dashboard.php?msg=You have Successfully Logged In, Welcome ".$_POST['username']."  && clr=success");
			 
			
			 
	        } 
					
			else{
			 header('location:index.php?msg=Incorrect Username or Password !!! && clr=red ');
			}
 

}
else{
	 header('location:index.php?msg=Please Fill in Empty Fields !!! && clr=red ');
	
}

?>
	
	
 

 