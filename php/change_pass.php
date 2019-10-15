<?php 
session_start();
include "dbconn.php";
$user = $_SESSION['uname'];
if(isset($user)){ } else {header('location:index'); }
//include 'header.php';

$uname = 'admin';
$cpass = $_POST['oldpass'];
$npass = $_POST['newpass'];

$sql1 = "SELECT 'password' FROM users WHERE username = '$uname' AND password = '$cpass'";
$result1 = mysqli_query($conn, $sql1);
echo $result1;
/*
if($result1 == $cpass){
    $sql = "UPDATE users SET password = '$npass' WHERE username = '$uname' AND password = '$cpass' VALUES ";
    $result_v = $conn->query($sql);
    echo "Password Changed Successfully!";
    //header('Location: ../user_management.php');
} else {
    echo "You entered an incorrect password";
}*/
?>