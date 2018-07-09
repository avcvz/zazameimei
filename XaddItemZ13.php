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
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/zari.png">
    <link href="https://fonts.googleapis.com/css?family=Space+Mono:400,700" rel="stylesheet">

</head>
<body class="container-fluid" id="dirty">
	

<nav class="navbar-expand-lg" id="">
                <div class="row">
                    <div class="col-6">
                        <a href="index.php" class="b2home text-dark">back to Home</a>
                    </div>

                     <!-- <div class="col-6 text-right">
                    <a href="Zlogin.php" class="text-dark login" data-toggle="modal" data-target="#signInModal">login</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="Zregister.php" class="text-dark login">register</a>
                    </div> -->
                </div> <!--  end  row / LOG OUT-->
                 <div class="row">


                        <a class="navbar-brand col-12 text-center bg-addItem" href="index.php">
                                <h1 id="logo3" >zazameimei</h1>
                            </a>
                           
        
                        
                    </div>

                </nav> <!-- end Navbar -->

<br><br><br>


  <div class="container">
		<div class="row">

			<div class="col-8 offset-2 border border-dark rounded">
			<br>
			
				<!-- remember the METHOD in FORMS -->
				<h1 class="signUp text-dark">ADD NEW ITEM</h1>

				
				<form action = "partials/processNewItem.php" method="POST" enctype="multipart/form-data"> 

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
					
					
					<button type="submit" id="itemAdded" class="btn btn-dark btnColor btn-block">Save Item</button>

					<br>
					

                </form>
              

				


			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->



<script type="text/javascript" src = "assets/js/function.js"></script>
<script type="text/javascript" src = "assets/js/bootstrap.js"></script>
<script
 src="https://code.jquery.com/jquery-3.3.1.js"
 integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</body>
</html>