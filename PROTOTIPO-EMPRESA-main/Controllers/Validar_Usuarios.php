<?php
// Incluye el archivo de conexión a la base de datos (db.php)
include('db.php');

// Captura los datos del formulario
$email = $_POST['useremaillog'];
$password = $_POST['passwordlog'];

// Inicia la sesión
session_start();

// Realiza una consulta SQL para verificar las credenciales del usuario
$consulta = "SELECT * FROM `usuari` WHERE USUARI_Correo___b='$email' AND USUARI_passCorreo_b='$password'";
$resultados = mysqli_query($conn, $consulta);

// Obtiene el número de filas encontradas en la consulta
$filas = mysqli_num_rows($resultados);

// Verifica el rol del usuario y toma acciones en consecuencia
if ($filas > 0) {
    // El usuario se autenticó correctamente, verifica su rol
    $fila = mysqli_fetch_assoc($resultados);
    
    if ($fila['USUARI_Cargo_____b'] == "Admin") {
        // El usuario es un "empleado", redirige a la página principal de empleados
        $_SESSION['useremaillog'] = $email; // Almacena el correo en la sesión
        header("Location:../View/Pagina_Principal.php");
        exit; // Detiene la ejecución después de la redirección
    } elseif ($fila['USUARI_Cargo_____b'] == "Empleado") {
        // El usuario es un "agente", redirige a la página principal de agentes
        $_SESSION['useremaillog'] = $email; // Almacena el correo en la sesión
        header("Location:../View/Pagina_Horarios_Empleados.php");
        exit; // Detiene la ejecución después de la redirección
    } else {
        // El usuario no tiene un rol reconocido
        echo '<script>alert("No tiene permisos para acceder a esta página."); window.history.go(-1);</script>';
    }
} else {
    // Las credenciales no son válidas
    echo '<script>alert("Credenciales incorrectas"); window.history.go(-1);</script>';
}

// Libera los resultados y cierra la conexión a la base de datos
mysqli_free_result($resultados);
mysqli_close($conn);
?>
