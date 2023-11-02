<?php
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
    <title>Formulario</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>

<?php
include 'navbar.php';
?>

    <div class="form-content">
        <form action="services/data.php" method="POST">

            <label for="note">Nombre: </label>
            <input type="text" name="noteName" id="noteName" required/>

            <label for="note">Nota: </label>
            <textarea name="note" id="note" cols="30" rows="10" required></textarea>

            <button type="submit">Guardar</button>
        </form>

    </div>

</body>

</html>