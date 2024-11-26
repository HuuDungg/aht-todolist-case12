<?php
include("./model/Blog.php");

class BlogController
{
    private $blog;

    public function __construct()
    {
        $this->blog = new Blog();
    }

    public function display()
    {
        $blogs = $this->blog->getAll();
        require("./view/list.php");
    }

    public function search()
    {
        $search = $_POST['search'];
        echo "Searching with: $search";
        $blogs = $this->blog->search($search);
        require("./view/list.php");
    }

    public function create()
    {
        $title = $_POST['title'];
        $teaser = $_POST['teaser'];
        $content = $_POST['content'];

        $this->blog->create($title, $teaser, $content);
        header("Location: /aht-training/lession12/?act=list");
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->blog->delete($id);
        header("Location: /aht-training/lession12/?act=list");
    }

    public function getById()
    {
        $id = $_GET['id'];
        $blog = $this->blog->getById($id);
        require("./view/edit.php");
    }

    public function update()
    {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $teaser = $_POST['teaser'];
        $content = $_POST['content'];

        $this->blog->update($id, $title, $teaser, $content);
        header("Location: /aht-training/lession12/?act=list");
    }
}
