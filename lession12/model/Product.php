<?php
class Product
{
    private $conn;

    public function __construct()
    {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "12345678";
        $port = 3306;
        $dbname = "aht";
        $this->conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM product";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function search($product_name)
    {
        $sql = "SELECT * FROM product WHERE product_name LIKE :product_name";
        $stmt = $this->conn->prepare($sql);
        $key = "%" . $product_name . "%";
        $stmt->bindParam(':product_name', $key);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM product WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($product_name, $price, $product_description, $manufacturer)
    {
        $sql = "INSERT INTO product (product_name, price, product_description, manufacturer) 
                VALUES (:product_name, :price, :product_description, :manufacturer)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':product_description', $product_description);
        $stmt->bindParam(':manufacturer', $manufacturer);
        $stmt->execute();
        return $this->conn->lastInsertId();
    }

    public function update($id, $product_name, $price, $product_description, $manufacturer)
    {
        $sql = "UPDATE product SET 
                product_name = :product_name, 
                price = :price, 
                product_description = :product_description, 
                manufacturer = :manufacturer
                WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':product_description', $product_description);
        $stmt->bindParam(':manufacturer', $manufacturer);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM product WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
