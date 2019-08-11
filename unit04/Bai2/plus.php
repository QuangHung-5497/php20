<?php 
	session_start();
	$code = $_GET['code'];
	$_SESSION['cart'][$code]['quantity']++;
	header("Location: viewcart.php");
 ?>