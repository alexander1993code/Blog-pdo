<?php 
use App\Models\Model;

$pdo = new model;
$blogPosts = $pdo->getData('blog_posts');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Blog</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Blog</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <ul>
                    <li><a href="post.php">Post</a></li>
                </ul>
            </div>        

        </div>
        <div class="row">
            <div class="col-md-12">
            <footer>Alexander Salazar</footer>
            </div> 
        </div>

    
    </div>
</body>
</html>