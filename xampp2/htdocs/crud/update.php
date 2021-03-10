<?php
// include database connection file
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



// Check if form is submitted for update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$genreid = $_POST['genreID'];
	
	$genre=$_POST['genre'];

	// update genre data
	$sql = ("UPDATE genretbl SET genre='$genre' WHERE genreID=$genreid");
	$result = $conn->query($sql);
	// Redirect to homepage to display updated genre in list
	header("Location: read-edit-link.php");
}

// Display selected genre data based on genreID
// Getting genreID from url
$genreid = $_GET['genreID'];

// Fetch genre data based on genreID
$sql = "SELECT * FROM genretbl WHERE genreID=$genreid";
$result = $conn->query($sql);
while($row =$result->fetch_assoc()) 
{
	$genre = $row['genre'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>

<body>

	
	<form name="update_user" method="post" action="update.php">
		<table border="0">
			<tr> 
				<td>genre</td>
				<td><input type="text" name="genre" value=<?php echo $genre;?>></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="genreID" value= <?php echo $_GET['genreID'];?> ></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>