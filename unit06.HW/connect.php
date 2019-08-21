<?php 
	$severname = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "devmindphp20_blog";
	$conn = new mysqli($severname, $user, $pass, $dbname);
	$conn->set_charset("utf8");
	if ($conn->connect_error) {
		die("Fail ".$conn->connect_error);
	}
 ?>