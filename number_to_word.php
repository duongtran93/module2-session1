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
    <h2>Đọc số thành chữ</h2>
    <form method="post">
        <input type="number" name="number" placeholder="Nhập số cần chuyển">
        <input type="submit" value="Đọc">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST["number"];
            if ($num >= 0 && $num < 10) {
                switch ($num) {
                    case 0:
                        echo "Zero";
                        break;
                    case 1:
                        echo "One";
                        break;
                    case 2:
                        echo "Two";
                        break;
                    case 3:
                        echo "Three";
                        break;
                    case 4:
                        echo "Four";
                        break;
                    case 5:
                        echo "Five";
                        break;
                    case 6:
                        echo "Six";
                        break;
                    case 7:
                        echo "Seven";
                        break;
                    case 8:
                        echo "Eight";
                        break;
                    case 9:
                        echo "Nine";
                        break;
                }
            } else if ($num >= 10 && $num < 20) {
                $ones = $num - 10;
                switch ($ones) {
                    case 0:
                        echo "Ten";
                        break;
                    case 1:
                        echo "Eleven";
                        break;
                    case 2:
                        echo "Twelve";
                        break;
                    case 3:
                        echo "Thirteen";
                        break;
                    case 4:
                        echo "Fourteen";
                        break;
                    case 5:
                        echo "Fifteen";
                        break;
                    case 6:
                        echo "Sixteen";
                        break;
                    case 7:
                        echo "Seventeen";
                        break;
                    case 8:
                        echo "Eighteen";
                        break;
                    case 9:
                        echo "Nineteen";
                        break;
                }
            } else if ($num >= 20 && $num < 100) {
                $tens = ($num / 10);
                $tens = (int) $tens;
                switch ($tens) {
                    case 2:
                        echo "Twenty"." ";
                        break;
                    case 3:
                        echo "Thirty"." ";
                        break;
                    case 4:
                        echo "Forty"." ";
                        break;
                    case 5:
                        echo "Fifty"." ";
                        break;
                    case 6:
                        echo "Sixty"." ";
                        break;
                    case 7:
                        echo "Seventy"." ";
                        break;
                    case 8:
                        echo "Eighty"." ";
                        break;
                    case 9:
                        echo "Ninety"." ";
                        break;
                }
                $one = $num % 10;
                switch ($one) {
                    case 1:
                        echo "one";
                        break;
                    case 2:
                        echo "two";
                        break;
                    case 3:
                        echo "three";
                        break;
                    case 4:
                        echo "four";
                        break;
                    case 5:
                        echo "five";
                        break;
                    case 6:
                        echo "six";
                        break;
                    case 7:
                        echo "seven";
                        break;
                    case 8:
                        echo "eight";
                        break;
                    case 9:
                        echo "nine";
                        break;
                }
            } else if ($num >= 100 && $num < 1000) {
                $hun = $num / 100;
                $hun = (int) $hun;
                switch ($hun) {
                    case 1:
                        echo "One hundred";
                        break;
                    case 2:
                        echo "Two hundred";
                        break;
                    case 3:
                        echo "Three hundred";
                        break;
                    case 4:
                        echo "Four hundred";
                        break;
                    case 5:
                        echo "Five hundred";
                        break;
                    case 6:
                        echo "Six hundred";
                        break;
                    case 7:
                        echo "Seven hundred";
                        break;
                    case 8:
                        echo "Eight hundred";
                        break;
                    case 9:
                        echo "Nine hundred";
                        break;
                }
                $ten = $num / 10;
                $ten = (int) $ten;
                $t = $ten % 10;
                switch ($t) {
                    case 1:
                        echo " and ten";
                        break;
                    case 2:
                        echo " and twenty";
                        break;
                    case 3:
                        echo " and thirty";
                        break;
                    case 4:
                        echo " and fourty";
                        break;
                    case 5:
                        echo " and fifty";
                        break;
                    case 6:
                        echo " and sixty";
                        break;
                    case 7:
                        echo " and seventy";
                        break;
                    case 8:
                        echo " and eighty";
                        break;
                    case 9:
                        echo " and ninety";
                        break;
                }
                $o = $num % 10;
                switch ($o) {
                    case 1:
                        if ($t == 1) {
                            echo " and eleven";
                        } else {
                        echo " one";}
                        break;
                    case 2:
                        echo " two";
                        break;
                    case 3:
                        echo " three";
                        break;
                    case 4:
                        echo " four";
                        break;
                    case 5:
                        echo " five";
                        break;
                    case 6:
                        echo " six";
                        break;
                    case 7:
                        echo " seven";
                        break;
                    case 8:
                        echo " eight";
                        break;
                    case 9:
                        echo " nine";
                        break;
                }
            }
        }
    ?>
</body>
</html>
