<?php 
session_start();
include "dbconn.php";
$user = $_SESSION['uname'];
if(isset($user)){ } else {header('location:index'); }
$pageTitle = "Update Price";
//include 'header.php';

$itemId = $_POST['ItemId'];
$newPrice = $_POST['Nprice'];

$sql = "UPDATE items SET item_price = $newPrice WHERE id = $itemId";
$conn->query($sql);
header('Location: ../item_management.php');
?>