<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Manager</title>
</head>

<body>
    <h1>Blog Manager</h1>
    <form method="POST" action="?act=add">
        <label for="title">Tiêu đề:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="teaser">Tóm tắt:</label><br>
        <input type="text" id="teaser" name="teaser" required><br><br>

        <label for="content">Nội dung:</label><br>
        <textarea id="content" name="content" rows="4" required></textarea><br><br>

        <button type="submit">Thêm blog</button>
    </form>

    <form action="?act=search" method="POST">
        Tìm kiếm: <input type="text" name="search" placeholder="Nhập tiêu đề...">
        <button type="submit">Tìm kiếm</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Tóm tắt</th>
                <th>Nội dung</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($blogs)) {
                foreach ($blogs as $blog) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($blog['id']) . "</td>";
                    echo "<td>" . htmlspecialchars($blog['title']) . "</td>";
                    echo "<td>" . htmlspecialchars($blog['teaser']) . "</td>";
                    echo "<td>" . htmlspecialchars($blog['content']) . "</td>";
                    echo "<td>" . htmlspecialchars($blog['created_at']) . "</td>";
                    echo "<td>";
                    echo "<a href='?act=edit&id=" . $blog['id'] . "'>Sửa</a> | ";
                    echo "<a href='?act=delete&id=" . $blog['id'] . "'>Xóa</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Không tìm thấy blog nào</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>