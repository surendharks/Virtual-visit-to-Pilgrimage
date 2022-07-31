<?php

$email=$_POST['Email'];
$password=$_POST['Password'];

include "dbconfig.php";

$sql="SELECT Name,Email, Password from login where Email='$email'and Password='$password'";


	$result=$con->query($sql);
	
if($result->num_rows>0)
{
	$row=$result->fetch_assoc();
	if(($row['Email']==$email) and ($row['Password']=$password))
	{
		session_start();
		$_SESSION['username']=$email;
		$_SESSION['Password']=$password;
		
			header("Location:success.php");
		
		}
		else
{

	echo "<script>alert('Invalid credentials');</script>";
	header("Location:index.php");
}

		 	//echo "<script>alert('logging in');
	//window.location.href='sucess.php';</script>";
}
else
{
	
	echo '<script>alert(Invalid credentials);</script>';
	header("Location:index.php");
}



?>



