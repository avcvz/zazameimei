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
include "partials/header.php"; ?>

<?php 
$sql = "SELECT * FROM items";
$result = mysqli_query($conn, $sql);
echo "<div class ='row'>";
while($row = mysqli_fetch_assoc($result)){

	echo "<div class = 'card col-4'>".
		 "<img class = 'card-img-top' src='".$row['img_path']."'>"."<div class = 'card-body'>".
		 "<p>".$row['name']."</p>".
		 "<p>".$row['price']."</p>".
		 // "<p>".$row['description']."</p>".
		 "<input class='form-control' type='number' name ='quantity' id='quantity".$row['id']."'>".
		 "<button class ='btn btn-primary' onclick='addToCart(".$row['id'].")'>Add to Cart </button>".
		"</div>".
		"</div>";
}

	echo "</div>";
?>


	 
	

<script type="text/javascript" src = "assets/js/function.js"></script>
<script
 src="https://code.jquery.com/jquery-3.3.1.js"
 integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

</body>
</html>