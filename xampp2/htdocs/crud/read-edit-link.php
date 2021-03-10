<html>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amazondb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $sql = "SELECT genreID, genre from genretbl";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
?>
<table>
    
   <tr>
       <td><b>GenreID</b></td>
       <td><b>Genre</b></td>
  </tr>
<?php
        while($row =$result->fetch_assoc()) {
    ?>
   <tr>
       <td><?= $row["genreID"];?></td>
       <td><?= $row["genre"];?></td>
       <td><a href="update.php?genreID=<?=$row["genreID"];?>">Update</a></td>
       <td><a href="delete.php?genreID=<?=$row["genreID"];?>">Delete</a></td>
   </tr>

   <?php
        }
   ?>
</table> 
    <?php
    } else {
   ?>

<p>0 results</p>

   <?php
    }

    $conn->close();
?>

</body>
</html>