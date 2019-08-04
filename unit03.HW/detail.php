<?php 
	session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Student</title>
 </head>
 <body>
 	<h1>thông tin sinh viên</h1>
 	<ul>
 		<li>
 			Họ và tên: <b><?=$_SESSION['students']['sv'.$_GET['maSV']]['tenSV']?></b>
 		</li>
 		<li>
 			Mã sinh viên: <b><?=$_SESSION['students']['sv'.$_GET['maSV']]['maSV']?></b>
 		</li>
 		<li>
 			Số điện thoại: <b><?=$_SESSION['students']['sv'.$_GET['maSV']]['sdt']?></b>
 		</li>
 		<li>
 			Giới tính: <b><?=$_SESSION['students']['sv'.$_GET['maSV']]['gt']?></b>

 		</li>
 		<li>
 			Email: <b><?=$_SESSION['students']['sv'.$_GET['maSV']]['email']?></b>
 		</li>
 	</ul>

 </body>
 </html>