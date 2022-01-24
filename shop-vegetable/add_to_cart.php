<?php
session_start();
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
include_once('db.php');
$db = new db();
$connect = $db->connect();
$sql = "SELECT * FROM products WHERE id = '" . $_GET['product_id'] . "'";
$query = $connect->prepare($sql);
$query->execute();
$products = array();

while ($result = $query->fetch(PDO::FETCH_OBJ)) {
    $products = $result;
}
// echo "<pre>";
// print_r($products);
// echo "</pre>";


if (isset($_SESSION['code'])){
    $code = $_SESSION['code'];
}else{
    $_SESSION['code'] = time();
}
$sql = "SELECT * FROM cart WHERE code = $code ";
$query = $connect->prepare($sql);
$query->execute();
$carts = array();

while ($result = $query->fetch(PDO::FETCH_OBJ)) {
    array_push($carts, $result);

}

foreach ($carts as $cart) {
 
    if ($cart->product_id == $_REQUEST["product_id"]) {
    $sql = "UPDATE `cart` SET `quantity` = '".$cart->quantity+$_REQUEST["quantity"]."' WHERE `cart`.`id` = $cart->id";
    $query = $connect->prepare($sql);
    $query->execute();
    header("location: cart.php");
        die();
    

    }
}
$sql = "INSERT INTO `cart` (`id`, `product_id`, `quantity`, `price`, `code`) VALUES (NULL, '". $_GET['product_id']."', '".$_REQUEST["quantity"]."', '".$products->price."', '$code');";
echo $sql;

$query = $connect->prepare($sql);
$query->execute();
header("location: cart.php");
echo $code;

?>