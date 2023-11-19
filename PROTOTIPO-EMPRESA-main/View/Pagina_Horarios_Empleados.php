<?php
session_start();

// Verifica si se ha iniciado sesión
$varsesion = $_SESSION['useremaillog'];

if ($varsesion == null || $varsesion == '') {
    echo 'USTED INICIE SESION';
    die();
}

include("../Controllers/db.php");

// Realiza una consulta SQL para obtener el nombre del usuario
$sql = "SELECT USUARI_Nombre____b FROM usuari WHERE USUARI_Correo___b = '$varsesion'";
$resultado = $conn->query($sql);

if ($resultado) {
    // Comprueba si se encontraron filas
    if ($resultado->num_rows > 0) {
        // Obtiene el nombre del usuario
        $fila = $resultado->fetch_assoc();
        $nombreUsuario = $fila['USUARI_Nombre____b'];
    }
}

// Almacena el nombre del usuario en una variable de sesión
$_SESSION['nombreUsuario'] = $nombreUsuario;
?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="../Diseños/Estilos_inicio_Admin.css">
<head>
    
</head>
<body>

<?php include ('nav_header2.php')?>
   
    <h1>Horario</h1>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th scope="col">Día</th>
                <th scope="col">Hora de entrada</th>
                <th scope="col">Hora de salida</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM usuari WHERE USUARI_Correo___b = '$varsesion'";
            $Resultado = $conn->query($sql);

            while ($filas = $Resultado->fetch_assoc()) { ?>
                <tr>
                    <th scope="row">Lunes</th>
                    <td><?php echo $filas['USUARI_HorIniLun_b']; ?></td>
                    <td><?php echo $filas['USUARI_HorFinLun_b']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Martes</th>
                    <td><?php echo $filas['USUARI_HorIniMar_b']; ?></td>
                    <td><?php echo $filas['USUARI_HorFinMar_b']; ?></td>
                </tr>

                <tr>
                    <th scope="row">Miercoles</th>
                    <td><?php echo $filas['USUARI_HorIniMie_b']; ?></td>
                    <td><?php echo $filas['USUARI_HorFinMie_b']; ?></td>
                </tr>

                <tr>
                    <th scope="row">Jueves</th>
                    <td><?php echo $filas['USUARI_HorIniJue_b']; ?></td>
                    <td><?php echo $filas['USUARI_HorFinJue_b']; ?></td>
                </tr>

                <tr>
                    <th scope="row">Viernes</th>
                    <td><?php echo $filas['USUARI_HorIniVie_b']; ?></td>
                    <td><?php echo $filas['USUARI_HorFinVie_b']; ?></td>
                </tr>

                <tr>
                    <th scope="row">Sabado</th>
                    <td><?php echo $filas['USUARI_HorIniMar_b']; ?></td>
                    <td><?php echo $filas['USUARI_HorFinMar_b']; ?></td>
                </tr>

                <tr>
                    <th scope="row">Domingo</th>
                    <td><?php echo $filas['USUARI_HorIniDom_b']; ?></td>
                    <td><?php echo $filas['USUARI_HorFinDom_b']; ?></td>
                </tr>

                <!-- Repite esto para los demás días -->
            <?php  }  ?>
        </tbody>
    </table>
</body>
</html>
