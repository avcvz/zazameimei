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
<body class="container-fluid registerBG">
	


 <br> <br> <br>

	 <div class="container ">
		<div class="row">

			<div class="col-8 offset-2 registerForm">
			<br>
			
				<!-- remember the METHOD in FORMS -->
				<h1 class="signUp text-dark">CREATE ACCOUNT</h1>

				
				<form action = "partials/testRegisterUser.php" method="POST"> 

					<div class="form-group plName">
						<input type="text" name="name" class="form-control" placeholder="Full Name">
					</div>

					<div class="form-group plName">
						
						<input type="username" name="username" class="form-control" placeholder="Username">
					</div>

					<div class="form-group plName">
						<input type="email" name="email" class="form-control" placeholder="Email">
					</div>

					<div class="form-group plName">
						<input type="text" name="address" class="form-control" placeholder="Address">
					</div>
					
					
					<div class="form-group plName">
						<input type="password" name="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group plName">
						<input type="password" name="confirmPassword" class="form-control"placeholder="Confirm password">
					</div>	
					
					
					<button type="submit" class="btn btn-primary btnColor btn-block">REGISTER</button>


					<br>
				</form>

			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->

	

</body>
</html>