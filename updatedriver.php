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
$sql = "SELECT * FROM driver";
$result = $conn->query($sql);
// Delete data from the table

?>


<MostPopular>
<p class="topicadmin">&nbsp;&nbsp;Update Driver Vehicle </p><hr>
<center>
<table border="2" style="width:95%;">
  <tr>
    <th style="">Driver ID</th>
    <th style="">Name</th>
    <th style="">Address</th>
     <th style="">Lision Number</th>
     <th style="">Insurance Number</th>
     <th style="">Manage</th>

  </tr>
<button></button>
  <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><center>" . $row["driver_id"] . "</center></td>";
            echo "<td><center>" . $row["f_name"] . "</center></td>";
            echo "<td><center>" . $row["address"] . "</center></td>";
            echo "<td><center>" . $row["lison_num"] . "</center></td>";
            echo "<td><center>" . $row["insurance_num"] . "</center></td>";
            echo "<td><center><a href='updatedriverpage.php?ids=" . $row['driver_id'] . "'><button class='signup'>Update</button></a>&nbsp;&nbsp;<a href='deletevehicle.php?id=" . $row['driver_id'] . "'><button class='signup'>Delete</button></a></center></td>";
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
