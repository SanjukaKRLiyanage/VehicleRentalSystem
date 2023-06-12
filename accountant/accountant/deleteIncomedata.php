<?php

if (isset($_POST["delete"])) {

    $id = $_POST["id"];

    include_once("../database.php");
 
    $sql = "DELETE FROM income WHERE driverID = '". $id ."'";
    $result = mysqli_query($conn, $sql);
    header("location: ../accountantincome.php");
}

?>