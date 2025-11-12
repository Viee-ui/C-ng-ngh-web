<?php
include 'connect.php';
$MaGV = $_GET['MaGV'];
$row = $conn->query("SELECT * FROM GiangVien WHERE MaGV=$MaGV")->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sửa Giảng Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
    <h2 class="text-center mb-4">✏️ Sửa Giảng Viên</h2>
    <div class="card shadow-lg p-4 mx-auto" style="max-width: 600px;">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Họ và tên</label>
                <input type="text" name="HoTen" class="form-control" value="<?= $row['HoTen'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Hình ảnh mới (nếu có)</label>
                <input type="file" name="HinhAnh" class="form-control">
                <?php if ($row['HinhAnh']) echo "<img src='{$row['HinhAnh']}' width='100' class='mt-2 rounded'>"; ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Tổng số lớp</label>
                <input type="number" name="TongSoLop" class="form-control" value="<?= $row['TongSoLop'] ?>">
            </div>
            <div class="d-flex justify-content-between">
                <a href="index.php" class="btn btn-secondary">⬅ Quay lại</a>
                <button type="submit" name="update" class="btn btn-primary">Lưu thay đổi</button>
            </div>
        </form>

        <?php
        if (isset($_POST['update'])) {
            $HoTen = $_POST['HoTen'];
            $TongSoLop = $_POST['TongSoLop'];
            $HinhAnh = $row['HinhAnh'];

            if ($_FILES['HinhAnh']['name'] != "") {
                $target_dir = "uploads/";
                $target_file = $target_dir . time() . "_" . basename($_FILES["HinhAnh"]["name"]);
                move_uploaded_file($_FILES["HinhAnh"]["tmp_name"], $target_file);
                $HinhAnh = $target_file;
            }

            $sql = "UPDATE GiangVien SET HoTen='$HoTen', HinhAnh='$HinhAnh', TongSoLop='$TongSoLop' WHERE MaGV=$MaGV";
            if ($conn->query($sql)) {
                echo "<div class='alert alert-success mt-3'>✅ Cập nhật thành công!</div>";
            }
        }
        ?>
    </div>
</div>
</body>
</html>
