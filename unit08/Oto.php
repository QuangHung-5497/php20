<?php 
	class Oto
{
    var $ten;
    var $hang_xe;
    var $mau;
    var $so_cho;
    function chay(){
		echo "Day la phuong thuc chay cua oto";
	}
	function inTT(){
		echo "<br> Thong tin xe ";
		echo "<br>--------------";
		echo "<br> ten: ".$this->ten;
		echo "<br> Hang: ".$this->hang_xe;
		echo "<br> mau: ".$this->mau;
		echo "<br> so cho: ".$this->so_cho;
		echo "<br>-------------";
		echo "<br>";
	}
}

	$lux = new Oto();
	$lux->ten = "ahihi";
	$lux->hang_xe = "haha";
	$lux->mau = "Den";
	$lux->so_cho = "5";
	$lux->inTT();
	$lux->chay();
	$mad6 = new Oto();
	$mad6->ten = "ahahaa";
	$mad6->hang_xe = "hihi";
	$mad6->mau ="trang";
	$mad6->so_cho = "10";
	$mad6->inTT();
 ?>