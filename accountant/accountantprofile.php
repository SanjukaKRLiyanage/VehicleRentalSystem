<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Drop Me</title>
	<link href="src/icon/dropme_logo.png" rel="icon">
    <link rel="stylesheet" href="./css/skrprofile.css">


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
        <li><a href="indexhome.php" class="navifonts">Home</a></li>
        <li><a href="vehicle.php">Vehicles</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
      </ul>

        <div class="buttons">     
          <button class="signin">Sign Out</button>
        </div>

    </nav>
    <hr>
  </header>
<br><br><br><br><br><br>


        <?php

            include_once("database.php");
            $sql = mysqli_query($conn, "SELECT 
                                        *FROM accountant 
            ");

            $row = mysqli_fetch_array($sql);            
           
            $name = $row["name"];
            $username = $row["username"];
            $email = $row["email"];

        ?>


<section class="su-container">
  <div class="signup1">
    <h1 class="main-title1">Accountant Profile</h1>
        
        <div class="pic">
          <img src="src/images/accountant.png" alt="Accountant">
        </div>

    <div class="signup-form">
      <form action="./accountantupdateprofile.php" method="post">
        
          <div class="form-row">
              <p>Accountant Name</p>
              <p> <?php echo"$name";?> </p>
          </div>
          <div class="form-row">
              <p>Username </p>
              <p><?php echo"$username";?></p>
          </div>
          <div class="form-row">
              <p>Email</p>
              <p><?php echo"$email";?></p>
          </div>
        
        
        
        <div class="btn-div">
          <button class="submit-btn" type="submit" name="update">
          Update
          </button>
        </div>
        

      </form>
    </div>
    
    
  </div>
</section>



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
