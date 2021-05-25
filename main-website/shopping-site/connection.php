<?php
    $host = 'database-1b.cs2ect7ytqjc.us-east-1.rds.amazonaws.com';
    $user = 'admin';
    $pass = 'Password';
    $db_name = 'SiteDatabase1b';

    $conn = new mysqli($host,$user,$pass,$db_name);
    if ($conn->connect_error) {
      die('connection error: '. $conn->connect_error);
    }

?>
