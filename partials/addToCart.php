<?php 
	session_start();
	$quantity = $_GET['quantity'];
	$id = $_GET['id'];
	$_SESSION['cart'][$id] = $quantity;
	//creates a session variable with the name of cart and key of quantity.
	

	$total_quantity = array_sum($_SESSION['cart']);
	echo $total_quantity;


 ?>