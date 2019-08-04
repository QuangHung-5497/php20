<?php 
  session_start();

  require_once('thongtin.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  
  <table class="table container">
  <thead>
    <tr>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Giá</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Thành tiền</th>
    </tr>
  </thead>
  <tbody>
    <?php $tong = 0; ?>
    <?php foreach ($_SESSION['mua'] as $key => $value):
        $tien = $_SESSION['mua'][$key][$key]['gia']*$_SESSION['mua'][$key]['number'];
        $tong+=$tien;
              
       ?>
      <tr>      
      <td><?=$_SESSION['mua'][$key][$key]['name']?></td>
      <td><?=$_SESSION['mua'][$key][$key]['gia']?></td>
      <td><?=$_SESSION['mua'][$key]['number']?>
        <label><button><a href="tang.php?key=<?=$key?>">-</a></button></label>
        <label><button><a href="giam.php?key=<?=$key?>">+</a></button></label>
      </td>
      <td><?=$tien?></td>
      </tr>
    <?php endforeach ?>
      <tr>
        <td><b>Tổng tiền</b></td>
        <td></td>
        <td></td>
        <td><b><?=$tong?></b></td>
      </tr>
  </tbody>
</table>
<label><button><a href="giohang.php">Tiếp tục mua hàng</a></button></label>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>