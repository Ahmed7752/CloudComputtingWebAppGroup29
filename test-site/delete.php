<?php   
include("connection.php");  
$delete_id=$_GET['del'];  
$delete_query="delete  from users WHERE id='$delete_id'"; 
$run=mysqli_query($conn,$delete_query);  
if($run)  
{  
    echo '<script type="text/javascript">'; 
    echo 'alert("user has been deleted!");'; 
    echo 'window.location.href = "view_users.php";';
    echo '</script>';
}        
?>  
