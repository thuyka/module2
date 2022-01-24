<?php
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
            <h1 class="text-center" style="color:blue">List Of Products</h1>
            <a href="index.php" class="btn btn-success">Back</a>
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