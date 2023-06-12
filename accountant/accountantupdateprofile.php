
<!DOCTYPE html>
<html>
<head>

    <title>Drop Me</title>

    <link rel="stylesheet" href="./css/skrupdatetabledetails.css">

</head>


<body>



<section>
    <h1 class="main-title">Edit Details</h1>

    <?php
        include_once("./database.php");


        $sql = "SELECT * FROM accountant
                ";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);


            $id = $row["accountantID"];
            $name = $row["name"];
            $username = $row["username"];
            $email = $row["email"];
    
    ?>

        <div class="container">
       
         <!-- Display Old details of user -->
        <form class="update_form" action="./accountant/updateaccountantdetailsConfig.php" method="POST">
                <input hidden value='<?php echo"$id" ?>' required type="text" name="id">
                
                <div class="input-field">
                <label>Name</label>
                <input required value='<?php echo"$name";?>' type="text" name="name">
                </div>
                

                <div class="input-field">
                <label>Username</label>
                <input required value='<?php echo"$username";?>' type="text" name="username">
                </div>

                <div class="input-field">
                <label>E-Mail</label>
                <input required value='<?php echo"$email";?>' type="text" name="email">
                </div>

                <div class="btn">
                <button type="submit" name="update" onclick='return checkupdate()'>Update</button>
                </div>
            </form>
    
        </div>

</section>

<!-- delete popupscreen -->
<script src="js/skrscript.js"></script>

</body>
</html>