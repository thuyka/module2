<?php
include_once("../db.php");
$db = new db();
$connect = $db->connect();

// khai báo biến id để nhận biến id ở $_REQUEST["id"]
$id = (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) ? $_REQUEST['id']: "";
//kiểm tra kết quả id có nhận hay ko
    if ($id != "") {
    $sql = "SELECT * FROM `customers` WHERE `id` = $id";

    //truyen cau truy van vao
    $stmt = $connect->query($sql);
    //Thiết lập kiểu dữ liệu trả về
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //fetchALL se tra ve du lieu nhieu hon 1 ket qua
    $customer = $stmt->fetch();
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     echo "<pre>";
//     print_r($_REQUEST);
//     echo "</pre>";

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$address = $_REQUEST['address'];
$phone = $_REQUEST['phone'];
$delivery_date = $_REQUEST['delivery_date'];

$sql = "UPDATE `customers` SET 
`name` = '$name', 
`email` = '$email', 
`address` = '$address', 
`phone` = '$phone', 
`delivery_date` = '$delivery_date' 
WHERE `customers`.`id` = $id";  
// echo ($sql);
// die(); 
//thuc thi cau lenh sql
$connect->exec($sql);
//chuyen huong sang file customer-list
header('location: customer-list.php');
}
?>


<?php include_once('../layouts/header.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="text-center">Edit Customer</h1>
            <a href="customer-list.php" class="btn btn-success">Back</a> 
            <div class="row">
                <div class="col-lg-12">
                    <form action="" method="post">

                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" class="form-control" value="<?= $customer->name ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" class="form-control" value="<?= $customer->email ?>">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input name="address" class="form-control" value="<?= $customer->address ?>">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input name="phone" class="form-control" value="<?= $customer->phone ?>">
                        </div>
                        <div class="form-group">
                            <label>Delivery Date</label>
                            <input name="delivery_date" class="form-control" value="<?= $customer->delivery_date ?>">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include_once('../layouts/footer.php'); ?>