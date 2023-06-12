<?php 
session_start();
$reservation_id = $_SESSION1['$reservation_idpass'];
 ?>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "drop_me";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reservation_id = $_POST["reservation_id"]; // Assuming you have a form field with name "reservation_id"
    $vehicle_type = $_POST["vehicle_type"]; // Assuming you have a radio button group with name "vehicle_type"

    // Update the reservation table with the selected vehicle type
    $sql = "UPDATE reservation SET vehicle_type = '$vehicle_type' WHERE reservation_id = '$reservation_id'";
    if ($conn->query($sql) === TRUE) {
        echo "Reservation updated successfully.";
    } else {
        echo "Error updating reservation: " . $conn->error;
    }
}

$conn->close();
?>


<?php
// Close the database connection
$conn->close();
?>

<?php
// Wait for 1 second (1000 milliseconds)
usleep(1000);


// Redirect to selectvehicle.php
header("refresh:1; url=payment.php");
exit;
?>
