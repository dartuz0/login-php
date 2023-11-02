<?php
include 'config/db.php';
session_start();
if (!isset($_SESSION['user'])) {
    echo '
    <script>
    alert("Para poder acceder debes iniciar sesion");
    </script>
    ';
    header('location: index.php');
    session_destroy();
    die();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/table.css">
    <title>Bienvenido</title>
</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nota</th>
                <th> Acciones </th>
            </tr>
        </thead>
        <tbody>

        <?php

        $query = "SELECT * FROM notes";
        $verifyQuery = mysqli_query($connection, $query);
        $result = mysqli_num_rows($verifyQuery);

        if($result > 0){

            while($data = mysqli_fetch_array($verifyQuery)){
                ?>
                <tr>
                    <td><?php  echo $data['name'] ?></td>
                    <td><?php  echo $data['note'] ?></td>
      <?php   echo "<td> <a class='btn' href='services/deleteData.php?id=".$data['id']."'>Eliminar</a> </td>"; ?>
                </tr>
    
                <?php
            }
        }
        ?>
        </tbody>
    </table>

</body>

</html>