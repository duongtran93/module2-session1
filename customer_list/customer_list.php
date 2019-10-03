<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
    </style>
</head>
<body>
    <table border="0">
        <caption><h1>Danh sách khách hàng</h1></caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>

        <?php
        $customerlist = array(
            "1" => array("ten" => "Mai Văn Hoàn",
                "ngaysinh" => "1983-08-20",
                "diachi" => "Hà Nội",
                "anh" => "images/1.jpg"),
            "2" => array("ten" => "Nguyễn Văn Nam",
                "ngaysinh" => "1983-08-20",
                "diachi" => "Bắc Giang",
                "anh" => "images/2.jpg"),
            "3" => array("ten" => "Nguyễn Thái Hòa",
                "ngaysinh" => "1983-08-21",
                "diachi" => "Nam Định",
                "anh" => "images/3.jpg"),
            "4" => array("ten" => "Trần Đăng Khoa",
                "ngaysinh" => "1983-08-22",
                "diachi" => "Hà Tây",
                "anh" => "images/4.jpg"),
            "5" => array("ten" => "Nguyễn Đình Thi",
                "ngaysinh" => "1983-08-17",
                "diachi" => "Hà Nội",
                "anh" => "images/5.jpg")
        );
        ?>

        <?php
        foreach($customerlist as $key => $values){
            echo "<tr>";
            echo "<td>".$key."</td>";
            echo "<td>".$values['ten']."</td>";
            echo "<td>".$values['ngaysinh']."</td>";
            echo "<td>".$values['diachi']."</td>";
            echo "<td><image src ='".$values['anh']."' width = '60px' height ='60px'/></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
