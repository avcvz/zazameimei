<?php 
    include "partials/Zconnect.php";
?>



        
                
<?php if(!isset($_SESSION['user'])){ ?>
            
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

                <!-- Modal -->
<div class="loginPageModal"> <!-- yellow -->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPageModal" id="login-modal">
			
			<div class=" loginPageModal text-center">
			<button type="button" class="close mr-2" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
				<br>
        <h3 class="modal-title signIn" id="signInModalLabel">Sign in</h3>
        
      </div>
      <div class="modal-body loginPageModal">
	
	</div>
		<div class="col-12 mx-auto loginPageModal">
			
				<!-- remember the METHOD in FORMS -->
				<form action = "partials/Zauthenticate.php" method="POST"> 
					<div class="form-group plSignIn">
						<input type="username" name="username" class="form-control" placeholder="Username">
					</div>
					<div class="form-group plSignIn">
                        <input type="password" name="password" class="form-control plSignIn" placeholder="Password">
                    <div class="text-center">
                            
			            <button type="submit" class="btn btn-block btn-dark loginDetails my-3">Enter</button>
			
			        </div>
					</div>
					<div class="col-12 text-center">
		
					</div>
				</form>

             <div class="loginPageModal">
			<p class="registerBlurb" >Don't have an account? <a href="Zregister.php" class="text-dark signUpModal">&nbsp;Sign up</a></p> 
            <br><br>
            </div>
			</div>
			
      </div>
    </div>
  </div>
</div>

</div> <!-- END yellow -->

<?php } else { ?>

               
                <div class="container-fluid px-0" id="InsertID">           
                <nav class="navbar-expand-lg navbar-dark" id="">

                    <div class="row">
                    <div class="col-6">
                        <a href="#" class="cart text-dark">my cart</a>
                    </div>

                    <div class="col-6 text-right">
                    <a href="#" class="text-dark login">hello</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="nav-link" href="profile.php">Welcome 
                <?php echo  
                $_SESSION['user']; 
                ?> 
                </a> 

                    </div>
                </div> <!--  end  row / LOGGED -->
                <br>

<?php } ?>


                    <div class="row">


                        <a class="navbar-brand col-12 text-center anti-padding" href="Zindex.php">
                                <h1 id="logo">zazameimei</h1>
                            </a>
                           
        
                        <ul class="nav col-12 text-center px-0 navigation">
                            <li class="nav-item border border-right border-white col-3">
                            <a class="nav-link text-light" href="Zindex.php">home</a>
                            </li>
                            
                            <li class="nav-item border border-right border-white col-3">
                            <a class="nav-link text-light" href="#">journal</a>
                            </li>
                            
                            <li class="nav-item border border-right border-white col-3">
                            <a class="nav-link text-light" href="#">about</a>
                            </li>
                            <li class="nav-item border border-right border-white col-3">
                                    <a class="nav-link text-light" href="Zshop.php">shop</a>
                            </li>
                        </ul>           
                        
                    </div>

                </nav> <!-- end Navbar -->
                <br>
                

                











                

        











































    <!-- external custom js -->


	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <!-- external bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>




</body>
</html>