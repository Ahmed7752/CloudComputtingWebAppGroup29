<?php
    include("bootstrap.php");
?>  
<?php
    include("Registration-data.php");
?>  
   <!doctype html>   
<html>  
    <head lang="en">    
        <meta charset="UTF-8">  
        <link rel="stylesheet" type="text/css" href="mastercss/style1.css">
        <title>Registration</title>  
    </head>  
    <body>  
        <a class="navbar-brand" href="index.php"><img src="images/skan-logo.png" alt="website logo" class="logo"/></a>
        <a id="user-button" class="btn btn-info mx-4 " href="Admin_login.php">Admin Login</a>
        <div class="container">
            <div class="center1">
                <div class="col-md-6 ">
                    <div class="login-panel panel panel-success">  
                        <div class="panel-heading">  
                            <h3 class="panel-title">Registration</h3>  
                        </div>  
                        <div class="panel-body">  
                            <form method="post" action="registration.php">  
                                <fieldset>  
                                    <div class="form-group">  
                                    <input class="form-control" placeholder="Username" name="name" type="text" autofocus>  
                                    </div>  
      
                                    <div class="form-group">  
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" >  
                                    </div>  
                                    <div class="form-group">  
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                                    </div>  
                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
      
                                </fieldset>  
                            </form>  
                        <div class="center-form">
                        <b>Already registered ?</b> <br><a href="login.php">Login here</a>
                        </div>
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>  
    </body>  
</html>  
      