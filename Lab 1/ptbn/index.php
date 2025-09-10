<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Giải phương trình bậc nhất</title>
</head>
<body>
    <h2>Giải phương trình bậc nhất ax + b = 0</h2>
    <form name="frmPTB1" method="post" action="giaiptbn.php">
        <label>Nhập a: </label>
        <input type="text" name="a" required><br><br>

        <label>Nhập b: </label>
        <input type="text" name="b" required><br><br>

        <label>Nghiệm: </label>
        <input type="text" name="nghiem" value="<?php 
            if(isset($_POST['giai'])){
                $a = $_POST['a'];
                $b = $_POST['b'];
                if(is_numeric($a) && is_numeric($b)){
                    if($a == 0){
                        if($b == 0){
                            echo "Vô số nghiệm";
                        } else {
                            echo "Vô nghiệm";
                        }
                    } else {
                        $x = -$b / $a;
                        echo $x;
                    }
                } else {
                    echo "Vui lòng nhập số!";
                }
            }
        ?>" readonly><br><br>

        <input type="submit" name="giai" value="Giải phương trình">
    </form>
</body>
</html>
