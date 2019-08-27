<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Category</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- Category ---</h3>
        <a href="index.php?mod=category&act=add" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
            <?php 
                    foreach ($categories as $item) { 
            ?>
            <tr>
                
                <td><?=$item['id']?></td>
                <td><?=$item['name']?></td>
                <td>
                    <img src="images/<?=$item['thumbnail']?>" width="100px" height="100px">
                </td>
                <td><?=$item['description']?></td>
                <td>
                    <a href="index.php?mod=category&act=detail&slug=<?=$item['slug']?>" class="btn btn-primary">Detail</a>
                    <a href="categor_edit.php?id=<?=$item['id']?>" class="btn btn-success">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>