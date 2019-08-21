<?php 
		require_once 'connect.php';
		
		$data = $_POST;
        $target_dir = "images/";  

        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); 
        
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { 
            $file_name = basename($_FILES["thumbnail"]["name"]);
            if ($data['parent_id'] ==0) {
            	$query = "UPDATE categories SET (name = '".$data['name']."' , slug = '".$data['slug']."' , thumbnail = '".$file_name."' , description = '".$data['description']."' )";
            }else{
            	$query = "UPDATE categories SET (name = '".$data['name']."' , slug = '".$data['slug']."' , thumbnail = '".$file_name."' , description = '".$data['description']."', parent_id = '".$data['parent_id']."' )";
        	}
            
        } else {  
            if ($data['parent_id'] ==0) {
            	$query = "UPDATE categories SET (name = '".$data['name']."' , slug = '".$data['slug']."' , description = '".$data['description']."' )";
            }else{
            	$query = "UPDATE categories SET (name = '".$data['name']."' , slug = '".$data['slug']."' , description = '".$data['description']."', parent_id = ".$data['parent_id']." )";
        	}
        }
        	$status = $conn->query($query);
        	echo "$query";
			if ($status == true) {
				
				header('Location: categories.php');
			}else{
				echo "Error";
			}
 ?>