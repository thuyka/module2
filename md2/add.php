<?php
include_once ("db.php");
$db = new db();                     //khởi tạo đối tượng từ class db ở db.php
$connect = $db->connect();  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$sql = "INSERT INTO products(tenhang, loaihang, gia, soluong, mota) VALUES('" . $_POST['tenhang'] . "','" . $_POST['loaihang'] . "','" . $_POST['gia']."','" . $_POST['soluong']."','" . $_POST['mota'] . "')";
$connect->exec($sql);

header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add.php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>

<body>
    <form action="" method="POST">
        <div class="container">
            <h1 class="text-center">Thêm mặt hàng</h1>

            <div class="mb-3">
                <label class="form-label">Tên hàng</label>
                <input type="text" class="form-control" name="tenhang">
            </div>
            <div class="mb-3">
                <label class="form-label">Loại hàng</label>
                <select class="form-select" name="loaihang">
                        <option>Điện thoại</option>
                        <option>Điều hòa</option>
                        <option>Tủ lạnh</option>
                    </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Giá</label>
                <input type="text" class="form-control" name="gia">
            </div>
            <div class="mb-3">
                <label class="form-label">Số lượng</label>
                <input type="text" class="form-control" name="soluong">
            </div>
            <div class="mb-3">
                <label class="form-label">Mô tả</label>
                <input type="text" class="form-control" name="mota">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" type="return" class="btn btn-primary">Trở lại</a>
    </form>
    </div>


</body>

</html>