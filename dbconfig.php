<?php
$servername="localhost";
$username="root";
$dbpassword="2121";
$dbname="test";
$con =new mysqli($servername,$username,$dbpassword,$dbname);
if($con->connect_error)
{
    die("connection field:".$con->connect_error);
}

?>
