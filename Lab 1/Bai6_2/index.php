<!DOCTYPE html>
<html>
<head>
    <title>PHÁT SINH MẢNG VÀ TÍNH TOÁN</title>
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
    <form action="mang-2.php" method="POST">
        <table border="1">
            <thead>
                <tr>
                    <th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nhập số phần tử:</td>
                    <td><input type="text" name="so_phan_tu" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Phát sinh và tính toán"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>
