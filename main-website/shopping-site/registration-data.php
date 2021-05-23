
<?php  
      
    include("connection.php");
    if(isset($_POST['register']))  
    {  
        $user_name=$_POST['name'];
        $user_pass=$_POST['pass']; 
        $user_email=$_POST['email'];  
      
      
        if($user_name=='')  
        {  
              
            echo"<script>alert('Please enter the name')</script>";  
    exit();  
        }  
      
        if($user_pass=='')  
        {  
            echo"<script>alert('Please enter the password')</script>";  
    exit();  
        }  
      
        if($user_email=='')  
        {  
            echo"<script>alert('Please enter the email')</script>";  
        exit();  
        }  
      
        $check_email_query="select * from users WHERE user_email='$user_email'";  
        $result=mysqli_query($conn,$check_email_query);  
      
        if(mysqli_num_rows($result)>0)  
        {  
    echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
    exit();  
        }  
      
        $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";  
        if(mysqli_query($conn,$insert_user))  
        {  
            echo"<script>window.open('login.php','_self')</script>";  
        }  
      
      
      
    }