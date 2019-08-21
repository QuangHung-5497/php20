<?php 
    require_once 'connect.php';
    $query = "SELECT * FROM categories WHERE parent_id is NULL";
    $result = $conn->query($query);
    $categories = array();
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
    $id = $_GET['id'];
    $query2 = "SELECT * FROM categories where id = ".$id;
    $cate = $conn->query($query2)->fetch_assoc();
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DevMind - Education And Technology Group</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <h3 align="center">DevMind - Education And Technology Group</h3>
    <h3 align="center">Edit Cantegory</h3>
    <hr>
        <form action="category_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" value="<?=$cate['name']?>" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Parent_ID</label>
                
                <select class="form-control" id="" placeholder="" name="parent_id">
                    <option value="0">Danh mục cha</option>
                    <?php foreach ($categories as $category) { ?>
                    
                    <option value="<?=$category['id']?>"><?=$category['name']?></option>
                        
                    <?php } ?>
                </select>   
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <img src="images/<?=$cate['thumbnail']?>" width="100px" height="100px">
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" value="<?=$cate['slug']?>" placeholder="" name="slug">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" value="<?=$cate['description']?>" placeholder="" name="description">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>