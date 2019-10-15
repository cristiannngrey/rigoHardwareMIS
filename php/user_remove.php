<?php 
session_start();
include "dbconn.php";
$user = $_SESSION['uname'];
if(isset($user)){ } else {header('location:index'); }
$pageTitle = "Add User";
//include 'header.php';

$uname = $_POST['uname'];
$uid = $_POST['uid'];

$sql = "DELETE FROM users WHERE id = $uid AND username = '$uname'";
$conn->query($sql);
header('Location: ../user_management.php');
?>