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

    $genre = $_POST['genre'];

$sql = "INSERT INTO genretbl (genreID, genre) VALUES ('', '$genre')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
    header('refresh:3; url=http://localhost:8000/week9/read-edit-link.php')
?>
</body>
</html>