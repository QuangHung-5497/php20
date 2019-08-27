<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Detail</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <table class="table table-dark">
  <thead>
    <tr>
      <td scope="col">ID</td>
      <td><?=$post['id']?></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="col">Title</td>
      <td><?=$post['title']?></td>
    </tr>
    <tr>
      <td scope="col">Description</td>
      <td><?=$post['description']?></td>
    </tr>
    <tr>
      <td scope="col">Thumbnail</td>
      <td><img src="images/<?=$post['thumbnail']?>" width="100px" height="100px"></td>
    </tr>
    <tr>
      <td scope="col">Content</td>
      <td><?=$post['content']?></td>
    </tr>
    <tr>
      <td scope="col">User_id</td>
      <td><?=$post['user_id']?></td>
    </tr>
    <tr>
      <td scope="col">Slug</td>
      <td><?=$post['slug']?></td>
    </tr>
    <tr>
      <td scope="col">Category_id</td>
      <td><?=$post['category_id']?></td>
    </tr>
    <tr>
      <td scope="col">View_count</td>
      <td><?=$post['view_count']?></td>
    </tr>
    <tr>
      <td scope="col">Created_at</td>
      <td><?=$post['created_at']?></td>
    </tr>
    
  </tbody>
</table>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>