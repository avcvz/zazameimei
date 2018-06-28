<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Space+Mono:400,700" rel="stylesheet">

</head>
<body class="container-fluid">
	
<?php 
include "partials/Zheader.php"; 
?>
	<br>


<div class="container ">
		<div class="row">

			<div class="col-8 offset-2 border border-dark rounded loginPage">
			<br>
			
				<!-- remember the METHOD in FORMS -->
				<h1 class="signIn text-dark text-center">Sign in</h1>

				
				<form action = "partials/Zauthenticate.php" method="POST"> 


					<div class="form-group plSignIn">
						<input type="username" name="username" class="form-control" placeholder="Username">
					</div>

					
					
					
					<div class="form-group plSignIn">
                        <input type="password" name="password" class="form-control plSignIn" placeholder="Password">
                    <div class="text-center">
			
					
					<br>
					<button type="submit" class="btn btn-dark btnColor btn-block">REGISTER</button>

					<br>
					<div class="col-12 text-left">
					<p class="registerBlurb">Don't have an account? <a href="Zregister.php" class="text-dark signUpModal">&nbsp;Sign up</a> </p> <br>
           		
					</div>
					

				</form>

				


			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->

	</div></div>
<br><br><br><br><br>


<?php 
echo "<br><br><br><br><br><br>";
include "partials/Zfooter.php"; ?>



</body>
</html>