<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("./controller/ProductController.php");

$productController = new ProductController();
$act = $_GET["act"] ?? "/";

switch ($act) {
    case "list":
        $productController->display();
        break;
    case "add":
        $productController->create();
        break;
    case "delete":
        $productController->delete();
        break;
    case "edit":
        $productController->getById();
        break;
    case "save":
        $productController->update();
        break;
    case "search":
        $productController->search();
        break;
    default:
        echo "404 - Page not found";
}
