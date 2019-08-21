<?php 
	require_once("connect.php");
	$data = $_POST;
        $target_dir = "images/";  

        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); 
        
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { 
            $file_name = basename($_FILES["thumbnail"]["name"]);
            if ($data['parent_id'] ==0) {
            	$query = "INSERT INTO categories (name, slug, thumbnail, description) VALUES ('".$data['title']."','".$data['slug']."','".$file_name."','".$data['description']."')";
            }else{
            	$query = "INSERT INTO categories (name, slug, thumbnail, description, parent_id) VALUES ('".$data['title']."','".$data['slug']."','".$file_name."','".$data['description']."', '".$data['parent_id']."')";
        	}
            $status = $conn->query($query);
            echo "$query";
			if ($status == true) {
				
				header('Location: categories.php');
			}else{
				echo "Error";
			}
        } else {  
            echo "Sorry, there was an error uploading your file.";
        }
 ?>