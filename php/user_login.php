<?php 
session_start();
include "dbconn.php";

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users where username='$uname' AND password='$pass'";
$result =mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
	if ($row>0) {   
		//session_start();
		$_SESSION['uname'] = $uname;
		$sql9 = "SELECT * FROM users where username='$uname'";
        $result9 = mysqli_query($conn,$sql9);
            
		$row9 = mysqli_fetch_array($result9);
		$name9 = $row9['username'];
		$sql8 = "INSERT INTO logins values('','$uname',CURRENT_TIMESTAMP)";
        $result8 = mysqli_query($conn,$sql8);   
        if($uname == 'admin'/* || $uname == 'overide*/){
            header( 'Location: ../admin.php');
        }else{
            header ('Location: ../cashier.php');
        }
	} else {
		
		echo "User not Found"; 
		
	}

?>