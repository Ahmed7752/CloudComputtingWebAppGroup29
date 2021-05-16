<?php
include_once 'connect.php';


 $sql = "SELECT * FROM products ORDER BY id ASC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row

?>
<?php   include("bootstrap.php")    ?>
                <div class="product-cards">
                <div class="row text-center py-5">
                                            <?php
                        while($product =$result->fetch_assoc()) {
                ?>

                <div class="col-md-3 col-sm-6 col-6 my-3 my-md-0">
                    <form method="post" action="cart.php?action=add&id=<?php echo $product['id']; ?>">
                        <div class="card shadow">
                        <div>
                                <img class="img-fluid card-img-top" src="<?php echo $product['image']; ?>" >
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product["product_title"]; ?></h5>
                                <h6>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </h6>
                                <p><?php echo $product["product_desc"]; ?></p>
                                <h5>
                                    <span class="price"><?php echo "£".$product["price"]; ?></span>

                                </h5>
                            <div><input type="number" class="btn btn-light" name="quantity" value="1" max="10" min="1" size="2" />
                                    <br><input type="submit" class="btn btn-warning  my-3" value="Add to cart"  />
                            </div>

                        </div>
                        </div>

                    </form>
                </div>
<?php
                        }
?>

                </div>
                </div>
<?php
    } else {
   ?>

<p>0 results</p>

   <?php
    }

    $conn->close();
?>
