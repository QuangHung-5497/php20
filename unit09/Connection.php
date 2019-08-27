<?php 
	class Connection{
		var $conn;
		function __construct(){
			$severname = "localhost";
			$user = "root";
			$pass = "";
			$dbname = "devmindphp20_blog";
			$this->conn = new mysqli($severname, $user, $pass, $dbname);
			$this->conn->set_charset("utf8");
			if ($this->conn->connect_error) {
				die("Fail ".$this->conn->connect_error);
			}
		}
	}
	$connection_obj = new Connection();

	$query = "SELECT * FROM categories";
	$result = $connection_obj->conn->query($query);
	$category = array();
	while ($row = $result->fetch_assoc()) {
		$category[] = $row;
	}
	print_r($category);
 ?>