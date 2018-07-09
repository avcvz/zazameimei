<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zara's Shop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    

</head>
<body class="container-fluid" id="dirty" >

<div id="dirty">


	
<?php 
include "partials/header.php"; ?>


<div class="shopBlurb bg-warning  text-center">
<br>
<h2 class="shopBlurb text-dark" >&nbsp; Please support my craft by purchasing my books! Thank you! </h2>
<br>
</div>
<br><br><br>

<h1>Books</h1>
<hr>
<br><br><br>
<?php 
$sql = "SELECT * FROM items";
$result = mysqli_query($conn, $sql);
echo "<div class ='row'>";
while($row = mysqli_fetch_assoc($result)){

	echo "<div class = 'col-lg-4 col-md-6 col-12'>".
         "<img class = 'img-fluid rounded' src='".$row['img_path']."'>"."<br><br>".
         "<h4 class = 'bookTitle'>".$row['name']."</h4>"."<p class = 'bookDesc'>".$row['description']."</p>".
         "<button class ='btn btn-dark btn-block' onclick='addToCart(".$row['id'].")'>BUY </button>"."<br><br><br>".
	
        "</div>";
        
}

 "</div>";
?>
</div>

<br><br><br><br><br>

</div>

<h2 id="shop" > &nbsp;  SERVICES</h2>
<hr>
<br><br><br>
<div class="container-fluid">
	<div class="row">
		<div class = "col-lg-4 col-md-6 col-12"> 
			<img class = img-fluid rounded src="assets/images/writing.png" height="84%" width="84%" >
			<h4 class="bookTitle">Copy Editing</h4>
			<p class="bookDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sapiente doloremque ea tempore illo beatae quas voluptatem. Facilis in nisi magnam, iusto quisquam est dolores libero at fuga minima consectetur.</p>
			<a href="mailto:avcvz@gmail.com?Subject=Request%20Quotation%20for%20Copy%20Editing" class="btn btn-dark btn-block" role="button">Request Quotation </a>
			<br><br><br>
		</div>
		
	
		<div class = "col-lg-4 col-md-6 col-12"> 
			<img class =img-fluid rounded src="assets/images/writing.png"  height="84%" width="84%">
			<h4 class="bookTitle">Content Writing</h4>
			<p class="bookDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sapiente doloremque ea tempore illo beatae quas voluptatem. Facilis in nisi magnam, iusto quisquam est dolores libero at fuga minima consectetur.</p>
			<a href="mailto:avcvz@gmail.com?Subject=Request%20Quotation%20for%20Content%20Writing" class="btn btn-dark btn-block" role="button">Request Quotation </a>
			<br><br><br>
		</div>
		<br><br><br>

		<div class = "col-lg-4 col-md-6 col-12"> 
			<img class =img-fluid rounded src="assets/images/writing.png"  height="84%" width="84%">
			<h4 class="bookTitle">Laying-Out</h4>
			<p class="bookDesc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita sapiente doloremque ea tempore illo beatae quas voluptatem. Facilis in nisi magnam, iusto quisquam est dolores libero at fuga minima consectetur.</p>
			<a href="mailto:avcvz@gmail.com?Subject=Request%20Quotation%20for%20Layout" class="btn btn-dark btn-block" role="button">Request Quotation </a>
			<br><br><br>
		</div>
		
		
		</div>

</div>

	<!-- echo "<div class = 'card col-4'>".
		 "<img class = 'card-img-top' src='".$row['img_path']."'>"."<div class = 'card-body'>".
		 "<p>".$row['name']."</p>".
		 "<p>".$row['price']."</p>".
		 // "<p>".$row['description']."</p>".
		 "<input class='form-control' type='number' name ='quantity' id='quantity".$row['id']."'>".
		 "<button class ='btn btn-primary' onclick='addToCart(".$row['id'].")'>Add to Cart </button>".
		"</div>".
		"</div>";

	echo "</div>"; -->
	<br><br><br><br><br>
	<div class="row border-top border-dark">
    <div class="col-12 text-center" id="footer">
		<br>
	<p class="footerBlurb">Designed, Developed, & Deployed by &nbsp; <a class="avcvz" href="https://www.avcvz.design/">AVCVZ DESIGN</a>  </p>
	</div>
	<br><br>
	</div>
<script type="text/javascript" src = "assets/js/function.js"></script>
<script
 src="https://code.jquery.com/jquery-3.3.1.js"
 integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

</body>
</html>