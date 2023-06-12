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
    $sql = "   FROM vehicle WHERE vehicle_id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<br><br><br><br><br>Data deleted successfully.";
        echo "$id";
    } else {
        echo "Error deleting data: " . $conn->error;
        echo $id;
    }
}
?>

<body class="body">
  <div id="loading-container">
  <img class="logos" src="src/images/dropmelogo1.png" alt="Site Logo">
</div>

<br>

<MostPopular><center>
<p class="topicadmin">&nbsp;&nbsp;Edit Profile </p></center><hr>

<table>
  <tr><center>
    <td style="width: 90%;">
      
<div class="containerco">
  <form action="/action_page.php">
    <label for="VehicleNumber">Enter Name </label>
    <input type="text" id="name" name="name" placeholder="Enter Name..">

    <label for="lname">Enter Address</label>
    <input type="text" id="address" name="address" placeholder="Enter Address..">

    <label for="lname">Enter Contact Number</label>
    <input type="text" id="Number" name="Number" placeholder="Contact Number..">

    <label for="lname">Enter Email</label>
    <input type="text" id="Email" name="Email" placeholder="Enter Email..">

   <label for="lname">Enter Password</label>
    <input type="text" id="Password" name="Password" placeholder="Enter Password..">

    <input type="submit" value="Enter">
  </form>
</div>


    </td></center>
  </tr>
</table>

</div>

</div>







<script type="text/javascript">
 document.addEventListener('DOMContentLoaded', function() {
  var loadingContainer = document.getElementById('loading-container');
  loadingContainer.classList.add('loaded');
  
  setTimeout(function() {
    loadingContainer.style.display = 'none';
  }, 2000); // Remove after 2 seconds (2000 milliseconds)
});


</script>

<script type="text/javascript">

  </script>

</body>

</html>
