<?php
include_once('db.php');
$db = new db();
$connect = $db->connect();
$sql = "SELECT * FROM products WHERE id = '" . $_GET['id'] . "'";
$query = $connect->prepare($sql);
$query->execute();
$products = array();
while ($result = $query->fetch(PDO::FETCH_OBJ)) {
    array_push($products, $result);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./CSS/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/css/animate.css">

    <link rel="stylesheet" href="./CSS/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./CSS/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./CSS/css/magnific-popup.css">
    <link rel="stylesheet" href="./CSS/css/aos.css">

    <link rel="stylesheet" href="./CSS/css/ionicons.min.css">

    <link rel="stylesheet" href="./CSS/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./CSS/css/jquery.timepicker.css">


    <link rel="stylesheet" href="./CSS/css/flaticon.css">
    <link rel="stylesheet" href="./CSS/css/icomoon.css">
    <link rel="stylesheet" href="./CSS/css/style.css">

</head>

<body class="goto-here">
    <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">+ 1235 2355 98</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">youremail@email.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">Vegefoods</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="shop.html">Shop</a>
                            <a class="dropdown-item" href="details.php">Single Product</a>
                            <a class="dropdown-item" href="cart.html">Cart</a>
                        </div>
                    </li>
                    <li class="nav-item cta cta-colored"><a href="Register.php" class="nav-link"><span class="icon-shopping_cart"></span>Register</a></li>
                    <li class="nav-item cta cta-colored"><a href="Login.php" class="nav-link"><span class="icon-shopping_cart"></span>Login</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->


    <br>
<div class="container col-md-12">
    <?php
    foreach ($products as $product) :
    ?>
        <div class="col-12 col-md-12 container">
    <div class="col-12 ">
        <h1 style="text-align: center; margin-top: 30px;margin-left: -100px;">PRODUCT INFORMATION</h1>
    </div>
    <div class="container" style="margin-top:-50px;">
   
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right" style="margin-top:-70px;">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img style="width:250px;" class="rounded-circle mt-5" src="./CSS/images/<?= $product->image?>"><span class="font-weight-bold"><?= number_format($product->price) ?>đ</span><span> </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label class="labels">Product</label>
                            <input class="form-control" name="name" value="<?= $product->name ?>" readonly>
                        </div>
                        <input class="form-control" name="price" type="hidden" value="<?= number_format($product->price) ?>">
                        <form action="add_to_cart.php?product_id=<?= $product->id ?>" method="post">

                        
                        <div class="col-md-6">
                            <label class="labels">Quantity</label>
                            <input class="form-control" name="quantity" value="<?= $product->quantity ?>" readonly>
                            <br>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Descript</label>
                            <input class="form-control" name="description" value="<?= $product->description ?>" readonly>
                        </div>
                        

                    </div>
                    <div class="mt-5 text-center">
                        <a style="float:left; width: 125px;" href="index.php" class="btn btn-dark">Back</a>
                        <button style="float:right; width: 140px;" type="submit" class="btn btn-danger"><span class="icon-shopping_cart"></span>Add to cart</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
</div>

    <?php endforeach; ?>
</div>

</html>