<?php
include("db.php");

$USUARI_ConsInte__b = $_REQUEST['USUARI_ConsInte__b'];

$Name_usuarios = $_POST['Name_usuarios'];
$Email_usuarios = $_POST['Email_usuarios'];
$USUARI_passCorreo_b = $_POST['Password_usuarios'];
$Id_usuarios = $_POST['Id_usuarios'];
$Role_usuarios = $_POST['Role_usuarios'];

// Verificar si se ha subido un archivo
if (isset($_FILES['Image_usuarios']) && $_FILES['Image_usuarios']['error'] === UPLOAD_ERR_OK) {
    // Procesar la nueva imagen
    $Image_usuarios = file_get_contents($_FILES['Image_usuarios']['tmp_name']);
} else {
    // Si no se ha subido una nueva imagen, mantener la existente o manejar como desees
    // Aquí asumo que la imagen actual está almacenada en la base de datos
    $sqlImagen = "SELECT USUARI_Foto______b FROM usuari WHERE USUARI_ConsInte__b = ?";
    $stmtImagen = $conn->prepare($sqlImagen);
    $stmtImagen->bind_param("i", $USUARI_ConsInte__b);
    $stmtImagen->execute();
    $stmtImagen->store_result();

    if ($stmtImagen->num_rows > 0) {
        $stmtImagen->bind_result($Image_usuarios);
        $stmtImagen->fetch();
    } else {
        // Si no se encuentra la imagen actual, ajusta esto según tus necesidades
        $Image_usuarios = '';
    }

    $stmtImagen->close();
}

$sql = "UPDATE usuari SET
        USUARI_Nombre____b = ?,
        USUARI_Correo___b = ?,
        USUARI_Identific_b = ?,
        USUARI_Foto______b = ?,
        USUARI_Cargo_____b = ?,
        USUARI_passCorreo_b = ?
        WHERE USUARI_ConsInte__b = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssisssi", $Name_usuarios, $Email_usuarios, $Id_usuarios, $Image_usuarios, $Role_usuarios, $USUARI_passCorreo_b, $USUARI_ConsInte__b);

$resultado = $stmt->execute();

if ($resultado) {
    echo "La actualización fue exitosa";
    header("location:../View/Pagina_Principal.php");
} else {
    echo "Hubo un error en la actualización: " . $stmt->error;
}

$stmt->close();
?>
