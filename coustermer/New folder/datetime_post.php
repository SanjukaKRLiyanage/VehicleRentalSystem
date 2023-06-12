<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "drop_me";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Generate a unique reservation ID
$reservation_id = generateReservationID();

// Check if the reservation ID already exists
while (isReservationIDExists($reservation_id, $conn)) {
    $reservation_id = generateReservationID();
}

// Get the form data
$pickup_location = $_POST['pickuplocation'];
$pickup_date = $_POST['pickupdate'];
$pickup_time = $_POST['pickuptime'];
$return_location = $_POST['returnlocation'];
$return_date = $_POST['returndate'];
$return_time = $_POST['returntime'];
$drivertype = $_POST['drivertype'];

// Select a vehicle ID from the vehicle table where the status is "available"
$sql = "SELECT vehicle_id FROM vehicle WHERE status = 'available'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $vehicle_id = $row['vehicle_id'];
} else {
    // No available vehicles found
    echo "No available vehicles. Please try again later.";
    $conn->close();
    exit;
}

// Select a random driver ID from the driver table
$sql = "SELECT driver_id FROM driver ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $driver_id = $row['driver_id'];
} else {
    // No drivers found
    echo "No drivers available. Please try again later.";
    $conn->close();
    exit;
}

// Check if the return date is empty
if (empty($return_date)) {
    echo "Return date is required.";
    $conn->close();
    exit;
}

// Prepare the SQL statement
$sql = "INSERT INTO reservation (reservation_id, vehicle_id, driver_id, pickup_time, pickup_date, return_time, return_date, pickup_location, return_location, drivertype)
VALUES ('$reservation_id', '$vehicle_id', '$driver_id', '$pickup_time', '$pickup_date', '$return_time', '$return_date', '$pickup_location', '$return_location', '$drivertype')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

// Function to generate a random reservation ID
function generateReservationID() {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $max_length = 6;
    $reservation_id = '';
    $character_count = strlen($characters);

    for ($i = 0; $i < $max_length; $i++) {
        $reservation_id .= $characters[rand(0, $character_count - 1)];
    }

    return $reservation_id;
}

// Function to check if the reservation ID already exists in the table
function isReservationIDExists($reservation_id, $conn) {
    $sql = "SELECT COUNT(*) FROM reservation WHERE reservation_id = '$reservation_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_row();
    return $row[0] > 0;
}
?>

<?php
// Wait for 1 second (1000 milliseconds)
usleep(1000);

session_start();
$_SESSION['$reservation_idpass'] = '$reservation_id';
header("Location: selectvehicle.php");


// Redirect to selectvehicle.php
header("refresh:1; url=selectvehicle.php");
exit;
?>
