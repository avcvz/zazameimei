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
<body class="container-fluid bg-white">
			<div class="container-fluid px-0" id="InsertID">           
                <nav class="navbar-expand-lg" id="">
                <div class="row">
                    <div class="col-6">
                        <a href="#" class="cart text-dark">cart</a>
                    </div>

                    <div class="col-6 text-right">
                    <a href="Zlogin.php" class="text-dark login" data-toggle="modal" data-target="#signInModal">login</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="Zregister.php" class="text-dark login">register</a>
                    </div>
                </div> <!--  end  row / LOG OUT-->
                 <div class="row">


                        <a class="navbar-brand col-12 text-center anti-paddingReg" href="Zindex.php">
                                <h1 id="logo2">zazameimei</h1>
                            </a>
                           
        
                        <ul class="nav col-12 text-center px-0 navigation">
                            <li class="nav-item col-3">
                           
                            </li>
                            
                            <li class="nav-item col-3">
                          
                            </li>
                            
                            <li class="nav-item col-3">
                          
                            </li>
                            <li class="nav-item col-3">
                                  
                            </li>
                        </ul>           
                        
                    </div>

                </nav> <!-- end Navbar -->

	
<br><br>


	 <div class="container">
		<div class="row">

			<div class="col-8 offset-2 border border-dark rounded">
			<br>
			
				<!-- remember the METHOD in FORMS -->
				<h1 class="signUp text-dark">CREATE ACCOUNT</h1>

				
				<form action = "partials/ZRegisterUser.php" method="POST"> 

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
					
					
					<button type="submit" class="btn btn-dark btnColor btn-block">REGISTER</button>

					<br>
					<div class="col-12 text-left">
					<p class="registerBlurb">Already have an account? <a href="Zlogin.php" class="text-dark">Log in here</a></p>
					</div>
					

				</form>

				


			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->

	

</body>
</html>