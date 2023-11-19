<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Encabezado HTML -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Diseños/bootstrap.min.css">

  <title>Página Principal</title>
</head>

<body>
  <div class="login">

    <!-- NAV -->
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Bienvenido <?php echo $nombreUsuario; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="../View/Pagina_Principal.php">Home
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            
            
            <li class="nav-item">
              <!-- <a class="nav-link" href="#">Features</a> -->
            </li>
            <li class="nav-item">
            <a href="./Pagina_Agregar_Usuario.php" class="nav-link" id="Boton_Agregar">AGREGAR NUEVO USUARIO</a>
            </li>
            <li class="nav-item">
            
            <li class="nav-item">
              
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link" href="../Controllers/cerrar_sesion.php">Cerrar sesión</a>
              
            </li>
          </ul>
          
        </div>
      </div>
    </nav>

