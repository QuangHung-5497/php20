<?php 
	session_start();
	$code = $_GET['code'];
	if ($_SESSION['cart'][$code]['quantity']==1) {
		unset($_SESSION['cart'][$code]);
	}elseif ($_SESSION['cart'][$code]['quantity']>1) {
		$_SESSION['cart'][$code]['quantity']--;
	}
	header("Location: viewcart.php");
 ?>