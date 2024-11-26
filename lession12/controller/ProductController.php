<?php
include("./model/Product.php");
class ProductController
{
    private $product;
    public function __construct()
    {
        $this->product = new Product();
    }
    public function display()
    {

        $products = $this->product->getAll();
        require("./view/list.php");
    }

    public function search()
    {
        $search = $_POST['search'];
        echo "search witj: $search";
        $products = $this->product->search($search);
        require("./view/list.php");
    }

    public function create()
    {
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $manufacturer = $_POST['manufacturer'];


        $this->product->create($product_name, $price, $description, $manufacturer);
        header("Location: /aht-training/lession12/?act=list");
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->product->delete($id);
        header("Location: /aht-training/lession12/?act=list");
    }

    public function getById()
    {
        $id = $_GET['id'];

        $product = $this->product->getById($id);
        require("./view/edit.php");
    }

    public function update()
    {
        $id = $_POST['id'];
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $manufacturer = $_POST['manufacturer'];

        $productModel = new Product();
        $productModel->update($id, $product_name, $price, $description, $manufacturer);
        header("Location: /aht-training/lession12/?act=list");
    }
}
