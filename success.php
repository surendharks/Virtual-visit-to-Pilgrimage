

<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("Location:fail.php");
}
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HOME page</title>
	
</head>
<body >
	
		
		<h1>logged in</h1>
		<button onclick="logout()">LOGOUT</button>

	 

</body>
<script type="text/javascript">
	

	function logout()
	{


		window.location.href='login.php';

	}
		

		
</script>
</html>













