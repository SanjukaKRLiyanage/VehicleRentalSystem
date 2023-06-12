<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <link href="css/styleadmin.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drop Me</title>
    <link href="src/icon/dropme_logo.png" rel="icon">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">



</style>
</head>

<body class="body">
  <div id="loading-container">
  <img class="logos" src="src/images/updatelogo.png" alt="Site Logo">
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

// Get the values from the form   
$vehicleid = $_POST['Vehicleid'];
$vehicleNumber = $_POST['VehicleNumber'];
$vehicleModel = $_POST['VehicleModel'];
$vehicleBrand = $_POST['Vehiclebrand'];
$manufactureYear = $_POST['ManufactureYear'];
$chassisNumber = $_POST['ChaseNumber'];
$type = $_POST['type'];
$licenseNumber = $_POST['lichenNumber'];
$originCountry = $_POST['OriginCountry'];
$insuranceNumber = $_POST['InsuranceNumber'];
$vehiclePrice = $_POST['VehiclePrice'];
$vehicleStatus = $_POST['VehicleStatus'];

echo $vehicleid;
echo $vehicleNumber;
// Update the database with the new values
$sql = "UPDATE vehicle SET
        vehicle_number = '$vehicleNumber',
        model = '$vehicleModel',
        brand = '$vehicleBrand',
        manufacture_year = '$manufactureYear',
        chassis_number = '$chassisNumber',
        type = '$type',
        license_number = '$licenseNumber',
        origin_country = '$originCountry',
        insurance_number = '$insuranceNumber',
        price = '$vehiclePrice',
        status = '$vehicleStatus'
        WHERE vehicle_id = $vehicleid";
        

if ($conn->query($sql) === TRUE) {
    echo 'Vehicle details updated successfully';
 } else {
    echo 'Error updating vehicle details: ' . $conn->error;
}
$conn->close();
?>

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
    

<?php
$delay = 3;
// URL of the page to redirect to
$redirectUrl = "updatevehicle.php";
echo "<meta http-equiv='refresh' content='" . $delay . ";url=" . $redirectUrl . "'>";
?>

</body>
</html>


