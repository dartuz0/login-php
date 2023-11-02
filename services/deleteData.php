<?php
include '../config/db.php';

$id = $_GET['id'];

$query = "DELETE FROM notes WHERE id = '$id'";
$delete = mysqli_query($connection, $query);

if ($delete) {
    echo '
    <script>
    alert("Nota borrada correctamente");
    window.location = "../welcome.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert("Ocurrio un error al borrar el registro");
    window.location = "../welcome.php";
    </script>
    ';
}

$connection->close();
?>