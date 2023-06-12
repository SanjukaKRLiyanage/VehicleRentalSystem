<?php

if (isset($_POST["delete"])) {

    $id = $_POST["id"];

    include_once("../database.php");
 
    $sql = "DELETE FROM workschedule WHERE userID = '". $id ."'";
    $result = mysqli_query($conn, $sql);
    header("location: ../driverworkschedule.php");
}

?>