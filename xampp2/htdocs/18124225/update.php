<?php   include("bootstrap.php")    ?>
<?php   include("header.php")    ?>
<?php   include("connection.php")    ?>

<?php   
if( isset( $_SESSION["email"] ) ) { 
if(isset($_POST['update_page'])){
    
    $loged_in_user = $_SESSION["email"];
    $oldpass = $_POST['oldpass'];
    $newpass= $_POST['newpass'];
    $repeatpass= $_POST['repeatpass'];
    $updatedpass = $newpass;
    if(empty($newpass && $repeatpass && $oldpass))
{
    echo '<script type="text/javascript">'; 
    echo 'alert("Please enter new password!");'; 
    echo 'window.location.href = "update_test.php";';
    echo '</script>';
}else{
    
    $sql = ("SELECT `id`,`user_pass` FROM `users` WHERE `user_email` = '$loged_in_user'");
    $result = $conn->query($sql);
        

        
    while($row =$result->fetch_assoc()) {
        $user_pass = $row['user_pass'];
        $user_id = $row['id'];
        if ($oldpass == $user_pass){
            
    $sql = ("UPDATE users SET user_pass='$updatedpass' WHERE `id` = '$user_id'");
	$result = $conn->query($sql);
            
    echo '<script type="text/javascript">'; 
    echo 'alert("Password has been changed");'; 
    echo 'window.location.href = "login.php";';
    echo '</script>';
            
        }else{
    echo '<script type="text/javascript">'; 
    echo 'alert("Password does not match!");'; 
    echo 'window.location.href = "update_test.php";';
    echo '</script>';
        }
    }
        

}
}
}else   
{
    echo "PLEASE LOGIN TO CHANGE PASSWODS";
}
?>  


<html>
<head>
</head>
    <body>
        <div class="container">
            <div class="center2">
                <div class="col-md-6 ">
                    <form method="post" action="update.php">  
                        <fieldset>  
                            <div class="form-group">  
                                    <input class="form-control" placeholder=" Old Password" name="oldpass" type="text" autofocus>  
                            </div>  
                            <div class="form-group">  
                                    <input class="form-control" placeholder=" new Password" name="newpass" type="password" autofocus>  
                            </div>  
                            <div class="form-group">  
                                    <input class="form-control" placeholder=" Repeat new password" name="repeatpass" type="password">  
                            </div>    
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Update" name="update_page" >  
                        </fieldset>  
                    </form>
                </div>
            </div>
        </div> 
    </body>