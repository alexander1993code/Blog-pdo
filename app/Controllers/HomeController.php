<?php
namespace App\Controllers;

class HomeController extends Controller{
  
    public function index()
    {
        $this->render("../admin/index.php");
    }
    public function posts()
    {
        $this->render("../admin/post.php");
    }
    public function insert()
    {
        $this->render("../admin/insert.php");
    }
    public function delete()
    {
        $this->render("../admin/delete.php");
    }
    public function primary()
    {
        $this->render("../admin/primary.php");
    }
    public function edit()
    {
        $this->render("../admin/edit.php");
    }
}