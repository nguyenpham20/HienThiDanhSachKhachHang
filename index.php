
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
<fieldset>
<table border="0">
    <!--Hien thi danh sach  -->
    <caption>Danh sách khách hàng</caption>
    <tr>
        <th>STT</th>
        <th>&nbsp;</th>
        <th>Tên</th>
        <th>&nbsp;</th>
        <th>Ngày Sinh
        <th>&nbsp;</th>
        <th>Địa chỉ</th>
    </tr>

</table>
    <!--Khai bao mang chua danh sach -->
    <?php
    $customerList = array(
        "1" => array("ten" => "Mai Văn Hoàn",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Hà Nội",
        ),
        "2" => array("ten" => "Nguyễn Văn Nam",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Bắc Giang",
        ),
        "3" => array("ten" => "Nguyễn Thái Hòa",
            "ngaysinh" => "1983-08-21",
            "diachi" => "Nam Định",
        ),
        "4" => array("ten" => "Trần Đăng Khoa",
            "ngaysinh" => "1983-08-22",
            "diachi" => "Hà Tây",
        ),
        "5" => array("ten" => "Nguyễn Đình Thi",
            "ngaysinh" => "1983-08-17",
            "diachi" => "Hà Nội",
        )
    );
    ?>
    <!--Xu ly hien thi danh sach khach hang thong qua viec su dung vong lap foreach de duyet mang  $customerList -->
    <?php
    foreach($customerList as $key => $values){
        echo "<tr>";
        echo "<br/>";
        echo "<td>".$key."</td>";
        echo "&nbsp;&nbsp;";
        echo "<td>".$values['ten']."</td>";
        echo "&nbsp;";
        echo "<td>".$values['ngaysinh']."</td>";
        echo "&nbsp;";
        echo "<td>".$values['diachi']."</td>";
        echo "</tr>";
    }
    ?>
</fieldset>
</body>
</html>