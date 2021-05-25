 <?php  
include("connection.php");     
if(isset($_POST['admin_login']))
{  
$admin_name=$_POST['admin_name'];  
$admin_pass=$_POST['admin_pass'];  
$admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
$result=mysqli_query($conn,$admin_query);        
if(mysqli_num_rows($result)>0)  
{    
echo "<script>window.open('view_users.php','_self')</script>";  
}
else {echo"<script>alert('Admin Details are incorrect..!')</script>";}        
}  
?>  