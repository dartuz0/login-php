<?php
session_start();

include "../config/db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email = '$email'";
$validateData = mysqli_query($connection, $query);
$data = $validateData->fetch_assoc();
$hashPassword = $data['password'];
$rows = mysqli_num_rows($validateData);
$verifyPassword = password_verify($password, $hashPassword);

if( $rows > 0  and $verifyPassword === true) {
    $_SESSION['user'] = $email;
    header("location: ../welcome.php");
    exit();
} else {
    echo '
    <script>
    alert("Credenciales incorrectas");
    window.location = "../index.php";
    </script>
    ';
}

$connection->close();
?>