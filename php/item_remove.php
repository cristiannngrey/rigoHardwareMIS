<?php 
session_start();
include "dbconn.php";
$user = $_SESSION['uname'];
if(isset($user)){ } else {header('location:index'); }
$pageTitle = "Remove Item";
//include 'header.php';

$itemId = $_POST['ItemId'];
$itemName = $_POST['ItemName'];

$sql = "DELETE FROM items WHERE id = $itemId AND item_name = '$itemName'";
$conn->query($sql);
header('Location: ../item_management.php');
?>