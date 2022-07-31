<?php
session_start();
if(!isset($_SESSION['username']))
{
	session_destroy();
}
else
{
		session_destroy();

	header("Location:index.php");

}
	?>}
