<?php
    
    if (isset($_POST["update"])) {

        
            $id = $_POST["id"];
            $name = $_POST["name"];
            $payment = $_POST["payment"];

        include_once("../database.php");
        
            $sql = mysqli_query($conn, "UPDATE monthlypayment SET
            `driverName` = '$name',
            `payment` = '$payment'

            WHERE driverID='" . $id . "'
            ");

        header("location: ../accountantmonthlypayment.php");

    }
    else {
        header("location: ../index.php");
    }

?>