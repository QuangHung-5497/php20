<?php 
	$mod = isset($_GET['mod'])?$_GET['mod']:'blog';
	$act = isset($_GET['act'])?$_GET['act']:'index';
	switch ($mod) {
		case 'category':
			require_once('controllers/CategoryController.php');
			$controller_obj = new CategoryController();
			switch ($act) {
				case 'list1':
					$controller_obj->list1();
				case 'add':
					$controller_obj->add();
					break;
				case 'edit':
					$controller_obj->edit();
					break;
				case 'add-process':
					echo "Add_process form";
					break;
				case 'edit-process':
					echo "Edit_process";
					break;
				case 'detail':
					$controller_obj->detail();
				
				default:
					# code...
					break;
			}
			break;
		case 'post':
			require_once('controllers/PostController.php');
			$controller_obj = new PostController();
			switch ($act) {
				case 'list1':
					$controller_obj->list1();
					break;
				case 'detail':
					$controller_obj->detail();
					break;
			}
			break;
		case 'user':
			require_once('controllers/UserController.php');
			$controller_obj = new UserController();
			switch ($act) {
				case 'list1':
					$controller_obj->list1();
					break;
				case 'detail':
					$controller_obj->detail();
					break;
				
				default:
					# code...
					break;
			}
			break;
		default:
			echo "Model -404";
			break;
	}
 ?>