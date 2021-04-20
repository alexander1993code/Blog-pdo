<?php

$table = "blog_posts";

use App\Models\Model;
$pdo = new Model;

if(isset($_POST['saved'])){
    
    $title = $_POST['title'];
    $content = $_POST['content'];
    $id = $_POST['idNew'];

    $pdo->edit($table, $title, $content, $id);

}else{

    $id = $_GET['id'];
    

    $idNew = $pdo->find($table, $id);    

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Edit Post</title>
</head>
<style>
    .top{
        margin-top: 10px;
        margin-left: 30px;        

    }
</style>

<br>

<body>
    <h2 class="top">Edit post</h2>
    <form class="form" method="post">
        <div class= "top">
            <label for="title">title</label><br>
            <input type="text" value="<?php echo $idNew->title;?>" name="title"></br>

            <label for="content">Content</label><br>
            <input type="textarea" value="<?php echo $idNew->content;?>" name="content" ></br>
            <input type="hidden" value="<?php echo $idNew->id; ?>" name ="idNew">

            <input class="btn btn-primary" class="top" type="submit" value="Saved" name="saved">
           <a class= "btn btn-primary" href="post.php">Back</a>
        </div>

    </form>
</body>
</html>