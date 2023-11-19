<?php
session_start();

// Verifica si se ha iniciado sesión
$varsesion = $_SESSION['useremaillog'];

if ($varsesion == null || $varsesion == '') {
    echo 'USTED INICIE SESION';
    die();
}

include("../Controllers/db.php");

// Realiza una consulta SQL para obtener todos los correos
$sql = "SELECT USUARI_Correo___b FROM usuari";
$resultado = $conn->query($sql);

if (!$resultado) {
    echo 'Error en la consulta: ' . $conn->error;
    die();
}

// Obtiene el nombre del usuario
$sqlNombreUsuario = "SELECT USUARI_Nombre____b FROM usuari WHERE USUARI_Correo___b = '$varsesion'";
$resultadoNombreUsuario = $conn->query($sqlNombreUsuario);

if (!$resultadoNombreUsuario) {
    echo 'Error en la consulta para obtener el nombre del usuario: ' . $conn->error;
    die();
}

if ($resultadoNombreUsuario->num_rows > 0) {
    $filaNombreUsuario = $resultadoNombreUsuario->fetch_assoc();
    $nombreUsuario = $filaNombreUsuario['USUARI_Nombre____b'];
} else {
    echo 'No se encontró el nombre del usuario.';
    die();
}

// Almacena el nombre del usuario en una variable de sesión
$_SESSION['nombreUsuario'] = $nombreUsuario;
?>

<?php include("nav_header.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Usuarios</title>
</head>

<body>
    <select name="Editar_Usuarios" id="Editar_Usuarios">
        <?php
        // Itera sobre los resultados y agrega opciones al select
        while ($fila = $resultado->fetch_assoc()) {
            echo '<option value="' . $fila['USUARI_Correo___b'] . '">' . $fila['USUARI_Correo___b'] . '</option>';
        }
        ?>
    </select>
</body>

</html>
