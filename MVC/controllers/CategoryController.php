<?php 
	class CategoryController{
		function __construct(){
			// echo "Controller: category";
		}
		function add(){
			
		}
		function edit(){
			echo "Method: Edit";
		}
		function list1(){
			require_once('models/Category.php');
			$model_obj = new Category();
			$categories = $model_obj->All();
			require_once('views/category/list.php');
		}
		function detail(){
			require_once('models/Category.php');
			$slug = $_GET['slug'];
			$model_obj = new Category();
			$category = $model_obj->find($slug);
			require_once('views/category/detail.php');
		}
	}
 ?>