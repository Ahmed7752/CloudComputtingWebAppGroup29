<?php    include("bootstrap.php");   ?>  
<?php    include("connection.php");   ?>  
<?php    session_start();    ?>  
  
      
       <?php  
    if(isset($_POST['login']))  
    {  
        $user_email=$_POST['email'];  
        $user_pass=$_POST['pass'];  
      
        $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";  
      
        $result=mysqli_query($conn,$check_user);  
      
        if(mysqli_num_rows($result))  
        {  
            echo "<script>window.open('index.php','_self')</script>";  
      
            $_SESSION['email']=$user_email;
      
        }  
        else  
        {  
          echo "<script>alert('Email or password is incorrect!')</script>";  
        }  
    }  
    ?>  

      
    <?php  
    if(isset($_POST['login']))  
    {  
        $user_email=$_POST['email'];  
        $user_pass=$_POST['pass'];  
      
        $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";  
      
        $result=mysqli_query($conn,$check_user);  
      
        if(mysqli_num_rows($result))  
        {  
            echo "<script>window.open('index.php','_self')</script>";  
      
            $_SESSION['email']=$user_email;
      
        }  
        else  
        {  
          echo "<script>alert('Email or password is incorrect!')</script>";  
        }  
    }  
    ?>  
      
   <!doctype html>   
    <html>  
    <head lang="en">   
        <link rel="stylesheet" type="text/css" href="mastercss/style1.css">
        <title>Login</title>  
    </head>  
    <body>  
        <a class="navbar-brand" href="index.php"><img src="https://shopping-website-s3.s3.amazonaws.com/images/skan-logo.png" alt="website logo" class="logo"/></a>
      <a id="user-button" class="btn btn-info mx-4 " href="Admin_login.php">Admin Login</a>
      
    <div class="container">
        <div class="center1">  
            <div class="col-md-6">  
                <div class="login-panel panel panel-success">  
                    <div class="panel-heading">  
                        <h3 class="panel-title">Sign In</h3>  
                    </div>  
                    <div class="panel-body">  
                        <form method="post" action="login.php">  
                            <fieldset>  
                                <div class="form-group"  >  
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Password" name="pass" type="password" >  
                                </div>  
      
      
                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >  
                            </fieldset>  
                        </form> 
                        <div class="center-form">
                        <b>Not registered ?</b> <br><a href="Registration.php">Register here</a>
                        </div>
                    </div>  
                </div>  
            </div>  
        </div>  
   </div>  
    </body>  
    </html>


   