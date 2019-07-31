<?php 
	session_start();
	$_SESSION['sv'] = array(
		'Mã' =>$_POST['maSV'] ,
		'Tên'=>$_POST['tenSV'] );
	header("Location: list.php");
 ?>