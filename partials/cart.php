

<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shopping Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, shrink-to-fit=no">
    <meta name="theme-color" content="#FFAB91" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Space+Mono:400,700" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/zari.png">
  <link href="https://fonts.googleapis.com/css?family=Kurale" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



</head>
<body class="container-fluid" id="dirty">

<main class="d-none d-lg-block ">
<?php 
include "partials/header.php"; 
?>
</main>

  

<div class="container-fluid  d-none d-lg-block">






		<div class="row d-none d-lg-block ">


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
      <th scope="row" ><img src="assets/images/t-siopao60.jpg" class="img-fluid col-12"></th>
      <td class="col-12 text-center "><p class="col-12 cartTitle">Ang Mandirigmang Siopao</p></td>
      <td class="col-12 text-center"><p class="col-12 cartText">P300.00</p></td>
      <td ><i class="fas fa-trash">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></td>
    </tr>
    <tr>
      <th scope="row" class=""><img src="assets/images/t-cactus60.jpg" class="img-fluid col-12"></th>
      <td class="col-12"><p class="col-12 text-center cartTitle">The Cactus Who Loves to Hug</p></td>
      <td class="col-12"><p class="col-12 text-center cartText">P300.00</p></td>
      <td ><i class="fas fa-trash">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></td>
    </tr>
    <tr>
     <th scope="row" class=""><img src="assets/images/t-sunflower60.jpg" class="img-fluid col-12"></th>
      <td class="col-12"><p class="col-12 text-center cartTitle">Bakit Malungkot si Sunflower?</p></td>
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
<a href="shop.php" class="btn text-dark checkoutButton" role="button">CONTINUE SHOPPING</a>
    <button class="btn  checkoutButton">UPDATE CART</button>
    <a href="checkout.php" class="btn text-dark    checkoutButton">CHECKOUT</a>
</div>



</div>
			<br><br><br><br><br><br><br>
		
				


			</div>
    </div> <!-- end row   Desktop-->
    </div>
<div class=" d-lg-none">
   <div class="row">  <!--   mobile start      -->

    <div class="col-12 registerBG ">
     <br>
     <div class="row ">

     <div class="col-2 ">
<h3><a href="shop.php"><i class="text-dark fas fa-arrow-left" ></i></a></h3>
      </div>
      <div class="col-8 text-center ">
      <h2 class="myCartMobile">My Cart(3)</h2>
      </div>
      <div class="col-2 text-right"><a href="cart.php"><h3><i class="text-dark fas fa-sync-alt"></i></h3></a></div>
      </div>
      <br>
    </div>
    <div class="row mx-auto ">
    
      <div class="col-3 class="mx-auto">
      <br>
      <img " src="assets/images/t-siopao.jpg" alt="">
      </div>

      <div class="col-4 mx-auto text-center">
      <br>
      <p class="cartTitleMobile">Ang Mandirigmang Siopao</p>
      </div>

       <div class="col-2 mx-auto">
      <br>
      <h1 class="cartTitleMobile"><br>P300.00</h1>
      </div>
      
      <div class="col-2 ">
      <br>
      <h4><br><i class="fas fa-times"></i></h4>
      
      </div>
      
    </div>   <!-- end row    -->
    
    <div class="row mx-auto">
    
    <div class="col-3 class="mx-auto">
    <br>
    <img " src="assets/images/t-cactus.jpg" alt="">
    </div>

    <div class="col-4 mx-auto text-center">
    <br>
    <p class="cartTitleMobile">The Cactus Who Loves to Hug</p>
    </div>

     <div class="col-2 mx-auto">
    <br>
    <h1 class="cartTitleMobile"><br>P300.00</h1>
    </div>
    
    <div class="col-2 ">
    <br>
    <h4><br><i class="fas fa-times"></i></h4>
    
    </div>
    
    
  </div>   <!-- end row    -->
  
  <div class="row mx-auto">
    
    <div class="col-3 class="mx-auto">
    <br>
    <img " src="assets/images/t-sunflower.jpg" alt="">
    </div>

    <div class="col-4 mx-auto text-center">
    <br>
    <p class="cartTitleMobile">Bakit Malungkot si Sunflower?</p>
    </div>

     <div class="col-2 mx-auto">
    <br>
    <h1 class="cartTitleMobile"><br>P300.00</h1>
    </div>
   
    <div class="col-2 ">
    
    <h4><br><br><i class="fas fa-times"></i></h4>
    
    </div>
    
    
  </div>   <!-- end row    -->


    </div> <!--  end mobile -->
    <hr>
    <div class="row ">
      <div class="col-4">
    <h4>TOTAL</h4>
    </div>
    <div class="col-5 offset-3">
    <h4 class="text-center">P900.00</h4>
   
    </div>
    </div>
    <hr>
    <br>
<a href="checkout.php" class="btn btn-block btn-lg btn-warning checkoutButtonMobile">CHECKOUT</a>
    <br>


</div>

	</div> <!-- end container -->



















<div class="row d-none d-lg-block ">
<?php 
 echo "<br>";
include "partials/footer.php"; ?>
</div>


</body>
</html>

