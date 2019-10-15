<?php
    session_start();
    $user = $_SESSION['uname'];
    if(isset($user)){ } else {header('location:index'); }
    $pageTitle = "User Management";
    include 'header1.php'; 
    include "php/dbconn.php";
    
    $sql = "SELECT * FROM users WHERE id > 1";
    $result = mysqli_query($conn,$sql);

    ?>
        <a href="admin.php"><-- Exit User Management</a>

        <div class = "table_container">
            <h2>Users List</h2>
            <hr>
            <table>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Username</b></td>
                    <td><b>Password</b></td>
                </tr>
                <?php 
                    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                        echo "<tr><td>".$row['id']."<td>" . $row['username'] . "</td><td>" . $row['password'] . "</td></tr>";  //$row['index'] the index here is a field name
                        }
                ?>
            </table>
        </div>
      
        <div class = "actions">
            <div class = "column">
                <h3>Add Cashier</h3>
                <form action="php/user_add.php" method="post">
                    <input type="text" name="uname" placeholder="Username">
                    <input type="text" name="pass" placeholder="Password">
                    <button type="submit">Add</button>
                </form><br/><br/>
            </div>
            <div class = "column">
                <h3>Remove Cashier</h3>
                <form action="php/user_remove.php" method="post">
                    <input type="text" name="uid" placeholder="User ID">
                    <input type="text" name= "uname" placeholder="Username">
                    <button type="submit">Remove</button>
                </form>
            </div>
        </div>
    </body>
</html>