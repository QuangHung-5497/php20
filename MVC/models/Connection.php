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
	
 ?>