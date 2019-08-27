<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- Users ---</h3>
        <a href="category_add.php" class="btn btn-primary">Add New Users</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Avata</th>
                <th>Action</th>
            </thead>
            <?php 
                    foreach ($users as $item) { 
            ?>
            <tr>
                
                <td><?=$item['id']?></td>
                <td><?=$item['name']?></td>
                <td><?=$item['email']?></td>
                <td><?=$item['password']?></td>
                <td>
                    <img src="images/<?=$item['thumbnail']?>" width="100px" height="100px">
                </td>
                
                <td>
                    <a href="index.php?mod=user&act=detail&id=<?=$item['id']?>" class="btn btn-primary">Detail</a>
                    <a href="categor_edit.php?id=<?=$item['id']?>" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>