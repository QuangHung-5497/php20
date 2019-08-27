<?php 
	require_once('Connection.php');
	class User{
		function list1(){
			$controller_obj = new Connection();
			$query = "SELECT * FROM users";
			$result = $controller_obj->conn->query($query);
			$users = array();
			while ($row = $result->fetch_assoc()) {
				$users[] = $row;
			}
			return $users;
		}
		function find($id){
			$controller_obj = new Connection();
			$query = "SELECT * FROM users WHERE id = ".$id;
			$user = $controller_obj->conn->query($query)->fetch_assoc();
			return $user;
		}
	}
 ?>