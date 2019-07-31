<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style type="text/css">
    body{
      margin-top: 50px;
    }
    form{
      background-color: #0B2F3A;
      padding-top: 10px;
      border-radius: 20px;
    }
    label{
      color: white;
    }
    .btn{
      background-color: orange;
      border-radius: 10px;
    }
    span{
      color: white;
    }
</style>
</head>
<body>

  <form class="container" method="POST" action="add_process.php">
    <div class="form-group">
      <label for="exampleInputEmail1">Mã sinh viên</label>
      <input type="text" class="form-control" name="maSV" placeholder="Mã sinh viên">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Họ và tên</label>
      <input type="text" class="form-control" name="tenSV" placeholder="Họ và tên">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Số điện thoại</label>
      <input type="text" class="form-control" name="sdt" placeholder="Số điện thoại">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput">Email</label>
      <input type="text" class="form-control" id="formGroupExampleInput" name="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Giới tính</label><br>
      <label><input class="gioitinh"  type="radio" name="gt" value="Nam"><span>Nam</span></label> &nbsp;
      <label><input class="gioitinh" type="radio" name="gt" value="Nữ"><span>Nữ</span></label> &nbsp;
      <label><input class="gioitinh" type="radio" name="gt" value="Khác"><span>Khác</span></label> &nbsp;
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Địa chỉ</label>
      <input type="text" class="form-control" name="diaChi" placeholder="Địa chỉ">
    </div>
    
    
    <button type="submit" class="btn btn-primary" name="save">Lưu sinh viên</button>
  </form>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>