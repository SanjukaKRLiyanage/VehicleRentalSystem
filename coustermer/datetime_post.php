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
$type = $_POST["vehicle_type"];

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
$sql = "INSERT INTO reservation (reservation_id, vehicle_id, driver_id, pickup_time, pickup_date, return_time, return_date, pickup_location, return_location, drivertype, vehicle_type)
VALUES ('$reservation_id', '$vehicle_id', '$driver_id', '$pickup_time', '$pickup_date', '$return_time', '$return_date', '$pickup_location', '$return_location', '$drivertype', '$type')";

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


<h2>Responsive Checkout Form</h2>

<div class="row">
  <div class="col-75">
    <div class="container">
      
        
          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        
    </div>
  </div>

</div>





<!DOCTYPE html>
<html>
<head>
    <link href="css/stylecoustermer.css" rel="stylesheet">
    <style type="text/css">



input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 18px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #af09eb;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 12px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #de31f5;
}

.containerco {
  border-radius: 17px;
  background-color: #f2f2f2;
  padding: 70px;
  margin: 26px;
}


</style>
</head>
<body>
    <form>
    <table border="1" style="width: 98%;" >
        <tr>
            <td><b><center>Driver</center></b></td>
            <td><b><center>Booking</center></b></td>
            <td><b><center>Vehicle</center></b></td>
        </tr>
   
    
        <tr>
            <td>Name</td>
            <td>Pickup Location</td>
            <td>Vehicle type</td>
        </tr>
    
        <tr>
            <td>E-mail</td>
            <td>Pickup Date & Time</td>
        </tr>
        <tr>
            <td>Telephone Number</td>
            <td>Return Location</td>
        </tr>
  
        <tr>
            <td>Telephone Number</td>
            <td>Return Location</td>
            <td></td>
        </tr>
    
        <tr>
            <td><b>Payment<b></td>
            <td>Return Date & Time</td>
            <td></td>
        </tr>
    </table>
            
    <br><br>
                
    <input type="submit" value="Book Now">
    </form>
</body>
</html>



