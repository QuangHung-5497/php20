<?php 
session_start();
print_r($_SESSION);
	if(isset($_SESSION['login']) && $_SESSION['login']==true){
		echo "Admin pages";
	}
	else{
		header("Location: form.php");
	}
 ?>
 <a href="logout.php">logout</a>