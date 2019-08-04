<?php 
	session_start();
	require ('thongtin.php');
	//$_SESSION['mua'] = $thongtin[$key];
	if(isset($_SESSION['mua'][$_GET['key']])){
		$_SESSION['mua'][$_GET['key']]['number']++;
	}else{
		$_SESSION['mua'][$_GET['key']] = array($_GET['key']=>$thongtin[$_GET['key']], 'number'=>1);
	}
	setcookie('msg',"Thêm thành công", time()+2);
	header('location: giohang.php');
 ?>