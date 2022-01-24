<?php
//ket noi db
include_once('../db.php');

//viet sql
$db = new db();
$connect = $db->connect();
$sql = "SELECT * FROM customers";

//thuc thi sql
$query = $connect->prepare($sql);
$query->execute();
$customers = array();
while ($result = $query->fetch(PDO::FETCH_OBJ)) {
    $customers[] = $result;
}
// echo "<pre>"; 
// print_r($customers);
// echo "</pre>";
?>
<?php include_once('../layouts/header.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="text-center" style="color:blue">Customers List</h1>
            <a href="customer-add.php" class="btn btn-success">Add Customer</a>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table">
                        <thead>
                            <tr style="background-color:pink">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Delivery Date</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($customers as $customer) :
                            ?>
                                <tr>
                                    <td><?= $customer->id ?></td>
                                    <td><?= $customer->name ?></td>
                                    <td><?= $customer->email ?> </td>
                                    <td><?= ($customer->address) ?></td>
                                    <td><?= $customer->phone ?></td>
                                    <td><?= $customer->delivery_date ?></td>
                                    <td>
                                        <a href="customer-edit.php?id=<?= $customer->id ?>" class="btn btn-primary">Edit</a>
                                        <a href="customer-delete.php?id=<?= $customer->id ?>" class="btn btn-danger" onclick="return confirm('really?')">Delete</a>
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
