<?php

$mang_so = [];

if (isset($_POST["so_phan_tu"])){
    $n = $_POST["so_phan_tu"];

    for($i = 0; $i < $n; $i++){
    $mang_so[$i] = mt_rand(0,20);
    }
}


function xuat_mang($mang_so){
    return implode(" ", $mang_so);
}


function tim_min($mang_so){
    if(isset($mang_so[0])){
        $min = $mang_so[0];
        $n = count($mang_so);
        for($i = 1; $i < $n; $i++){
            if($mang_so[$i] < $min)
                $min = $mang_so[$i];
        }
        return $min;
    }
    return null;
}


function tim_max($mang_so){
    if(isset($mang_so[0])){
        $max = $mang_so[0];
        $n = count($mang_so);
        for($i = 1; $i < $n; $i++){
            if($mang_so[$i] > $max)
                $max = $mang_so[$i];
        }
        return $max;
    }
    return null;
}


function tinh_tong($mang_so){
    $tong_so = 0;
    $n = count($mang_so);
    for($i = 0; $i < $n; $i++)
        $tong_so += $mang_so[$i];
    return $tong_so;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>KẾT QUẢ</title>
    <meta charset="utf-8">
    <style>
        *{ font-family: Tahoma; }
        table{
            width: 400px;
            margin: 100px auto;
            border-collapse: collapse;
        }
        table th{
            background: #66CCFF;
            padding: 10px;
            font-size: 18px;
        }
        table td{
            padding: 8px;
        }
    </style>
</head>
<body>
    <form>
        <table border="1">
            <thead>
                <tr>
                    <th colspan="2">KẾT QUẢ TÍNH TOÁN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mảng: </td>
                    <td><input type="text" disabled value="<?php echo xuat_mang($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td>GTLN (MAX): </td>
                    <td><input type="text" disabled value="<?php echo tim_max($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td>GTNN (MIN): </td>
                    <td><input type="text" disabled value="<?php echo tim_min($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td>Tổng mảng: </td>
                    <td><input type="text" disabled value="<?php echo tinh_tong($mang_so); ?>"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>
