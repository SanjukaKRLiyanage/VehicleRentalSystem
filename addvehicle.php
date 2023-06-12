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

<body class="body">
  <div id="loading-container">
  <img class="logos" src="src/images/dropmelogo1.png" alt="Site Logo">
</div>

<br>

<MostPopular>
<p class="topicadmin">&nbsp;&nbsp;Add New Vehicle </p><hr>

<table>
  <tr>
    <td style="width: 40%;"><center>
    <div class="slider">
      <div class="feature">
      </div>
      <div class="overlay">

      </div>

   </div>

    </center></td>
    <td style="width: 60%;">
      
<div class="containerco">
  <form action="addvehicle_post.php">
    <label for="VehicleNumber">Enter Vehicle Number </label>
    <input type="text" id="VehicleNumber" name="VehicleNumber" placeholder="Enter Vehicle Number..">

    <label for="lname">Enter Vehicle Brand</label>
    <input type="text" id="VehicleModel" name="VehicleModel" placeholder="Enter Vehicle Brand..">

    <label for="lname">Enter Vehicle Model</label>
    <input type="text" id="VehicleModel" name="VehicleModel" placeholder="Enter Vehicle Model..">

    <label for="lname">Enter Manufacture Year</label>
    <input type="text" id="ManufactureYear" name="ManufactureYear" placeholder="Manufacture Year..">

   <label for="lname">Origin Country</label>
    <input type="text" id="OriginCountry" name="OriginCountry" placeholder="Origin Country..">

    <label for="lname">Chase Number</label>
    <input type="text" id="ChaseNumber" name="ChaseNumber" placeholder="Chase Number..">

    <label for="lname">lichen Number</label>
    <input type="text" id="lichenNumber" name="lichenNumber" placeholder="lichen Number..">

    <label for="lname">Insurance Number</label>
    <input type="text" id="InsuranceNumber" name="InsuranceNumber" placeholder="Insurance Number..">


    <input type="submit" value="Enter">
  </form>
</div>


    </td>
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
