
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "drop_me";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<?php 
session_start(); 
if (isset($_POST['user']) && isset($_POST['pwd'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname = validate($_POST['user']);
    $pass = validate($_POST['pwd']);
    if (empty($uname)) {
        header("Location: dropmesignin.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: dropmesignin.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM system_user WHERE email='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $uname && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['f_name'];
                $_SESSION['id'] = $row['system_user_id'];

                if ($row['type'] === 'admin') {
                    header("Location: superadmin.php");
                    } else if ($row['type'] === 'user') {
                            header("Location: coustermer/coustermerdashbord.php");
                            }
                    else if ($row['type'] === 'accountant') {
                            header("Location: accountant/accountantmonthlypayment.php");
                            }
                    else if ($row['type'] === 'driver') {
                            header("Location: accountant/driverworkschedule.php");
                            }
                    else if ($row['type'] === 'maneger') {
                            header("Location: maneger/maneger.php");
                            }
                

                exit();
            }else{
                 echo "<script>
                        setTimeout(function() {
                        window.alert('Incorect User name or password');
                        window.location.href = 'dropmesignin.php';
                        }, " . ($delay * 1000) . ");
                      </script>";
               
            }
        }else{
             echo "<script>
                        setTimeout(function() {
                        window.alert('Incorect User name or password');
                        window.location.href = 'dropmesignin.php';
                        }, " . ($delay * 1000) . ");
                      </script>";
               
        }
    }
}else{
                header("Location: dropmesignin.php?error=Incorect User name or password");
    exit();
}



?>
