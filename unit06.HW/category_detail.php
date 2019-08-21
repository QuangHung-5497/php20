<?php 
  require_once 'connect.php';
  $id = $_GET['id'];
  $query = "SELECT * FROM categories WHERE id =".$id;
  $status = $conn->query($query);
  $catogry = $status->fetch_assoc();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Detail</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <table class="table table-dark container">
  <thead>
    <tr>
      <td scope="col">ID</td>
      <td><?=$catogry['id']?></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="col">Name</td>
      <td><?=$catogry['name']?></td>
    </tr>
    <tr>
      <td scope="col">Parent_id</td>
      <td><?=$catogry['parent_id']?></td>
    </tr>
    <tr>
      <td scope="col">Thumbnail</td>
      <td><img src="images/<?=$catogry['thumbnail']?>" width="100px" height="100px"></td>
    </tr>
    <tr>
      <td scope="col">Slug</td>
      <td><?=$catogry['slug']?></td>
    </tr>
    <tr>
      <td scope="col">Description</td>
      <td><?=$catogry['description']?></td>
    </tr>
      <td scope="col">Created_at</td>
      <td><?=$catogry['created_at']?></td>
    </tr>
    
  </tbody>
</table>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>