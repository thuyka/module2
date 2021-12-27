<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        User name: <input style="margin-left: 5px" type="text" placeholder="nhập tên" name="name" value=""> <br><br>
        Email: <input style="margin-left: 34px" type="text" placeholder="email" name="email" value=""> <br><br>
        Your phone: <input style="margin-left: -2px" type="text" name="phone" value=""> <br><br>
        <input type="submit" value="submit">

    </form>
</body>
</html>
<?php
//ktra người dùng đã nhâp vào hay chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //ktra dữ liệu đã gửi lên đúng hay chưa
    echo "<pre>";
    print_r($REQUEST);
    echo "</pre>";
    //tạm dừng để chạy ktra
    //khai báo biến 
    $name= $_REQUEST["name"];
    $email= $_REQUEST["email"];
    $phone= $_REQUEST["phone"];
    // Xử lý


    // Xuất
}



?>