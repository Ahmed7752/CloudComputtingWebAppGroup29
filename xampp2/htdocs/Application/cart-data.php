<?php   include_once 'bootstrap.php';   ?>
<?php
if(!empty($_SESSION["cart_item"])){
$item_total = 0;
?>
<div class="container">
    <div class="col-md-12">
        <div class="card shadow">    
            <div class="cart-results">
                <table cellpadding="10" cellspacing="1">
                    <tbody>
                        <tr>
                            <th><strong>Name</strong></th>
                            <th><strong>Quantity</strong></th>
                            <th><strong>Price</strong></th>
                            <th><strong>Action</strong></th>
                        </tr>
<?php
foreach ($_SESSION["cart_item"] as $item){
?>
                        <tr>
                            <td><strong><?php echo $item["product_title"]; ?></strong></td>
                            <td><?php echo $item["quantity"]; ?></td>
                            <td><?php echo "$".$item["price"]; ?></td>
                            <td><a href="cart.php?action=remove&id=<?php echo $item["id"]; ?>" class="btnRemoveAction">Remove Item</a></td>
                        </tr>
<?php
$item_total += ($item["price"]*$item["quantity"]);
}
?>
                        <tr>
                            <td colspan="3" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <a href="products.php?action=empty" class="empty_cart"><input type="button" class="btn btn-warning  my-3" value="Empty Cart"></a>
<?php
}else{
echo "<div><center>cart is empty</center></div>";
}
?>
        </div>
    </div>
</div>
