<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

    <?php
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_FLOAT);
    $discount_percent = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_FLOAT);

    // Kiểm tra dữ liệu hợp lệ
    $error_message = '';
    if ($product_description === null || $product_description === '') {
        $error_message = "Product description is required.";
    } else if ($list_price === false || $list_price <= 0) {
        $error_message = "List price must be a valid number greater than 0.";
    } else if ($discount_percent === false || $discount_percent < 0 || $discount_percent > 100) {
        $error_message = "Discount percent must be a valid number between 0 and 100.";
    }

    if ($error_message == '') {
        // Tính toán giảm giá
        $discount = $list_price * $discount_percent * 0.01;
        $discount_price = $list_price - $discount;

        // Định dạng lại dữ liệu
        $list_price_f = "$" . number_format($list_price, 2);
        $discount_percent_f = $discount_percent . "%";
        $discount_f = "$" . number_format($discount, 2);
        $discount_price_f = "$" . number_format($discount_price, 2);

        // Ngăn chặn HTML tag chạy trong mô tả sản phẩm
        $product_description = htmlspecialchars($product_description);
    }

    ?>

    <main>
        <h1>Product Discount Calculator</h1>

        <?php if ($error_message != '' ) { ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
            <p><a href="index.html">Go back</a></p>
        <?php } else { ?>

        <label>Product Description:</label>
        <span><?php echo $product_description; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_f; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_f; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br>
    <?php } ?>
    </main>
</body>
</html>