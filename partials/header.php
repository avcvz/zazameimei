<?php 
    include "partials/connect.php";
?>



        
                
<?php if(!isset($_SESSION['user'])){ ?>






 <div class="container-fluid px-0" id="InsertID">           
                <nav class="navbar-expand-lg navbar-light" id="">
                

                    <div class="row loginNav py-0">
                    <div class="col-4 cart ">
                        <a href="cart.php" class="  cart text-dark">my cart</a>
                    </div>
                    
                    

                    <div class="col-8 text-right py-0">

                     <p class="cart text-dark">&nbsp; <a href="login.php" class="text-dark" data-toggle="modal" data-target="#signInModal" > login </a>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="text-dark" href="register.php"> register</a>
                    </p>
                    
                  

                    </div>

                   <br>

                </div> <!--  end  row / LOGGED -->
                </div>
                <br>


<!-- TESTING -->

            

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
				<form action = "partials/authenticate.php" method="POST"> 
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
			<p class="registerBlurb" >Don't have an account? <a href="register.php" class="text-dark signUpModal">&nbsp;Sign up</a></p> 
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
                

                    <div class="row loginNav py-0">
                    <div class="col-4">
                        <a href="cart.php" class="  cart text-dark">my cart</a>
                    </div>
                    
                    

                    <div class="col-8 text-right py-0">

                     <p class="cart ">&nbsp; <a href="#" class="userProfile text-warning"> <?php echo $_SESSION['user'] ?> </a>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="text-dark" href="logout.php"> logout</a>
                    </p>
                    
                  

                    </div>

                   <br>

                </div> <!--  end  row / LOGGED -->
                </div>
                <br>
<?php } ?>


                   
                        <!-- DESKTOP         -->
                    <div class="row d-none d-lg-block anti-padding">
                        <a class=" col-12 text-center textDecor" href="index.php">
                                <h1 class="textDecor" id="logo">zazameimei</h1>
                            </a>
                    </div>

                    <div class="row d-none d-lg-block">
                        <ul class="nav  col-12 text-center px-0 navigation rounded-bottom">
                            <li class="naviLink nav-item border border-white col-3">
                            <a class="insideLink nav-link" href="index.php">home</a>
                            </li>
                            

                                <li class="naviLink nav-item  border border-white col-3">
                            <a class="insideLink nav-link" href="about.php">about</a>
                            </li>


                            <li class="naviLink nav-item border border-white  col-3">
                            <a class="insideLink nav-link" href="journal.php">journal</a>
                            </li>
                            
                            
                            <li class="naviLink nav-item border border-white col-3">
                                    <a class="insideLink nav-link" href="shop.php">shop</a>
                            </li>
                        </ul>           
                        
                
                    </div>
</div>
                    


                    <!-- END DESKTOP                -->


                <!-- MOBILE       -->
                       <div class="row d-lg-none navbar-light anti-padding logoMobileSize">
                           <div class="col-10 text-right logoMobileSize">
                        <a class=" textDecor  anti-padding text-right" href="index.php">
                            <h1 class="textDecor"  id="logoMobileHeader">zazameimei</h1>
                        </a>

                        </div>
                        <div class="col-2 text-right">
                            
                            <div data-toggle="collapse" data-target="#mobileNav" aria-controls="mobileNav" aria-expanded="false" aria-label="Toggle navigation" id="ham"><br>
                    <h4 class="toggleIcon navbar-toggler-icon"></h4>
</div>
                    </div>
                    </div>

                <div class="  row d-lg-none navigationMobile navbar-light">
                    <div class="col-12 ">
                        

 
 

                <div class="collapse navbar-collapse navigationMobile col-12" id="mobileNav">
                        <ul class="navbar-nav navigationMobile">
                            <li class="nav-item">
                            <a class="insideLinkMobile nav-link" href="index.php">home</a>
                            </li>
                            

                                <li class="nav-item">
                            <a class="insideLinkMobile nav-link" href="about.php">about</a>
                            </li>


                            <li class="nav-item">
                            <a class="insideLinkMobile nav-link" href="journal.php">journal</a>
                            </li>
                            
                            
                            <li class="nav-item  ">
                                    <a class="insideLinkMobile nav-link" href="shop.php">shop</a>
                            </li>
                            
                        </ul>           
    
                        
                    </div>
                    </div> 
                   
 
</div>
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
