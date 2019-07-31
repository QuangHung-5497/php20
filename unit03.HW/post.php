<?php 
	if(isset($_POST['save'])){
		echo "Mã sinh viên: ".$_POST['maSV'];
		echo "<br>Họ và tên: ".$_POST['tenSV'];
		echo "<br>Số điện thoại: ".$_POST['sdt'];
		echo "<br>Email: ".$_POST['email'];
		echo "<br>Địa chỉ: ".$_POST['diaChi'];
		if($_POST['gt']=='Nam'){
			echo "<br>Giới tính: Nam";
		}else if ($_POST['gt']=='Nữ') {
			echo "<br>Giới tính: Nữ";
		}else{
			echo "<br>Giới tính: Khác";
		}

	}
 ?>