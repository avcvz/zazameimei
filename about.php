<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About Zara</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/zari.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

</head>
<body class="container-fluid" id="dirty">
 <div id="dirty" >


<?php 
$user = ""; 
include "partials/header.php"; 
?>





<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav> -->
                <!-- TESTING FOR TOGGLER NAV BAR        -->
<!-- <nav class="navbar navbar-expand-lg ">
    <div class="row ">
<a class="navbar-brand col-12 text-center" href="Zindex.php">
                                <h1 id="logo">zazameimei</h1>
                            </a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            
                <div class=" collapse navbar-collapse" id="navbarNav">
                    <div class="col-12 navigation">
                        <ul class="col-12  navbar-nav navigation">
                            <li class="nav-item col-3">
                            <a class="nav-link text-light text-center" href="Zindex.php">home</a>
                            </li>
                            
                            <li class="nav-item  col-3">
                            <a class="nav-link text-light text-center" href="#">journal</a>
                            </li>
                            
                            <li class="nav-item  col-3">
                            <a class="nav-link text-light text-center" href="Zabout.php">about</a>
                            </li>
                            <li class="nav-item  col-3">
                                    <a class="nav-link text-light text-center" href="Zshop.php">shop</a>
                            </li>
                        </ul> 
                        </div>          

                        
                    </div> 

                    </div> 

                </nav> -->





	
   
            <div class="row">

                
                
                <div class="d-none d-lg-block col-lg-6 order-lg-1 order-2 col-12 img-fluid">
                    <img src="assets/images/zazameimei2.jpg" class="rounded img-fluid border" alt="" height="100%" width="100%" ></img>  
                </div>
                 
                
                <div class="col-lg-6 order-1 col-12 ">
                

                    <h1 class="zquotes zquotesBG text-center rounded"> "Let your wild heart dance with the sweet tones of patience."</h1>

                    <img src="assets/images/zazameimei2.jpg" class="rounded img-fluid mx-auto d-lg-none" alt="" height="100%" width="100%" ></img>  
                    
                    <p class="zBlurb ">
                    <br>
                    Hello! I'm Zara Mae Estareja. I finished BS Development Communication and earned MS units in the same field at the University of the Philippines Los Banos. I copy-edit & layout scholary publications. I also write for print and web. During my free time i take photos,watercolor, and Netflix and Chill. Now, I'm slowly living my childhood dream to become a children's book writer and illustrator.
                  

                    
                    </p>
    

                </div>
               
                
        </div>
        <div class="col-12 ">
        <br><br>
                   <h1 class="myBooks">My Books</h1>
                    <p class="zBlurb ">
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto dolorum fuga tenetur exercitationem temporibus placeat quibusdam ipsa labore aut eaque! Quasi incidunt rerum autem, quibusdam at commodi fugit ipsum corrupti. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit adipisci illo assumenda sit quaerat eligendi repellendus quibusdam alias asperiores, sequi repudiandae magnam maxime aperiam, odit quos illum autem earum Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    <br><br><br>
            
    </div>
    <?php 
$sql = "SELECT * FROM items";
$result = mysqli_query($conn, $sql);
echo "<div class ='row '>";
while($row = mysqli_fetch_assoc($result)){

	echo "<div class = 'col-lg-4 col-md-6 col-12'>".
         "<img class = 'img-fluid rounded' src='".$row['img_path']."'>"."<br><br>".
         "<h3 class = 'bookTitle'>".$row['name']."</h3>"."<p class = 'bookDesc'>".$row['description']."</p>".
        "<br><br><br>".
	
        "</div>";
        
}

 "</div>";
?>
</div>
    </div>
    
    <br><br>

<?php 
include "partials/footer.php"; ?>


<script type="text/javascript" src = "assets/js/function.js"></script>
<script
 src="https://code.jquery.com/jquery-3.3.1.js"
 integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</body>
</html>