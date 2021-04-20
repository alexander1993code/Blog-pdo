<?php

use App\Models\Model;


$id  = $_GET['id'];
$table = "blog_posts";

$pdo = new model;
$pdo->drop($table, $id);

header('location:post.php');





/*if(isset($_GET['id'])){
    $elemento = $_POST['elemento'];
    
    require_once '../config.php';

    try {
        
        $sql = "DELETE FROM `blog_posts` WHERE id = :id ";

        $prepare = $pdo->prepare($sql);

        $prepare->execute([

        'id' =>$id
    ]);
        header('location:post.php');
        
    } catch (Exception $e) {
        echo $e;
    }
    

}*/

?>