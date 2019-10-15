<?php
    session_start();
    $user = $_SESSION['uname'];
    if(isset($user)){ } else {header('location:index'); }
    $pageTitle = "Admin";
    include 'header.php';
?>
        <div class="menu_container">
            <center>
            <a href = "user_management.php"><img src="includes/manageUsers.png" alt="Manage User" height = "100"></a><br><br>
            <a href = "item_management.php"><img src="includes/manageItems.png" alt="Manage Items" height = "100"></a><br><br></center>
        </div>
        <!--
        <div class ="column">
            <h3>Change Password</h3>
            <form action="php/change_pass.php" method="post">
            <input type="password" name="oldpass" placeholder="Current Password" required><br><br>
            <input type="password" name="newpass" placeholder="New Password" required><br><br>
            <button type="submit">Confirm</button>
        </div>
-->
</body>
</html>