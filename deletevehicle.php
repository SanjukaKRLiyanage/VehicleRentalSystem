<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drop Me Admin</title>
    <link href="src/icon/dropme_logo.png" rel="icon">
    <link href="css/style.css" rel="stylesheet">
  <link href="css/styleadmin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
</style>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
    
    <div id="loading-container">
<img class="logos" src="src/images/deletelogo.png" alt="Site Logo">
</div>

</body>
</html>


<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "drop_me";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    // Delete data from the table
    $sql = "DELETE FROM vehicle WHERE vehicle_id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<br><br><br><br><br>Data deleted successfully.";
        echo "$id";
    } else {
        echo "Error deleting data: " . $conn->error;
        echo $id;
    }
}

// Close the database connection
$conn->close();
$delay = 3;
// URL of the page to redirect to
$redirectUrl = "updatevehicle.php";
echo "<meta http-equiv='refresh' content='" . $delay . ";url=" . $redirectUrl . "'>";
?>
