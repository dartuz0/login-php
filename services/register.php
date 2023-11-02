<?php

include '../config/db.php';
include '../config/verify.php';

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$hashPassword = hashPassword($password);
$verify = verifyUser($connection, $email, $username);

if ($verify) {

    echo '
    <script>
    alert("¡Este usuario ya existe!");
    window.location = "../index.php";
    </script>
    ';
    exit();
}

$query = "INSERT INTO users (name, email, username, password) VALUES('$name', '$email', '$username', '$hashPassword')";
$insert = mysqli_query($connection, $query);

if ($insert) {
    echo '
    <script>
    alert("Usuario registrado correctamente");
    window.location = "../index.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert("Ocurrio un error al registrar el usuario");
    window.location = "../index.php";
    </script>
    ';
}

$connection->close();

?>