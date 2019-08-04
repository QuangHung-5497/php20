<?php 
	session_start();
	require_once('thongtin.php');
	if (isset($_SESSION['mua'][$_GET['key']]['number'])) {
		# code...
		$_SESSION['mua'][$_GET['key']]['number']++;
	}
	header('location: mua.php');
 ?>