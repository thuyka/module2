<?php
include_once('../products/db.php');

// echo "<pre>";
// print_r($_REQUEST);
$id = (isset($_REQUEST['id']) && !empty($_REQUEST['id']) ) ? ($_REQUEST['id'] ):"";
$db = new db();
$connect = $db->connect();
$sql = "DELETE FROM `categories` WHERE `categories`.`id` = $id";
$connect->exec($sql);
header("location: index.php");
?>