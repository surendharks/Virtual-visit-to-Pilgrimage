<?php


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['id'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$idval=$_POST['idval'];
$idnumber=$_POST['idnumber'];
include "dbconfig.php";
$sql="INSERT INTO user (fname,lname,id,dob,email,phone,pass,cpass,idval,idnumber) values ('$fname','$lname','$gender','$dob','$email','$phone','$pass','$cpass','$idval','$idnumber')";
if($con->query($sql)===TRUE)
{ 

  echo "<script> alert('account created scessfullly');
  window.location.href='index.php';
</script>";

}
else
{
   echo "<script> alert('account creation failed');
 window.location.href='index.php';</script>";
}

	?>