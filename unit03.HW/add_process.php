<?php 
	session_start();

	$_SESSION['students']['sv'.$_POST['maSV']] = array(
		'maSV' =>$_POST['maSV'] ,
		'tenSV'=>$_POST['tenSV'],
		'sdt' =>$_POST['sdt'] ,
		'email' =>$_POST['email'] ,
		'gt' =>$_POST['gt'] ,
		'diaChi' =>$_POST['diaChi'] 
		 );
	header("Location: list.php");
	?>
