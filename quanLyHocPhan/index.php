<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh Sách Giảng Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card img { height: 200px; object-fit: cover; }
    </style>
</head>
<body class="bg-light">

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">👩‍🏫 Danh Sách Giảng Viên</h2>
        <a href="add.php" class="btn btn-success">+ Thêm Giảng Viên</a>
    </div>

    <div class="row">
        <?php
        $result = $conn->query("SELECT * FROM GiangVien");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $img = $row['HinhAnh'] ?: 'https://via.placeholder.com/200x200?text=No+Image';
                echo "
                <div class='col-md-4 col-lg-3 mb-4'>
                    <div class='card shadow-sm'>
                        <img src='{$img}' class='card-img-top' alt='{$row['HoTen']}'>
                        <div class='card-body text-center'>
                            <h5 class='card-title'>{$row['HoTen']}</h5>
                            <p class='card-text text-muted'>Tổng số lớp: {$row['TongSoLop']}</p>
                            <a href='edit.php?MaGV={$row['MaGV']}' class='btn btn-warning btn-sm'>Sửa</a>
                            <a href='delete.php?MaGV={$row['MaGV']}' class='btn btn-danger btn-sm' onclick='return confirm(\"Xóa giảng viên này?\")'>Xóa</a>
                        </div>
                    </div>
                </div>";
            }
        } else {
            echo "<p class='text-center text-muted'>Chưa có giảng viên nào.</p>";
        }
        ?>
    </div>
</div>
</body>
</html>
