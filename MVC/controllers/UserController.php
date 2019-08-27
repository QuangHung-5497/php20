<?php 
	class UserController{
		function list1(){
			require_once('models/User.php');
			$controller_obj = new User();
			$users = $controller_obj->list1();
			require_once('views/user/list.php');
		}
		function detail(){
			require_once('models/User.php');
			$id = $_GET['id'];
			$controller_obj = new User();
			$user = $controller_obj->find($id);
			require_once ('views/user/detail.php');
		}
	}
 ?>