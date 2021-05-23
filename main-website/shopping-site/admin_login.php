<?php   include("bootstrap.php");   ?>
<?php   include("admin-data.php");  ?>
<!doctype html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="mastercss/style1.css">
        <title>Admin Login</title>
    </head>
    <body>
        <a class="navbar-brand" href="index.php"><img src="https://shopping-website-s3.s3.amazonaws.com/images/skan-logo.png" class="logo" alt="website logo"/></a>
        <a id="user-button" class="btn btn-info mx-4" href="Login.php">User Login</a>
    <div class="container">
        <div class="center1">
            <div class="col-md-6">
                <div class="login-panel panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="admin_login.php">
                            <fieldset>
                                <div class="form-group"  >
                                    <input class="form-control" placeholder="Name" name="admin_name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">
                                </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="admin_login" >
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
