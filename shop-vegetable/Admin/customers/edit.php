<?php
include_once('db.php');
$db = new db();
$connect = $db->connect();

if ($_GET && $_GET['id']) {
    $sql = "SELECT * FROM categories WHERE id= '" . $_GET['id'] . "'";
    $query = $connect->prepare($sql);
    $query->execute();

    $customer = array();

    while ($result = $query->fetch(PDO::FETCH_OBJ)) {
        $customer = $result;
    }
}
if ($_POST && $_POST['id'] && $_POST['name']) {
    $sql = "UPDATE categories SET id =  '" . $_POST['id'] . "',
    name  = '" . $_POST['name'] . "',
    WHERE id = '" . $_POST['id'] . "'";

    $connect->exec($sql);
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Sửa thông tin khách hàng</h1>
        <form action="edit.php" method="POST" class="form">
            <input name="id" type="hidden" value="<?= $customer->id ?>">
            <div class="form-group">
                <label>fullname</label>
                <input name="fullname" value="<?= $customer->fullname ?>" class="form-group">
            </div>
            <div class="form-group">
                <label>age</label>
                <input name="age" value="<?= $customer->age ?>" class="form-group">
            </div>
            <div class="form-group">
                <label>address</label>
                <input name="address" value="<?= $customer->address ?>" class="form-group">
            </div>
            <button type="submit" name="submit">Lưu</button>
    </div>
    </form>
</body>
</html>