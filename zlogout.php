<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<?php  
		session_unset();
		session_destroy();
		include "partials/Zheader.php";
	?>
	<h2>You have logged out successfully</h2>
	<a href="Zlogin.php">Login again</a>
	<?php 
		include "partials/Zfooter.php";
	?>
</body>
</html>