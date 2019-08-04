<?php 	
	require_once('thongtin.php');
	session_start();
	if ($_SESSION['mua'][$_GET['key']]['number']==1) {
		# code...
		unset($_SESSION['mua'][$_GET['key']]);
	}
	else{
		$_SESSION['mua'][$_GET['key']]['number']--;
	}
	header('location: mua.php');
 ?>