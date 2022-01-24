<?php
include_once('db.php');
if($_POST && $_POST['name'] && $_POST['image'] && $_POST['price'] && $_POST['description'] && $_POST['quantity']){
    $db = new db();
    $connect = $db->connect();
    $sql = "INSERT INTO products ( name, image, price, description, quantity, category_id) VALUES (
         '".$_POST['name']."',
         '".$_POST['image']."',
         '".$_POST['price']."',
         '".$_POST['description']."',
         '".$_POST['quantity']."',
         '".$_POST['category_id']."'
         )";
        // echo $sql;
        // die();
    $connect->exec($sql);
    header("location: product-list.php");

}

?>
<?php include_once('../layouts/header.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h1 class="text-center text-warning">Add New Product</h1>
        <a href="product-list.php" class="btn btn-success">Back</a> 
        <br>
            <div class="row">
                <div class="col-lg-12">
                    <form action="" method="post">

                        <div class="form-group">
                            <label>Name</label>
                            <input value="" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>image</label>
                            <input value="" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input value="" name="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input value="" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input value="" name="quantity" class="form-control">
                        </div>
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
