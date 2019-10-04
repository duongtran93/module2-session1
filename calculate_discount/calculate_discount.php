<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
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
        input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }
        button {
            margin-left: 13.2em;
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
    <form method="post" action="display_discount.php">
        <h1>Product Discount Calculator</h1>
        <label>Product Description: </label>
        <input type="text" name="product"><br>
        <label>List Price: </label>
        <input type="text" name="price"><br><br>
        <label>Discount Percent: </label>
        <input type="text" name="discount">(%)
        <button type="submit">Calculate Discount</button>
    </form>
</body>
</html>