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

	 <div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<!-- remember the METHOD in FORMS -->
				<form action = "partials/ZregisterUser.php" method="POST"> 
					<div class="form-group">
						<label for="username">Username:</label>
						<input type="username" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label for="address">Address:</label>
						<input type="text" name="address" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label for="name"> Name:</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password:</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Confirm Password:</label>
						<input type="password" name="confirmPassword" class="form-control">
					</div>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->

	

</body>
</html>