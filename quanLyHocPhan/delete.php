<?php
include 'connect.php';
$MaGV = $_GET['MaGV'];
$conn->query("DELETE FROM GiangVien WHERE MaGV=$MaGV");
header("Location: index.php");
?>
