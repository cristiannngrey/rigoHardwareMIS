<?php
    //session_start();
    include 'header1.php';
    $pageTitle = "Cashier";
    $user = $_SESSION['uname'];
    if(isset($user)){ } else {header('location:index'); }
    

	require_once("dbcontroller2.php");
    $db_handle = new DBController();
    if(!empty($_GET["action"])) {
        switch($_GET["action"]) {
            case "add":
                if(!empty($_POST["quantity"])) {
                    $productByCode = $db_handle->runQuery("SELECT * FROM items WHERE item_code='" . $_GET["item_code"] . "'");
                    $itemArray = array($productByCode[0]["item_code"]=>array('item_name'=>$productByCode[0]["item_name"], 'item_code'=>$productByCode[0]["item_code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"]));
                    
                    if(!empty($_SESSION["cart_item"])) {
                        if(in_array($productByCode[0]["item_code"],array_keys($_SESSION["cart_item"]))) {
                            foreach($_SESSION["cart_item"] as $k => $v) {
                                    if($productByCode[0]["item_code"] == $k) {
                                        if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                            $_SESSION["cart_item"][$k]["quantity"] = 0;
                                        }
                                        $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                                    }
                            }
                        } else {
                            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                        }
                    } else {
                        $_SESSION["cart_item"] = $itemArray;
                    }
                }
            break;
            case "remove":
                if(!empty($_SESSION["cart_item"])) {
                    foreach($_SESSION["cart_item"] as $k => $v) {
                            if($_GET["id"] == $k)
                                unset($_SESSION["cart_item"][$k]);				
                            if(empty($_SESSION["cart_item"]))
                                unset($_SESSION["cart_item"]);
                    }
                }
            break;
            case "empty":
                unset($_SESSION["cart_item"]);
            break;	
        }
    }
?>  
     <!--                             Item Listing                               -->
     <div class = "column">
        <div class="txt-heading"><h2>Items<h2></div>
            <div id="product-grid">
                <?php
                    $product_array = $db_handle->runQuery("SELECT * FROM items ORDER BY item_name ASC");
                    if (!empty($product_array)) { 
                        foreach($product_array as $key=>$value){
                ?>
                    <div class="product-item">
                        <form method="post" action="cashier.php?action=add&item_code=<?php echo $product_array[$key]["item_code"]; ?>">
                            <div class="product-tile-footer">
                                <div class="product-title">
                                    <?php echo '<strong>'.$product_array[$key]["item_name"].'</strong>'; ?>
                                </div>
                                <div class="product-price">
                                    <?php echo "Price:<strong> P ". number_format($product_array[$key]["item_price"],2).'</strong>'; ?>
                                    <br/><br/>
                                    Qty: <input type="number" name="quantity" value="1" min="1"><br/><br/>
                                    <input type="submit" value="Add to Cart" class="btnAddAction">
                                </div>
                            </div>
                        </form>
                    </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    
    <!-- **************************** Cart *************************** -->
    <div class = "column">
            <div class="txt-heading"><h2>Shopping Cart</h2></div>
            <div id="shopping-cart">
            <div class = "checkout_btn">
            <a id="btnCheckout" href="php/checkout.php">Checkout</a>
            </div>
            <a id="btnEmpty" href="cashier.php?action=empty">Empty Cart</a>
            <?php
            if(isset($_SESSION["cart_item"])){
                $total_quantity = 0;
                $total_price = 0;
            ?>	
            <table class="tbl-cart">
                <tbody>
                    <tr>
                        <th style="text-align:left;">Item Name</th>
                        <th style="text-align:right;" width="5%">Quantity</th>
                        <th style="text-align:right;" width="20%">Unit Price</th>
                        <th style="text-align:right;" width="25%">Price</th>
                        <th style="text-align:center;" width="5%">Remove</th>
                    </tr>	
                    <?php		
                        foreach ($_SESSION["cart_item"] as $item){
                            $item_price = $item["quantity"]*$item["price"];
                            ?>
                                    <tr>
                                    <td><?php echo $item["item_code"]; ?></td>
                                    <td><?php echo $item["name"]; ?></td>
                                    <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                                    <td  style="text-align:right;"><?php echo "P ".$item["price"]; ?></td>
                                    <td  style="text-align:right;"><?php echo "P ". number_format($item_price,2); ?></td>
                                    <td style="text-align:center;"><a href="cashier.php?action=remove&id=<?php echo $item["id"]; ?>" class="btnRemoveAction"><img src="includes/icon-delete.png" alt="Remove Item" /></a></td>
                                    </tr>
                                    <?php
                                    $total_quantity += $item["quantity"];
                                    $total_price += ($item["price"]*$item["quantity"]);
                            }
                            ?>

                    <tr>
                        <td>Total Qty:</td>
                        <td><?php echo $total_quantity; ?></td>
                        <td></td>
                        <td><strong><strong></td>
                        <td colspan = "2" float="left"><strong><?php echo 'P'. number_format($total_price, 2); ?></strong></td>                    </tr>
                </tbody>
            </table>		
            <?php
                } else {
            ?>
            <div class="no-records">Your Cart is Empty</div>
            <?php 
        }
            ?>
    </div>
    </div>
</body>
</html>