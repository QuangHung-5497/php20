<?php 
	session_start();
	unset($_SESSION['students']['sv'.$_GET['maSV']]);
	header('Location: list.php');
	
 ?>