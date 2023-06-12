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
<p class="topicadmin">&nbsp;&nbsp;Add New Driver </p><hr>

<table>
  <tr>
    <td style="width: 40%;"><center>
    <img src="src/images/dropmelogo1.png" alt="IMG">

    </center></td>
    <td style="width: 60%;">
      
<div class="containerco">
  <form action="adddriver_post.php">
    <label for="VehicleNumber">Enter Driver Name </label>
    <input type="text" id="name" name="name" placeholder="Driver Name..">

    <label for="lname">Enter Driver Address</label>
    <input type="text" id="Address" name="Address" placeholder="Driver Address..">

    <label for="lname">Enter Driver Contact Number</label>
    <input type="text" id="Number" name="Number" placeholder="Contact Number..">

    <label for="lname">Enter Driver Email</label>
    <input type="text" id="Email" name="Email" placeholder="Driver Email..">

   <label for="lname">Enter Driver ID Number</label>
    <input type="text" id="ID_Number" name="ID_Number" placeholder="Driver ID Number..">

    <label for="lname">lichen Number</label>
    <input type="text" id="lichenNumber" name="lichenNumber" placeholder="lichen Number..">

    <label for="lname">Insurance Number</label>
    <input type="text" id="InsuranceNumber" name="InsuranceNumber" placeholder="Insurance Number..">

    <label for="lname">Enter Driver Date Of Birth</label>
    <input type="text" id="DOB" name="DOB" placeholder="Driver Date Of Birth..">

   <label for="gender">Select Driver Gender:</label>
    <select id="gender" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>

    <label for="lname">Enter Bank Name</label>
    <input type="text" id="bankname" name="bankname" placeholder="Enter Bank Name..">

    <label for="lname">Enter Branch</label>
    <input type="text" id="branch" name="branc" placeholder="Enter Bank Branch..">

    <label for="lname">Enter Bank Accocunt Number</label>
    <input type="text" id="AccocuntNumber" name="AccocuntNumber" placeholder="Accocunt Number..">

    <label for="lname">Enter Bank Accocunt Name</label>
    <input type="text" id="AccocuntName" name="AccocuntName" placeholder="Accocunt Name..">


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
