<?php
    
    if (isset($_POST["update"])) {

        
            $id = $_POST["id"];
            $name = $_POST["name"];
            $username = $_POST["username"];
            $email = $_POST["email"];


        include_once("../database.php");
        
            $sql = mysqli_query($conn, "UPDATE driver SET
            `name` = '$name',
            `username` = '$username',
            `email` = '$email'

            WHERE driverID='" . $id . "'
            ");

        header("location: ../driverprofile.php");

    }
    else {
        header("location: ../index.php");
    }

?>