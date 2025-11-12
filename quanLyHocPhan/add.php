<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm Giảng Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="text-center mb-4">📚 Thêm Giảng Viên</h2>
    <div class="card shadow-lg p-4 mx-auto" style="max-width: 600px;">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Họ và tên</label>
                <input type="text" name="HoTen" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Ảnh giảng viên</label>
                <input type="file" name="HinhAnh" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tổng số lớp</label>
                <input type="number" name="TongSoLop" class="form-control" min="0" required>
            </div>
            <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary">⬅ Quay lại</a>
                <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
            </div>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $HoTen = $_POST['HoTen'];
            $TongSoLop = $_POST['TongSoLop'];
            $HinhAnh = "";

            if ($_FILES['HinhAnh']['name'] != "") {
                $target_dir = "uploads/";
                if (!file_exists($target_dir)) mkdir($target_dir);
                $target_file = $target_dir . time() . "_" . basename($_FILES["HinhAnh"]["name"]);
                move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);
                $HinhAnh = $target_file;
            }

            $sql = "INSERT INTO GiangVien (HoTen, HinhAnh, TongSoLop)
                    VALUES ('$HoTen', '$HinhAnh', '$TongSoLop')";
            if ($conn->query($sql) === TRUE) {
                echo "<div class='alert alert-success mt-3'>✅ Thêm giảng viên thành công!</div>";
            } else {
                echo "<div class='alert alert-danger mt-3'>❌ Lỗi: " . $conn->error . "</div>";
            }
        }
        ?>
    </div>
</div>
</body>
</html>
