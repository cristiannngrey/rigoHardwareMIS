<?php
    session_start();
    $user = $_SESSION['uname'];
    if(isset($user)){ } else {header('location:index'); }
    $pageTitle = "User Management";
    include 'header1.php'; 
    include "php/dbconn.php";
    
    $sql = "SELECT * FROM items";
    $result = mysqli_query($conn,$sql);

    ?>
        <a href="admin.php"><-- Exit Item Management</a>

        <h2><center>Item List</center></h2>
        <div class = "table_container">
            <hr>
            <table>
                <tr>
                    <td><b>ID</b></td>
                    <td><b>Item Name</b></td>
                    <td><b>Price</b></td>
                </tr>
                <?php 
                    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
                        echo "<tr><td>".$row['id']."<td>" . $row['item_name'] . "</td><td>P " . number_format($row['item_price'], 2) . "</td></tr>";  //$row['index'] the index here is a field name
                        }
                ?>
            </table>
        </div>
      
        <div class = "actions">
            <div class = "column">
                <h3>Add Item</h3>
                <form action="php/item_add.php" method="post">
                    <input type="text" name="ItemName" placeholder="Item Name">
                    <input type="text" name="ItemPrice" placeholder="Item Price">
                    <button type="submit">Add</button>
                </form>
                <h3>Remove Item</h3>
                <form action="php/item_remove.php" method="post">
                    <input type="text" name="ItemId" placeholder="Item ID">
                    <input type="text" name= "ItemName" placeholder="Item Name">
                    <button type="submit">Remove</button>
                </form>
            </div>
            <div class = "column">
                <h3>Update Item Price</h3>
                <form action="php/item_update.php" method="post">
                    <input type="text" name="ItemId" placeholder="Item ID">
                    <input type="text" name= "Nprice" placeholder="New Price">
                    <button type="submit">Update</button>
                </form>
            </div>    
        </div>
    </body>
</html>
number_format($item_price,2)