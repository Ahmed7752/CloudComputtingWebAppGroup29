<link rel="stylesheet" type="text/css" href="mastercss/style1.css">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.php"><img src="https://shopping-website-s3.s3.amazonaws.com/images/skan-logo.png" class="logo"/>
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="Registration.php">Register</a>
      </li>
    </ul>
      <?php include("welcome.php"); ?>
      <button type="submit" class="btn btn-dark mx-4" onclick="location.href='update.php'">change password</button>
      

        <button type="submit" class="btn btn-info mx-4" onclick="location.href='Admin_login.php'">Admin Login</button>
      <button type="submit" class="btn btn-warning mx-4" onclick="location.href='cart.php'"><i class="fas fa-shopping-cart"></i></button>
  </div>
</nav>