<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "politibot";

try {

  $conn = new PDO("mysql:host=$dbServername;dbName=$dbName", $dbUsername, $dbPassword);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // echo "Connected!";

}

catch(PDOException $e) {

  echo "Connection failed: " . $e->getMessage();

}

 ?>
