    <?php
        include("header.php")
    ?>
      <?php
        include("bootstrap.php")
        ?>
      
<!doctype html>
<html>
  <head lang="en">

    <title>Products</title>
  </head>
  <body>
      
    <div class="container">
        <div>
            <img src="https://shopping-website-s3.s3.amazonaws.com/images/supermarket-aisle.jpg" class="container" />
        </div>
    </div> 
    <div class="container">
         <?php  include("product-data.php")    ?>
    </div>
  </body>
</html>