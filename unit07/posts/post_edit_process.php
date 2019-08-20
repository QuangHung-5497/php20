<?php 	
	require_once("connect.php");
	$data = $_POST;
        $target_dir = "images/";  

        $target_file = $target_dir . basename($_FILES["thumbnail"]["name"]); 
        
        if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) { 
            $file_name = basename($_FILES["thumbnail"]["name"]);
            $query = "UPDATE posts SET title = '".$data['title']."', slug = '".$data['slug']."', thumbnail = '".$file_name."', description = '".$data['description']."',content = '".$data['content']."',category_id = '".$data['category_id']."' WHERE id =".$data['id'];
            
        } else {  
            $query = "UPDATE posts SET title = '".$data['title']."', slug = '".$data['slug']."', description = '".$data['description']."',content = '".$data['content']."',category_id = '".$data['category_id']."' WHERE id =".$data['id'];
        }
        $status = $conn->query($query);
            echo $query;
            if ($status == true) {
                
                header('Location: posts.php');
            }else{
                echo "Error";
            }
    

 ?>