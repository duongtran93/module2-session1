<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $operandOne = $_POST["operand1"];
            $operator = $_POST["operator"];
            $operandTwo = $_POST["operand2"];
            if ($operator == "add") {
                $operator = "+";
                $total = $operandOne + $operandTwo;
            } else if ($operator == "sub") {
                $operator = "-";
                $total = $operandOne - $operandTwo;
            } else if ($operator == "multi") {
                if ($operandTwo == 0) {
                    echo "Phep chia khong hop le";
                }
                $operator = "/";
                $total = $operandOne / $operandTwo;
            } else if ($operator == "div") {
                $operator = "*";
                $total = $operandOne * $operandTwo;
            }
        }
    ?>

    <div>
        <h1>Result: </h1>
        <span><?php echo $operandOne." "."$operator"." ".$operandTwo." "."="." ".$total?></span>
    </div>
</body>
</html>
