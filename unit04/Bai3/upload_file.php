<?php 
	if (isset($_POST['submit'])) {
		require_once('upload_process.php');
		$uploads = file_upload("uploads","ANH_SP",500000,array('jpg', 'png'));
        if(gettype($uploads) == "array"){
            print_r($uploads); // Trả về mảng lỗi nếu ko upload được
        }else{
            echo "File name is: " . $uploads; // Trả về tên file nếu upload thành công
        }
	}
	session_start();
	$_SESSION['images'][] = $uploads;
 ?>