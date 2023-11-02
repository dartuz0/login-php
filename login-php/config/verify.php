<?php

function verifyUser($connection, $email,$username) {
    $query = "SELECT * FROM users WHERE email = '$email' or username = '$username'";
    $insert = mysqli_query($connection, $query);
    $rows = mysqli_num_rows($insert);
    if($rows > 0) {
        return true;
    } else { return false; }
}

function hashPassword($password) {
    $hash = password_hash($password, PASSWORD_BCRYPT);
    return $hash;
}

?>