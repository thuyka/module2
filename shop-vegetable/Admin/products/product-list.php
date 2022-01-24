<?php
session_start();
//ket noi db
include_once('db.php');

//viet sql
$db = new db();
$connect = $db->connect();
$sql = "SELECT * FROM products";

//thuc thi sql
$query = $connect->prepare($sql);
$query->execute();
$products = array();
while ($result = $query->fetch(PDO::FETCH_OBJ)) {
    $products[] = $result;
}
// echo "<pre>"; 
// print_r($products);
// echo "</pre>";
?>
<?php include_once('../layouts/header.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="text-center" style="color:blue">Products List</h1>
            <p class="alert-danger"><?= isset( $_SESSION['error'] )?  $_SESSION['error'] : "";?></p>
            <?php unset( $_SESSION['error'] );?>
            <a href="product-add.php" class="btn btn-success">Add Product</a>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table">
                        <thead>
                            <tr style="background-color:pink">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($products as $product) :
                            ?>
                                <tr>
                                    <td><?= $product->id ?></td>
                                    <td><?= $product->name ?></td>
                                    <td><img width="50px" src="<?= $product->image ?>"> </td>
                                    <td><?= number_format($product->price) ?></td>
                                    <td><?= $product->quantity ?></td>
                                    <td><?= $product->description ?></td>
                                    <td>
                                        <a href="product-edit.php?id=<?= $product->id ?>" class="btn btn-primary">Edit</a>
                                        <a href="product-delete.php?id=<?= $product->id ?>" class="btn btn-danger" onclick="return confirm('really?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include_once('../layouts/footer.php'); ?>