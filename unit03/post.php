<?php 
	session_start();
	if(isset($_POST['user'])){
		if($_POST['user'] == "admin" && $_POST['pwd'] == "123"){
			echo "<pre>";
				echo print_r($_POST);
			echo "</pre>";
			$_SESSION['login'] = true;
			
		}else{
			$_SESSION['login']=false;
			setcookie('mess', 'k thanh cong', time() + 5);
			header("Location: form.php");
			
		}
		header("Location: admin.php");
	}
	else{
		$_SESSION['login'] = fales;
		header("Location: form.php");
	}
 ?>