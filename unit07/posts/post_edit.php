<?php 
	require_once('connect.php');
	$query = "SELECT * FROM posts";
    $result = $conn->query($query);
    $posts = array();
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
	$id = $_GET['id'];
	$query2 = "SELECT * FROM posts WHERE id = ".$id;
	$result2 = $conn->query($query2);
	$post = $result2->fetch_assoc();
	
		$query3 = "SELECT * FROM categories";
	    $result3 = $conn->query($query3);
	    $categories = array();
	    while($row = $result3->fetch_assoc()) {
	        # code...
	        $categories[] = $row;
	    }
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
    <h3 align="center">Add New Post</h3>
    <hr>
        <form action="post_edit_process.php" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" value="<?=$post['title']?>" placeholder="" name="title">
                <input type="hidden" class="form-control" id="" value="<?=$post['id']?>" placeholder="" name="id">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" value="<?=$post['description']?>" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <img src="images/<?=$post['thumbnail']?>" width="100px" height="100px">
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <input type="text" class="form-control" id="" value="<?=$post['content']?>" placeholder="" name="content">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" value="<?=$post['slug']?>" placeholder="" name="slug">
            </div>
            <div class="form-group">
                <label for="">Category_ID</label>
                <select class="form-control" id="" placeholder="" name="category_id">
                    <?php foreach ($categories as $category) { ?>
                    
                    <option value="<?=$category['id']?>"><?=$category['name']?></option>
                        
                    <?php } ?>
                </select>   
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>