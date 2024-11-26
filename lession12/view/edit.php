<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>product manager</h1>
    <form method="POST" action="?act=save">
        <label for="id">id</label><br>
        <input type="text" id="id" name="id" readonly value="<?php echo $product["id"] ?>"><br><br>

        <label for="product_name">Tên sản phẩm:</label><br>
        <input type="text" id="product_name" name="product_name" required value="<?php echo $product["product_name"] ?>"><br><br>

        <label for="price">Giá:</label><br>
        <input type="number" id="price" name="price" required value="<?php echo $product["price"] ?>"><br><br>

        <label for="description">Mô tả:</label><br>
        <input id="description" name="description" required value="<?php echo $product["product_description"] ?>"></textarea><br><br>

        <label for="manufacturer">Nhà sản xuất:</label><br>
        <input type="text" id="manufacturer" name="manufacturer" required value="<?php echo $product["manufacturer"] ?>"><br><br>

        <button type="submit">Luwu</button>
    </form>


</body>

</html>