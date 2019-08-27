<?php 
	/**
	 * 
	 */
	class PostController{
		function list1(){
			require_once('models/Post.php');
			$model_obj = new Post();
			$posts = $model_obj->All();
			require_once('views/post/list.php');
		}
		function detail(){
			require_once('models/Post.php');
			$slug = $_GET['slug'];
			$model_obj = new Post();
			$post = $model_obj->find($slug);
			require_once('views/post/detail.php');
		}
	}
	
 ?>