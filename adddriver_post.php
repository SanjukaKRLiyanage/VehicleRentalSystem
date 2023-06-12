
<?php
require 'addsucsessfull.php';
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "drop_me";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $driverName = $_POST["name"];
    $driverAddress = $_POST["Address"];
    $driverContactNumber = $_POST["Number"];
    $driverEmail = $_POST["Email"];
    $driverIDNumber = $_POST["ID_Number"];
    $licenseNumber = $_POST["lichenNumber"];
    $insuranceNumber = $_POST["InsuranceNumber"];
    $driverDOB = $_POST["DOB"];
    $driverGender = $_POST["gender"];
    $bankName = $_POST["bankname"];
    $branch = $_POST["branch"];
    $accountNumber = $_POST["AccocuntNumber"];
    $accountName = $_POST["AccocuntName"];

    // Prepare and execute the SQL statement
    $sql = "INSERT INTO driver (f_name, l_name, dob, address, gender, lison_num, insurance_num)
            VALUES ('$driverName', '$driverAddress', '$driverDOB', '$driverAddress', '$driverGender', '$licenseNumber', '$insuranceNumber')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Driver data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<?php
// Wait for 1 second (1000 milliseconds)
usleep(2000);


// Redirect to selectvehicle.php
header("refresh:1; url=adddriver.php");
exit;
?>