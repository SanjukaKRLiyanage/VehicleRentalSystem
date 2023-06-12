<?php 
if(!isset($_GET['id'])){
    include_once("./index.php");
}
?>

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

        $id = $_GET['id'];

        $sql = "SELECT * FROM monthlypayment
                WHERE driverID = '". $id ."'";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);


            $id = $row["driverID"];
            $name = $row["driverName"];
            $v_id = $row["vehicleID"];
            $payment = $row["payment"];
    
    ?>

        <div class="container">
       
         <!-- Display Old details of user -->
        <form class="update_form" action="./accountant/updatedetailsConfig.php" method="POST">
                <input hidden value='<?php echo"$id" ?>' required type="text" name="id">
                
                <div class="input-field">
                <label>Name</label>
                <input required value='<?php echo"$name";?>' type="text" name="name">
                </div>
                

                <div class="input-field">
                <label>Payment</label>
                <input required value='<?php echo"$payment";?>' type="text" name="payment">
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