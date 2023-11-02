<?php
include "../config/db.php";

$noteName = $_POST['noteName'];
$note = $_POST['note'];

$query = "INSERT INTO notes (name, note) VALUES('$noteName', '$note')";
$insert = mysqli_query($connection, $query);

if ($insert) {
    echo '
    <script>
    alert("Nota guardada correctamente");
    window.location = "../welcome.php";
    </script>
    ';
} else {
    echo '
    <script>
    alert("Ocurrio un error al guardar el registro");
    window.location = "../form.php";
    </script>
    ';
}

$connection->close();
?>