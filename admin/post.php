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

    <h1>Blog Post</h1>

    <ul>
        <li><a href="primary.php">Blogs</a></li>
    </ul>
    <a class="btn btn-primary" href="insert.php">New Post</a>
   
        <table class="table table-stripped table-hover">
            <caption>Table content blogs</caption>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($blogPosts as $key =>$blogPost): ?>
                    <?php 
                    $id = $blogPost['id'];    
                    ?>
                        <tr>
                            <td><?php echo $blogPost['title'] ?></td>
                            <td><a class="btn btn-warning" href="edit.php?id=<?php echo  $id;?>">Edit</a></td>
                            <td><a class="btn btn-danger" href="delete.php?id=<?php echo $id;?>">Delete</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
        </table>
       
   </div>
</body>
</html>