<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>product manager</h1>
    <form method="POST" action="?act=add">
        <label for="product_name">Tên sản phẩm:</label><br>
        <input type="text" id="product_name" name="product_name" required><br><br>

        <label for="price">Giá:</label><br>
        <input type="number" id="price" name="price" required><br><br>

        <label for="description">Mô tả:</label><br>
        <textarea id="description" name="description" rows="4" required></textarea><br><br>

        <label for="manufacturer">Nhà sản xuất:</label><br>
        <input type="text" id="manufacturer" name="manufacturer" required><br><br>

        <button type="submit">Gửi</button>
    </form>

    <form action="?act=search" method="POST">
        Keyword <input type="text" name="search"> <button>Search</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>manufacturer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($products)) {
                foreach ($products as $product) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($product['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($product['product_name']) . "</td>";
                    echo "<td>" . htmlspecialchars($product['price']) . "</td>";
                    echo "<td>" . htmlspecialchars($product['product_description']) . "</td>";
                    echo "<td>" . htmlspecialchars($product['manufacturer']) . "</td>";
                    echo "<td>";
                    echo "<a href='?act=edit&id=" . $product['id'] . "'>Edit</a> | ";
                    echo "<a href='?act=delete&id=" . $product['id'] . "'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No product found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>