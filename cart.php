

<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cart</title>
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


<div class="container-fluid">
		<div class="row">
<h1 class=" text-dark text-left">My Cart</h1>
			<div class="col-12 border border-dark rounded bg-white">
			<br>
			
				<!-- remember the METHOD in FORMS -->
				

				
				<main class="wrapper">
		
		
		<?php 
			// var_export($_SESSION['cart']);
			foreach($_SESSION['cart'] as $row_key => $row_value){
				echo "ID: " . $row_key . " Quantity: " . $row_value . "<br>"; 
			}

		?>

			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				


			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->

	</div></div>



<?php 
 echo "<br>";
include "partials/Zfooter.php"; ?>



</body>
</html>

