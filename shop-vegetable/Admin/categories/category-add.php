<?php
include_once('../products/db.php');
if($_POST && $_POST['id'] && $_POST['name']){
    $db = new db();
    $connect = $db->connect();
    $sql = "INSERT INTO categories ( id, name) VALUES (
         '".$_POST['id']."',
         '".$_POST['name']."',
         )";
    
    $connect->exec($sql);
    header("location: category-list.php");
}
?>
<?php include_once('../layouts/header.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h1 class="text-center text-warning">Add New Category</h1>
        <a href="category-list.php" class="btn btn-success">Back</a> 
        <br>
            <div class="row">
                <div class="col-lg-12">
                    <form action="" method="post">
                        <div class="form-group">
                        <label>Category</label>
                            <select class="form-select form-control" name="category_id">
                            <option value="1">củ quả</option>
                            <option value="2">rau xanh</option>
                            <option value="3">trái cây</option>
                            </select>
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
