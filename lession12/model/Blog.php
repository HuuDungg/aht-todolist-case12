<?php
class Blog
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
        $sql = "SELECT * FROM blog";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function search($title)
    {
        $sql = "SELECT * FROM blog WHERE title LIKE :title";
        $stmt = $this->conn->prepare($sql);
        $key = "%" . $title . "%";
        $stmt->bindParam(':title', $key);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM blog WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($title, $teaser, $content)
    {
        $sql = "INSERT INTO blog (title, teaser, content, created_at) 
            VALUES (:title, :teaser, :content, NOW())";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':teaser', $teaser);
        $stmt->bindParam(':content', $content);
        $stmt->execute();
        return $this->conn->lastInsertId();
    }


    public function update($id, $title, $teaser, $content)
    {
        $sql = "UPDATE blog SET 
            title = :title, 
            teaser = :teaser, 
            content = :content
            WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':teaser', $teaser);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }


    public function delete($id)
    {
        $sql = "DELETE FROM blog WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
