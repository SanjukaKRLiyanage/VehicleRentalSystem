<?php

if (isset($_POST["delete"])) {

    $id = $_POST["id"];

    include_once("../database.php");
 
    $sql = "DELETE FROM monthlypayment WHERE driverID = '". $id ."'";
    $result = mysqli_query($conn, $sql);
    header("location: ../accountantmonthlypayment.php");
}

else if (isset($_POST["update"])){

    $id = $_POST["id"];

    header("location: ../accountantupdatetabledetails.php?id=$id");
}

else {
    header("location: ../index.php");
}

?>