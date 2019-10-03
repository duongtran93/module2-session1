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
            margin-bottom: .5em;
        }
    </style>
</head>
<body>
    <form method="post">
        <h1>Future Value Calculator</h1>
        <label>Investment Amount: </label>
        <input type="text" value="0" name="amount">
        <label>Yearly Interest Rate: </label>
        <input type="text" value="0" name="rate">
        <label>Number of Years: </label>
        <input type="text" value="0" name="year">
        <button type="submit">Calculate</button>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $amount = $_POST["amount"];
            $rate = $_POST["rate"];
            $year = $_POST["year"];
            $futureVal = $amount + ($amount * $rate / 100) * $year;
            echo "Investment Amount: " . "$" . $amount . "<br>" . "Yearly Interest Rate: " . $rate . "%"."<br>"."Number of Years: ".$year."<br>"."Future Value: "."$".$futureVal;
        }
    ?>
</body>
</html>
