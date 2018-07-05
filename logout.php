<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

</head>
<body class="container-fluid bg-white">
<div class="container-fluid" id="dirty"> 


	<?php  
		session_unset();
		session_destroy();
		include "partials/header.php";
	?>
	<h2>You have logged out successfully</h2>
	<a href="login.php">Login again</a>
	<?php 
		include "partials/footer.php";
	?>
</body>
</html>