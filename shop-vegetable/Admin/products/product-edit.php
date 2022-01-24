<?php
include_once("db.php");
$db = new db();
$connect = $db->connect();

// khai báo biến id để nhận biến id ở $_REQUEST["id"]
$id = (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) ? $_REQUEST['id']: "";
//kiểm tra kết quả id có nhận hay ko
    if ($id != "") {
    $sql = "SELECT * FROM `products` WHERE `id` = $id";

    //truyen cau truy van vao
    $stmt = $connect->query($sql);
    //Thiết lập kiểu dữ liệu trả về
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //fetchALL se tra ve du lieu nhieu hon 1 ket qua
    $product = $stmt->fetch();
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     echo "<pre>";
//     print_r($_REQUEST);
//     echo "</pre>";

$name = $_REQUEST['name'];
$image = $_REQUEST['image'];
$price = $_REQUEST['price'];
$description = $_REQUEST['description'];
$quantity = $_REQUEST['quantity'];

$sql = "UPDATE `products` SET 
`name` = '$name', 
`image` = '$image', 
`price` = '$price', 
`description` = '$description', 
`quantity` = '$quantity' 
WHERE `products`.`id` = $id";   
//thuc thi cau lenh sql
$connect->exec($sql);
//chuyen huong sang file product-list
header('location: product-list.php');
}
?>


<?php include_once('../layouts/header.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="text-center">Edit Product</h1>
            <a href="product-list.php" class="btn btn-success">Back</a> 

            <div class="row">
                <div class="col-lg-12">
                    <form action="" method="post">

                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" class="form-control" value="<?= $product->name ?>">
                        </div>
                        <div class="form-group">
                            <label>image</label>
                            <input name="image" class="form-control" value="<?= $product->image ?>">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input name="price" class="form-control" value="<?= $product->price ?>">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input name="description" class="form-control" value="<?= $product->description ?>">
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input name="quantity" class="form-control" value="<?= $product->quantity ?>">
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