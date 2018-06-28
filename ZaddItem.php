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
$user = ""; 
include "partials/Zheader.php"; 
?>
<br>

	<form action="partials/ZprocessNewItem.php" method="POST" enctype="multipart/form-data">
        Item Name: <input type="text" name="itemName" class='form-control'>
        Category: <input type="number" name="category" class='form-control'>
        Price: <input type="number" name="price" class='form-control'>
        Description: <input type="text" name="description" class='form-control'>
        Image: <input type="file" name="gameImg" class='form-control'><br>
        <button type="submit">Save New Item</button>
    </form>

<script type="text/javascript" src = "assets/js/function.js"></script>
<script
 src="https://code.jquery.com/jquery-3.3.1.js"
 integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
</body>
</html>