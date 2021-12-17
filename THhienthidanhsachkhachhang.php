<?php
$customerList = [
    "1" => [
        "ten" => "Mai Van Hoan",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Ha Noi",
        "anh" => "imges/img1.jpg"
    ],

    "2" => [
        "ten" => "Nguyen Van Nan",
        "ngaysinh" => "1983-08-20",
        "diachi" => "Bac Giang",
        "anh" => "imges/img2.jpg"
    ],
    "3" => [
        "ten" => "Nguyen Thai Hoa",
        "ngaysinh" => "1983-08-21",
        "diachi" => "Nam Dinh",
        "anh" => "imges/img3"
    ],
    "4" => [
        "ten" => "Tran Dang Khoa",
        "ngaysinh" => "1983-08-22",
        "diachi" => "Ha Tay",
        "anh" => "imges/img4.jpg"
    ],
    "5" => [
        "ten" => "Nguyen Dinh Thi",
        "ngaysinh" => "1983-08-17",
        "diachi" => "Ha Noi",
        "anh" => "imges/img5.jpg"
    ]
];
?>



<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>TH hiển thị danh sách</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }
            
            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            </style>
</head>
<body>
    <table>
        <caption><h1>Danh sách khách hàng</h1></caption>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Ảnh</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customerList as $key => $value): ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value['ten'] ?></td>
                    <td><?= $value['ngaysinh'] ?></td>
                    <td><?= $value['diachi'] ?></td>
                    <td><img src="<?= $value['anh'] ?>" alt="" width="200"></td>
                </tr>
            <?php endforeach; ?>
            
            </tbody>
        </table>
    </body>
    </html>