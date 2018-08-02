<?php 
session_start();
?>

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Checkout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/zari.png">
    <link href="https://fonts.googleapis.com/css?family=Cardo|Cutive|Kurale|Libre+Baskerville|Suranna" rel="stylesheet">
    <meta property="og:title" content="zazameimei draws!"/>
    <meta property="og:image" content="https://zazameimei.000webhostapp.com/assets/images/zazameimei2.jpg" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:url" content="https://zazameimei.000webhostapp.com/" />
    <meta property="og:description" content="Hello! I'm Zara Mae Estareja. I finished BS Development Communication and earned MS units in the same field at the University of the Philippines Los Banos. I copy-edit & layout scholary publications. I also write for print and web. During my free time i take photos,watercolor, and Netflix and Chill. Now, I'm slowly living my childhood dream to become a children's book writer and illustrator." />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

</head>
<body class="bg-white" id="dirty">


<?php 
$user = ""; 
?>
<br>

    <div class="container">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets/images/zari.png" alt="" width="82" height="82">
        <h2 >CHECKOUT</h2>
        <!-- <p class="lead para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat eveniet minus illo accusantium, vitae voluptates, nam natus distinctio sint, totam dicta est commodi provident.</p> -->
      </div>

    <br>
        

        <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>


            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" >
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address"  required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>



            <div class="row">

              <div class="col-md-4 mb-3">
                <label for="state">City</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <option>Makati</option>
                  <option>Marikina</option>
                  <option>Caloocan</option>
                  <option>Manila</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>
              
            </div>
      
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
            <div class="custom-control custom-radio">
                <input id="cebuana" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="cebuana">Palawan/Cebuana/LBC Padala</label>
              </div>
            <div class="custom-control custom-radio">
                <input id="cod" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="cod">Cash on Delivery</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
          
            
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <a href="thankyousenpai.php">
            <button class="btn btn-primary btn-lg btn-block"  type="button">Complete Purchase</button> </a>
            <hr>
            <h6><i class="text-dark fas fa-shopping-cart"></i>&nbsp;<a href="cart.php"> CART REVIEW</a> </h6>
          </form>

</div>

</div>         <!--   container for footer -->
        <br><br><br><br><br>





<script type="text/javascript" src = "assets/js/function.js"></script>
<script
 src="https://code.jquery.com/jquery-3.3.1.js"
 integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</body>
</html>