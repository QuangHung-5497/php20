<?php 
	
  session_start();  
  $product_cart = $_SESSION['cart'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">------Products in cart--------</div>
	<label><button><a href="index.php">Back</a></button></label>
	<table class="table container">
  <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Quantyti</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($product_cart as $code => $product) { ?>
      <tr>
        <td><?=$code?></td>
        <td><?=$product['name']?></td>
        <td><?=$product['quantity']?></td>
        <td><?=number_format($product['price']*$product['quantity'])?></td>
        <td><label><button><a href="remove.php?code=<?=$code?>">Remove</a></button></label></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>