<?php 
session_start();
?>

<!-- put session start in every page other way
 -->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	
<?php 
		session_unset();
 		session_destroy();
include "partials/header.php";
		
 		?>
<h2>You have logged out successfully</h2>
<a href="Zlogin.php">Login Again</a>
	


</body>
</html>