<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

</head>
<body class="container-fluid bg-white">
	

<?php 
include "partials/Zheader.php"; ?>

<h1 id="shop" > &nbsp;  Profile</h1>
<hr>
<br><br><br>
<div class="container-fluid">
<?php 
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
echo "<div class ='row'>";
while($row = mysqli_fetch_assoc($result)){

	echo "<div class = 'col-lg-4 col-md-6 col-12'>".
         
         "<h3 class = 'bookTitle'>".$row['fullname']."</h3>"."<p class = 'bookDesc'>".$row['email']."</p>"."<p class = 'bookDesc'>".$row['address']."</p>".

         "<br><br><br>".
	
        "</div>";
        
}

 "</div>";
?>


<br><br><br><br><br>


<?php 
echo "<br><br><br><br><br><br>";
include "partials/Zfooter.php"; ?>



<script type="text/javascript" src = "assets/js/function.js"></script>
<script
 src="https://code.jquery.com/jquery-3.3.1.js"
 integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</body>
</html>


</body>
</html>