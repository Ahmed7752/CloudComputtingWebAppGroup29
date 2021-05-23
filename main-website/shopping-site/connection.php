<?php
    $host = 'shoppingdatabase.cs2ect7ytqjc.us-east-1.rds.amazonaws.com';
    $user = 'admin';
    $pass = 'Password';
    $db_name = '18124226';

    $conn = new mysqli($host,$user,$pass,$db_name);
    if ($conn->connect_error) {
      die('connection error: '. $conn->connect_error);
    }

?>
