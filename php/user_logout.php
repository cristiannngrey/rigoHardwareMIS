<?php

    session_start();
    session_destroy();
    echo '<script type="text/javascript">
             window.onload = function () { alert("Log out successful!"); }
            </script>';
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">   
    </head>
    <div class="goLogin_btn">
        <a id="goLogin" href="../index.php">Go to Log in page.</a>
    </div>