
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<h2 class="container">Upload Docments</h2>
	<form class="container" method="post" enctype="multipart/form-data">
		<label>Tên tài liệu</label>
		<input type="text" class="form-control" name="toan" id="toan">
		<br>
		<label>Image</label>
		<input type="file" class="form-control" name="upload_file">
		<br>
		<input type="submit" value="Upload Document" name="submit">
	</form>
	<?php 
		if (isset($_POST['submit']) && isset($FILES['upload_file'])) {
			if ($FILES['upload_file']['error']>0) {
				# code...
				echo "Lỗi r";
			}else{
				move_uploaded_file($_FILES['upload_file']['tmp_name'], 'uploads/Toán_rời_rạc.txt');
				echo "Thành công <br>";
			}
		}
	 ?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>