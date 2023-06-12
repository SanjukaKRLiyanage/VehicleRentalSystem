<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Drop Me Coustermer</title>
	<link href="../src/icon/dropme_logo.png" rel="icon">
	<link href="../css/style.css" rel="stylesheet">
  <link href="../css/styleadmin.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
</style>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body class="body">
  <div id="loading-container">
  <img class="logos" src="../src/images/dropmelogo1.png" alt="Site Logo">
</div>
<header class="header">
    <nav>
      <div class="logo">
        <img src="../src/images/dropmelogo1.png" alt="Logo">
      </div>
      <ul class="navigation">
        <li><a href="#" class="navifonts"> </a></li>
        <li><a href="../index.php" class="navifonts">Home</a></li>
        <li><a href="../vehicle.php">Vehicles</a></li>
        <li><a href="../aboutus.php">About Us</a></li>
        <li><a href="../contactus.php">Contact Us</a></li>
      </ul>
      <div class="buttons">
        <div class="dropdown">
        <button class="circle-button "><center><i class='far fa-user-circle' style="z-index: 9990; font-size:36px;color:white;"viewport></i></center></button>
        <div class="dropdown-content">
       <a href="editprofile.php" target="iframe_a">Change Profile</a>
        <a href="#">Logout</a>
      </div>
      </div>
      <div class="dropdown">
        <button class="signin">Customer</button>
        <div class="dropdown-content">
        <a href="editprofile.php" target="iframe_a">Change Profile</a>
        <a href="#">Logout</a>
      </div>
      </div>
      </div>
    </nav>
    <hr>
  </header>

<br><br><br><br>
<table border="0" class="fulltable">
  <tr>
    <td class="tdmain" style="width:20%; height:40px;" ><center><br><a href="makeresavation.php" target="iframe_a"><button class="dashboad_btn">Make A Resavation</button></a></center><br></td>
    <td class="trr" rowspan ="6" style="width:80%;">
      <iframe src="main.php" name="iframe_a" height="690px" width="100%" title="Iframe Example" scrolling="yes"></iframe>
    </td>
  </tr>
  
   
   <tr>
    <td class="tdmain" style="width:20%;"><center><br><a href="previousres.php" target="iframe_a"><button class="dashboad_btn">&nbsp;Previous Reservation&nbsp;</button></a></center><br></td>
  </tr>
  <tr><td><p style="font-size: 56px; color:white;">S</p></td></tr>
  <tr><td><p style="font-size: 6px; color:white;">S</p></td></tr>
  <tr><td><p style="font-size: 2px; color:white;">S</p></td></tr>
  <tr><td><p style="font-size: 2px; color:white;">S</p></td></tr>
 

  

</table>



<footer class="footer-distributed">

      <div class="footer-left">
        <span><img class="logof" src="../src/images/dropmelogoFloter.png" alt="Site Logo"><br><br></span><br>

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

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
