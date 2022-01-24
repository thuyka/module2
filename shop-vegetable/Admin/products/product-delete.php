<?php
session_start();
include ('db.php');

// echo "<pre>";
// print_r($_REQUEST);
$id = (isset($_REQUEST['id']) && !empty($_REQUEST['id']) ) ? ($_REQUEST['id'] ):"";
try {
    $db = new db();
$connect = $db->connect();
$sql = "DELETE FROM `products` WHERE `products`.`id` = $id";

$delete = $connect->exec($sql);
if (!$delete) {
    throw new Exception();
}
header("location: product-list.php");
} catch (Exception $th) {
    $_SESSION['error'] = "không thể xóa vì lỗi khóa ngoại";
header("location: product-list.php");

    //throw $th;
}

?>