<link rel="stylesheet" type="text/css" href="mastercss/style1.css">   
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
<?php   session_start();  ?> 
<?php  
      
    if(!$_SESSION['email'])  
    {  
        header("Location: login.php");
    }
    ?>  
<div class="email_login">
    <?php  
    echo $_SESSION['email'];
    ?> 
</div>
<button type="submit" class="btn btn-dark mx-4" onclick="location.href='logout.php'">Logout</button>
      