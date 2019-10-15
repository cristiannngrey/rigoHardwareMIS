<?php
    session_start();
    $user = $_SESSION['uname'];
    if(isset($user)){ } else {header('location:index'); }
    $pageTitle = "Admin";
    include 'header.php';
?>
<form action="php/add_user_method.php" method="POST">
    <div class="form-group">
        <p>Username: </p>
        <input type="text" name="uname" id="input" class="form-control" value="" placeholder="Username" required>
		<p>Password: </p>
		<input type="text" name="pass" id="input" class="form-control" value="" placeholder="Password" required>
		<p></p>
        <center><button type="submit" style='background-color: #32CD32;'>Create User</button></center>
        
</body>
</html>