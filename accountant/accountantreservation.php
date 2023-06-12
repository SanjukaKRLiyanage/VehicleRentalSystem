<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Drop Me</title>
	<link href="src/icon/dropme_logo.png" rel="icon">
	<link href="css/skrstyle.css" rel="stylesheet">
  <link href="css/skrdatatablestyle.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css"></style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="body">
  <div id="loading-container">
    <img class="logos" src="src/images/dropmelogo1.png" alt="Site Logo">
  </div>


<header class="header">
    <nav>
      <div class="logo">
        <img src="src/images/dropmelogo1.png" alt="Logo">
      </div>
      <ul class="navigation">
        <li><a href="#" class="navifonts"> </a></li>
        <li><a href="index.php" class="navifonts">Home</a></li>
        <li><a href="vehicle.php">Vehicles</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>

      <div class="buttons">
          <button class="signin">Sign Out</button>
      
        <a href="accountantprofile.php">
          <button class="signin" img><i class="fa-solid fa-user"  ></i>  Profile</button>
        </a>  
      </div>
 
    </nav>
    <hr>
  </header>
<br><br><br><br><br><br>


    <div class="wrapper">

        <div class="sidenav">
            <ul>  
                <li class="navihow"><a href ="accountantmonthlypayment.php"> Monthly Payment</a></li>
                <li class="navihow"><a href ="accountantincome.php">Income Report</a></li>
                <li class="navihow"><a href ="accountantreservation.php"> Reservations</a></li>
                <li class="navihow"><a href ="accountantbudget.php"> Budget</a></li>
            </ul> 
     
        </div>
    </div>    

                    <div class="wrapper3">
                      <div class="sidenav3">
                          <ul>  
                              <li><a href ="#">Reservations</a></li>
                          </ul>  
                      </div>
                    </div>


                              <div class="wrapper4">
                                <div class="sidenav4">
                                    <ul>  
                                        <li><a href ="#">Print</a></li>
                                        <li><a href ="#">Share</a></li>
                                    </ul>  
                                </div>
                              </div>


    <table class="center" border="1">

        <tr>
            <th>User ID</th>
            <th>Reservation ID</th>
            <th>Driver ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
        </tr>


        <?php 

            include_once("database.php");
            $sql = "SELECT * FROM reservations";
            $result = mysqli_query($conn, $sql);

            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
              echo "
              <form action='./accountant/deleteincomedata.php' method='post'>
                <tr>
                  <td>".$row['userID']."</td>
                  <td>".$row['reservationID']."</td>
                  <td>".$row['driverID']."</td>
                  <td>".$row['reservationdate']."</td>
                  <td>".$row['reservationtime']."</td>
                  <td>".$row['location']."</td>
                  
                </tr>
              </form>";
              }
            }
            else {
              echo "0 results";
            }
          
            mysqli_close($conn);
        ?> 
    </table>


    <footer class="footer-distributed">

<div class="footer-left">
  <span><img class="logof" src="src/images/dropmelogoFloter.png" alt="Site Logo"><br><br></span><br>

</div>

<div class="footer-center">
  <br>
  <div>
    <i class="fa fa-map-marker"></i>
    <p style="color: #AFAFAF; font-weight: bold;"><span style="color: #AFAFAF; font-weight: bold;">444 Drop Me</span> Malabe, Srilanka</p>
  </div>

  <div>
    <i class="fa fa-phone"></i>
    <p style="color: #AFAFAF; font-weight: bold;">+94 712494975</p>
  </div>

  <div>
    <i class="fa fa-envelope"></i>
    <p><a href="mailto:support@company.com">support@dropme.web.lk</a></p>
  </div>

</div>

<div class="footer-right">

  <p class="footer-company-about" style="color: #AFAFAF; font-weight: bold;">
    <span style="color: #AFAFAF; font-weight: bold; font-size: 25px;">Drop Me</span>
    Looking for a reliable vehicle renting system in Sri Lanka? Look no further than Drop Me! Our easy and fast booking feature, along with multiple pickup locations, ensure that you get the vehicle you need without any hassle. 
  </p>

  <div class="footer-icons">

    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-love"></i></a>

  </div>

</div>

</footer>


<script type="https://kit.fontawesome.com/a076d05399.js" crossorigin='anonymous'></script>
<script type= "text/javascript">
document.addEventListener('DOMContentLoaded', function() {
var loadingContainer = document.getElementById('loading-container');
loadingContainer.classList.add('loaded');

setTimeout(function() {
loadingContainer.style.display = 'none';
}, 2000); // Remove after 2 seconds (2000 milliseconds)
});


</script>


<!-- delete popupscreen -->
<script src="js/skrscript.js"></script>

</body>

</html>