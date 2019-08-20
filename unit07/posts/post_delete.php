<?php 
	require_once('connect.php');
	$id = $_GET['id'];
	$query = "DELETE FROM posts WHERE id=".$id;
	$result = $conn->query($query);
	header('Location: posts.php');
 ?>