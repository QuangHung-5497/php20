<?php 	
	require_once("connect.php");
	$data = $_POST;
        $target_dir = "images/";  

        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); 
        
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { 
            $file_name = basename($_FILES["thumbnail"]["name"]);
            $query = "INSERT INTO posts (title, slug, thumbnail, description,content, category_id) VALUES ('".$data['title']."','".$data['slug']."','".$file_name."','".$data['description']."', '".$data['content']."', '".$data['category_id']."')";
            $status = $conn->query($query);
			if ($status == true) {
				
				header('Location: posts.php');
			}else{
				echo "Error";
			}
        } else {  
            echo "Sorry, there was an error uploading your file.";
        }
    

 ?>