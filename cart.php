

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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



</head>
<body class="container-fluid " id="dirty" >
	
<?php 
include "partials/header.php"; 
?>
	<br>


<div class="container-fluid">
		<div class="row">


			<div class="col-12  rounded " >
      <h1 class=" text-dark text-left myCart">Shopping Cart</h1>
			
			
				<!-- remember the METHOD in FORMS -->
			
				
		<table class="table bg-white border " >
  <thead class="registerBG ">
    <tr>
      <th scope="col">&nbsp;&nbsp;PRODUCT&nbsp;&nbsp;</th>
      <th scope="col" class="text-center">TITLE</th>

      <th scope="col" class="text-center">PRICE</th>
      <th scope="col" class="text-center"></th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" ><img src="http://placehold.jp/60x60.png" class="img-fluid col-12"></th>
      <td class="col-12 text-center "><p class="col-12 cartTitle">Laylay sa Mundo ng mga Gulay</p></td>
      <td class="col-12 text-center"><p class="col-12 cartText">P300.00</p></td>
      <td ><i class="fas fa-trash">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></td>
    </tr>
    <tr>
      <th scope="row" class=""><img src="http://placehold.jp/60x60.png" class="img-fluid col-12"></th>
      <td class="col-12"><p class="col-12 text-center cartTitle">Red Balloon</p></td>
      <td class="col-12"><p class="col-12 text-center cartText">P300.00</p></td>
      <td ><i class="fas fa-trash">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></td>
    </tr>
    <tr>
     <th scope="row" class=""><img src="http://placehold.jp/60x60.png" class="img-fluid col-12"></th>
      <td class="col-12"><p class="col-12 text-center cartTitle">Langgam sa Ilalim ng Tulay</p></td>
      <td class="col-12"><p class="col-12 text-center cartText">P300.00</p></td>

      <td ><i class="fas fa-trash">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></td>
    </tr>
    <tr class="">
      <th scope="row"> </th>

      <td class="col-12 text-right"><h5 class="cartTotal">TOTAL:</h5></td>
      <td class="col-12"><h5 class="text-left col-12 cartTotal">P900.00</h5></td>

      <td > <br></td>



    </tr>

  </tbody>
</table>

<div class="col-12 text-right">
<button class="btn btn-warning checkoutButton">CONTINUE SHOPPING</button>

    <button class="btn  btn-warning checkoutButton">UPDATE CART</button>
    <button class="btn  btn-warning  checkoutButton">CHECKOUT</button>
</div>



</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				


			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->

	</div></div>



<?php 
 echo "<br>";
include "partials/footer.php"; ?>



</body>
</html>

