<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div {
            border: 2px solid rebeccapurple;
            width: 450px;
            height: 190px;
            margin: 0 auto;
            padding: 0px 20px 20px;
        }
        h1 {
            color: rebeccapurple;
        }
        label {
            float: left;
            width: 10em;
            padding-right: 1em;
        }
        span {
            float: left;
            width: 15em;$
            margin-bottom: .5em;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product = $_POST["product"];
        $price = $_POST["price"];
        $discount = $_POST["discount"];
        $discountAmount = $price * $discount/100 * 0.1;
        $discountPrice = $price - $discountAmount;
    }
    ?>

    <div>
        <h1>Product Discount Calculator</h1>
        <label>Product Description: </label>
        <span><?php echo $product?></span><br>
        <label>Price: </label>
        <span>$<?php echo $price?></span>
        <label>Discount Percent: </label>
        <span><?php echo $discount?>%</span>
        <label>Discount Amount: </label>
        <span>$<?php echo $discountAmount?></span>
        <label>Discount Price: </label>
        <span>$<?php echo $discountPrice?></span>
    </div>
</body>
</html>
