<?php 
	require_once("conection.php");
	$id = $_GET['id'];
	$query = "SELECT * FROM categories where id = ".$id;
	$result = $conn->query($query);
	$category = $result->fetch_assoc();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<h3>ID: <?=$category['id']?></h3><br>
 	<h3>Name: <?=$category['name']?></h3><br>
 	<h3>Parent_ID: <?=$category['parent_id']?></h3><br>
 	<h3>Thumbnail: <?=$category['thumbnail']?></h3><br>
 	<h3>Slug: <?=$category['slug']?></h3><br>
 	<h3>Description: <?=$category['description']?></h3><br>
 	<h3>Created_at: <?=$category['created_at']?></h3><br>
 	<hr>
 	<button><a href="categories.php">Back</a></button>
 </body>
 </html>