<?php 
	class Nguoi{
		var $ten;
		var $tuoi;
		var $gioi_tinh;
		var $que;
		function an(){
			echo "Phuong thuc an cua lop nguoi";
		}

		function inTT(){
			echo "<br> Ten: ".$this->ten;
			echo "<br> Tuoi: ".$this->tuoi;
			echo "<br> Gioi tinh: ".$this->gioi_tinh;
			echo "<br> Que: ".$this->que;
			echo "<br>";
		}
		function __construct(){
			echo "Ahihihihihihihihihihih";
		}
	}
	class SinhVien extends Nguoi{

	}
	$hung = new SinhVien();
	$hung->ten = "Nguyen Quang Hung";
	$hung->tuoi = 22;
	$hung->gioi_tinh = "Nam";
	$hung->que = "Ha Tay";
	$hung->inTT();
	$hung->an();
 ?>