<?php
namespace App\Models;


class Model {
    protected $dbHost;
    protected $dbName;
    protected $dbUser;
    protected $dbPass;

    function __construct()
    {
        $this->dbHost = 'localhost';
        $this->dbName = 'blog';
        $this->dbUser = 'root';
        $this->dbPass = '';

    }
    public function init(){
        try {
            $pdo = new \PDO("mysql:host=$this->dbHost;dbname=$this->dbName","$this->dbUser",
            "$this->dbPass");

            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
        } catch (\Exception $e) {
            echo $e->getMessage(); 
        }
        return $pdo;

    }

    public function getData($table)
    {
        $pdo = $this->init();

        $query = $pdo->prepare("SELECT * FROM $table ORDER BY id DESC");
        $query->execute();
        
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function insert($table, $title, $content)
    {
        $pdo = $this->init();

        $query = $pdo->prepare("INSERT INTO $table(title, content) VALUES (:title, :content)");
        $query->execute([
            'title' => $title,
            'content' => $content
        ]);
    }
    public function drop($table, $id){

        $pdo = $this->init();
    
        $query = $pdo->prepare("DELETE FROM `$table` WHERE id = :id ");

        $query->execute([
            'id' => $id
        ]);  
    }
    public function edit($table, $title, $content, $id){

        $pdo = $this->init();

        $query = $pdo->prepare("UPDATE $table SET title = :title, content = :content WHERE id = :id");
       
        $query->execute([
            'id' => $id,
            'title' => $title,
            'content' => $content
        ]);
        header('location:post.php');
        
        
    }
    public function find($table, $id){

        $pdo = $this->init();

        $query = $pdo->prepare("SELECT * FROM $table WHERE id = :id");
        $query->execute([
            'id' => $id
        ]);

        return $query->fetch(\PDO::FETCH_OBJ);
    }
   
   
}


