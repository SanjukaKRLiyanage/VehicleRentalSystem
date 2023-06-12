
<?php
require 'addsucsessfull.php';
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "drop_me";

// Create a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the values from the form
    $vehicleNumber = $_POST["VehicleNumber"];
    $brand = $_POST["VehicleBrand"];
    $model = $_POST["VehicleModel"];
    $manufactureYear = $_POST["ManufactureYear"];
    $originCountry = $_POST["OriginCountry"];
    $chassisNumber = $_POST["ChassisNumber"];
    $licenseNumber = $_POST["LicenseNumber"];
    $insuranceNumber = $_POST["InsuranceNumber"];

    // Prepare the SQL statement
    $sql = "INSERT INTO vehicle (vehicle_number, brand, model, manufacture_year, origin_country, chassis_number, license_number, insurance_number, status)
            VALUES ('$vehicleNumber', '$brand', '$model', '$manufactureYear', '$originCountry', '$chassisNumber', '$licenseNumber', '$insuranceNumber', 'Available')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<?php
// Wait for 1 second (1000 milliseconds)
usleep(2000);


// Redirect to selectvehicle.php
header("refresh:1; url=addvehicle.php");
exit;
?>