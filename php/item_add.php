<?php 
session_start();
include "dbconn.php";
$user = $_SESSION['uname'];
if(isset($user)){ } else {header('location:index'); }
$pageTitle = "Add Item";
//include 'header.php';

$iname = $_POST['ItemName'];
$iprice = $_POST['ItemPrice'];

$sql = "INSERT INTO items (item_name, item_price) VALUES ('$iname', '$iprice')";
$result_v = $conn->query($sql);
header('Location: ../item_management.php');
?>