<?php 	
	$data = $_POST;
	require_once("conection.php");
	$query = "INSERT INTO categories (`name`, `description`) VALUES ('".$data['name']."','".$data['description']."')";
	$status = $conn->query($query);
	if ($status) {
		# code...
		header("Location: categories.php");
	}

 ?>