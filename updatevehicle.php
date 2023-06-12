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
  <img class="logos" src="src/images/dropmelogo1.png" alt="Site Logo">
</div>

<br>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "drop_me";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the MySQL table
$sql = "SELECT * FROM vehicle";
$result = $conn->query($sql);
// Delete data from the table

?>


<MostPopular>
<p class="topicadmin">&nbsp;&nbsp;Update Vehicle </p><hr>
<center>
<table border="2" style="width:95%;">
  <tr>
    <th style="">Vehicle No</th>
    <th style="">MFY</th>
    <th style="">Staus</th>
     <th style="">lichne Number</th>
     <th style="">Insurance Number</th>
     <th style="">Manage</th>
  </tr>
<button></button>
  <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><center>" . $row["vehicle_id"] . "</center></td>";
            echo "<td><center>" . $row["manufacture_year"] . "</center></td>";
            echo "<td><center>" . $row["status"] . "</center></td>";
            echo "<td><center>" . $row["license_number"] . "</center></td>";
            echo "<td><center>" . $row["insurance_number"] . "</center></td>";
            echo "<td><center><a href='updatevehiclepage.php?ids=" . $row['vehicle_id'] . "'><button class='signup'>Update</button></a>&nbsp;&nbsp;<a href='deletevehicle.php?id=" . $row['vehicle_id'] . "'><button class='signup'>Delete</button></a></center></td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='6'>No data found</td></tr>";
        }
        ?>
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
