<?php

// LocalHost

  $dbServername = "localhost";
  $dbUsername = 'root';
  $dbPassword = "";
  $dbName = "dropmesanjuka";


 $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

    echo "<h1 style='padding-top: 100px'>Please Check the databaseConfig.php file</h1>";
}

?>