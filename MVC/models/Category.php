<?php 
	require_once ('Connection.php');
	class Category{
		function All(){
			$connection_obj = new Connection();
			$query = "SELECT * FROM categories";
			$result = $connection_obj->conn->query($query);
			$category = array();
			while ($row = $result->fetch_assoc()) {
				$category[] = $row;
			}
			return $category;
		}
		function find($slug){
			$connection_obj = new Connection();
			$query = "SELECT * FROM categories WHERE slug = '".$slug."'";
			$category = $connection_obj->conn->query($query)->fetch_assoc();
			return $category;

		}
		
	}
 ?>