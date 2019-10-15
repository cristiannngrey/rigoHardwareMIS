<?php 
session_start();
include "dbconn.php";
$user = $_SESSION['uname'];
if(isset($user)){ } else {header('location:index'); }
$pageTitle = "Add User";
//include 'header.php';

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "INSERT INTO users (username, password) VALUES ('$uname', '$pass')";
$result_v = $conn->query($sql);
header('Location: ../user_management.php');
?>