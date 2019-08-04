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

		.btn{
			margin-left: 111px;
			margin-bottom: 20px;
			margin-top: 20px;
		}
		.delete{
			background-color: red;
		}
		.detail{
			background-color: green;
		}

	</style>
</head>


<body>

	<a href="add.php"><button type="submit" class="btn btn-primary" name="them">Thêm mới</button></a>
	<table class="table container">
  <thead>
    <tr>
      
      <th scope="col">Mã sinh viên</th>
      <th scope="col">Họ tên</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php foreach ($_SESSION['students'] as $key => $value): ?>
  		<tr>      
			<td><?=$_SESSION['students'][$key]['maSV']?></td>
			<td><?=$_SESSION['students'][$key]['tenSV']?></td>
			<td>
			    <a href="detail.php?maSV=<?=$_SESSION['students'][$key]['maSV']?>"><button class="detail">Detail</button></a>

				<a href="delete.php?maSV=<?=$_SESSION['students'][$key]['maSV']?>"><button class="delete">Delete</button></a>
			</td>
    	</tr>
  	<?php endforeach ?>
     
	
  </tbody>
</table>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>