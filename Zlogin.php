<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HEADER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

</head>
<body class="container-fluid" id="dirty">
	
<?php 
include "partials/header.php"; 
?>
	<br> <br> <br> <br>
	<div class="container loginPage col-6 offset-3">
	<div class="text-center">
	<br>
	<h1 class="signIn">SIGN IN</h1>
	</div>
		<div class="col-12 mx-auto">
			
				<!-- remember the METHOD in FORMS -->
				<form action = "partials/Zauthenticate.php" method="POST"> 
					<div class="form-group">
						<label for="username" class="loginDetails">Username:</label>
						<input type="username" name="username" class="form-control" placeholder="Username">
					</div>
					<br>
					<div class="form-group">
						<label for="password" class="loginDetails">Password:</label>
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
					<div class="col-12 text-center">
					<br>
					<button type="submit" class="btn-block btn-dark loginDetails">SIGN IN</button>
					</div>
				</form>
			
		</div> <!-- end row -->
	</div> <!-- end container -->

	


</body>
</html>