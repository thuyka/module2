<?php
include_once('../db.php');
if($_POST && $_POST['name'] && $_POST['email'] && $_POST['address'] && $_POST['phone'] && $_POST['delivery_date']){
    $db = new db();
    $connect = $db->connect();
    $sql = "INSERT INTO customers ( name, email, address, phone, delivery_date) VALUES (
         '".$_POST['name']."',
         '".$_POST['email']."',
         '".$_POST['address']."',
         '".$_POST['phone']."',
         '".$_POST['delivery_date']."'
         )";
        // echo $sql;
        // die();
    $connect->exec($sql);
    header("location: customer-list.php");

}

?>
<?php include_once('../layouts/header.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h1 class="text-center text-warning">Add New customer</h1>
        <a href="customer-list.php" class="btn btn-success">Back</a> 
        <br>
            <div class="row">
                <div class="col-lg-12">
                    <form action="" method="post">

                        <div class="form-group">
                            <label>Name</label>
                            <input value="" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input value="" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input value="" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input value="" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Delivery date</label>
                            <input value="" name="delivery date" class="form-control">
                        </div>
                        <div class="form-group">
                        <br>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include_once('../layouts/footer.php'); ?>
