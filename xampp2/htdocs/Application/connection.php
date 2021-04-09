<?php
  $hostname = "db-for-website.cfv3cdy44ueb.us-east-1.rds.amazonaws.com";
  $username = "admin";
  $password = "CloudComputing";
  $dbname = "18124225";
  $port = "3306"
// Create connection

  $conn = new mysqli($hostname,$username, $password, $dbname, $port);
  if ($conn->connect_error) {
    die("Connection failed because: " . $conn->connect_error);
  }

?>
