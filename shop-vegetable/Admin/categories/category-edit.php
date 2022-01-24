<?php
include_once('../products/db.php');
$db = new db();
$connect = $db->connect();

// khai báo biến id để nhận biến id ở $_REQUEST["id"]
$id = (isset($_REQUEST['id']) && !empty($_REQUEST['id'])) ? $_REQUEST['id']: "";
//kiểm tra kết quả id có nhận hay ko
    if ($id != "") {
    $sql = "SELECT * FROM `categories` WHERE `id` = $id";

    //truyen cau truy van vao
    $stmt = $connect->query($sql);
    //Thiết lập kiểu dữ liệu trả về
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //fetchALL se tra ve du lieu nhieu hon 1 ket qua
    $category = $stmt->fetch();
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     echo "<pre>";
//     print_r($_REQUEST);
//     echo "</pre>";

$name = $_REQUEST['name'];
$sql = "UPDATE `categories` SET 
`name` = '$name' 
WHERE `categories`.`id` = $id";   
//thuc thi cau lenh sql
$connect->exec($sql);
//chuyen huong sang file category-list
header('location: category-list.php');
}
?>


<?php include_once('../layouts/header.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="text-center">Edit Category</h1>
            <a href="category-list.php" class="btn btn-success">Back</a> 
            <div class="row">
                <div class="col-lg-12">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text"  class="form-control" value="<?= $category->name ?>">
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