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
    <link href="https://fonts.googleapis.com/css?family=Space+Mono:400,700" rel="stylesheet">

</head>
<body class="container-fluid" id="dirty">
	

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

<br><br><br>


    <!--                    TEEESSSSSSTTTTINNNNNGGGGGGGG                         -->



<!-- Modal -->

<div class="modal fade" id="itemAddedLabel" tabindex="-1" role="dialog" aria-labelledby="itemAddedLabel" aria-hidden="true">
<br> <br> <br> <br> <br> <br><br> <br>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title blogTitle" id="itemAddedLabel">Item Added!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
  </div>
</div>



    <!--                    TEEESSSSSSTTTTINNNNNGGGGGGGG                         -->




 
  <div class="container">
		<div class="row">


			<div class="col-8 offset-2 border border-dark rounded">
			<br>
			
				<!-- remember the METHOD in FORMS -->
				<h1 class="signUp text-dark">ADD NEW ITEM</h1>

				
				<form action = "partials/ZprocessNewItem.php" method="POST" enctype="multipart/form-data"> 

					<div class="form-group plName">
						<input type="text" name="itemName" class="form-control" placeholder="Item Name">
					</div>

					<div class="form-group plName">
						
						<input type="number" name="category" class="form-control" placeholder="Category">
					</div>

					<div class="form-group plName">
						<input type="Number" name="price" class="form-control" placeholder="Price">
					</div>

					<div class="form-group plName">
						<input type="text" name="description" class="form-control" placeholder="Description">
					</div>
					
					
					<div class="form-group plName">
						<input type="file" name="gameImg" class="form-control" placeholder="Image:">
					</div>
					
					
					<button type="test" class="btn btn-dark btnColor btn-block" data-toggle="modal" data-target="#itemAddedLabel">
					  Submit
					</button>

					<br>
					

                </form>
              




			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->
<br><br><br><br><br><br><br>

  <div class="row border-top border-dark">
    <div class="col-12 text-center " id="footer">
    <br>
  <p class="footerBlurb">Design, Developed & Deployed by &nbsp; <a class="text-dark" id="avcvz" href="https://www.avcvz.design/">avcvz design</a>  </p>
  </div>
  </div>


<script type="text/javascript" src = "assets/js/function.js"></script>
<script
 src="https://code.jquery.com/jquery-3.3.1.js"
 integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</body>
</html>