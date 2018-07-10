<?php 
session_start();
?>

<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>zazameimei draws!</title>
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

</head>
<body class="container-fluid " id="dirty">


<?php 
$user = ""; 
include "partials/header.php"; 
?>
<br>


    


      <!-- END TESTING -->

      <div class="row mb-2">

        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Illustration</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Mandirigmang Siopao</a>
              </h3>
              <div class="mb-1 text-muted">June 21</div>
              <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta enim laboriosam voluptatibus, cumque similique impedit iure sit repellat.</p>
              <a href="#">Continue reading</a>
            </div>
            <img src="assets/images/cactus.jpg"  height="30%" width="30%" class=" card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>

        <div class="col-md-6">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Illustration</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Boy Sunflower</a>
              </h3>
              <div class="mb-1 text-muted">July 12</div>
              <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta enim laboriosam voluptatibus, cumque similique impedit iure sit repellat.</p>
              <a href="#">Continue reading</a>
            </div>
            <img src="assets/images/cactus.jpg"  height="30%" width="30%" class=" card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
          </div>
        </div>
</div> <!-- end row -->





        <br><br><br><br><br>

<?php 
include "partials/footer.php"; ?>

</div>         <!--    end container -->


<script type="text/javascript" src = "assets/js/function.js"></script>
<script
 src="https://code.jquery.com/jquery-3.3.1.js"
 integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</body>
</html>