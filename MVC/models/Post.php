<?php 
	require_once ('Connection.php');
	class Post{
		function All(){
			$connection_obj = new Connection();
			$query = "SELECT * FROM posts";
			$result = $connection_obj->conn->query($query);
			$posts = array();
			while ($row = $result->fetch_assoc()) {
				$posts[] = $row;
			}
			return $posts;
		}
		function find($slug){
			$connection_obj = new Connection();
			$query = "SELECT * FROM posts WHERE slug = '".$slug."'";
			$post = $connection_obj->conn->query($query)->fetch_assoc();
			return $post;
		}
	}
 ?>