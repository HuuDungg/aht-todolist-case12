<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Manager - Chỉnh sửa</title>
</head>

<body>
    <h1>Chỉnh sửa Blog</h1>
    <form method="POST" action="?act=save">
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id" readonly value="<?php echo htmlspecialchars($blog['id']); ?>"><br><br>

        <label for="title">Tiêu đề:</label><br>
        <input type="text" id="title" name="title" required value="<?php echo htmlspecialchars($blog['title']); ?>"><br><br>

        <label for="teaser">Tóm tắt:</label><br>
        <input type="text" id="teaser" name="teaser" required value="<?php echo htmlspecialchars($blog['teaser']); ?>"><br><br>

        <label for="content">Nội dung:</label><br>
        <textarea id="content" name="content" rows="4" required><?php echo htmlspecialchars($blog['content']); ?></textarea><br><br>

        <button type="submit">Lưu</button>
    </form>
</body>

</html>