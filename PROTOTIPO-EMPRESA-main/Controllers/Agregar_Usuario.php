<?php

include("db.php");

$Name_usuarios = $_POST['Name_usuarios'];
$Email_usuarios=$_POST['Email_usuarios'];
$Password_usuarios=$_POST['Password_usuarios'];
$Id_usuarios=$_POST['Id_usuarios'];
$Image_usuarios=addslashes(file_get_contents($_FILES['Image_usuarios']['tmp_name']));
$Role_usuarios =$_POST['Role_usuarios'];
$horal1 = $_POST['horal1'];
$horal2 = $_POST['horal2'];

$horam1 = $_POST['horam1'];
$horam2 = $_POST['horam2'];

$horami1 = $_POST['horami1'];
$horami2 = $_POST['horami2'];

$horaj1 = $_POST['horaj1'];
$horaj2 = $_POST['horaj2'];

$horav1 = $_POST['horav1'];
$horav2 = $_POST['horav2'];

$horas1 = $_POST['horas1'];
$horas2 = $_POST['horas2'];

$horad1 = $_POST['horad1'];
$horad2 = $_POST['horad2'];




$sql = "INSERT INTO usuari (USUARI_Nombre____b, USUARI_Correo___b, USUARI_Identific_b, USUARI_Foto______b, USUARI_Cargo_____b, USUARI_passCorreo_b,USUARI_HorIniLun_b,USUARI_HorFinLun_b,USUARI_HorIniMar_b,USUARI_HorFinMar_b,USUARI_HorIniMie_b,USUARI_HorFinMie_b,USUARI_HorIniJue_b,USUARI_HorFinJue_b,USUARI_HorIniVie_b,USUARI_HorFinVie_b,USUARI_HorIniSab_b,USUARI_HorFinSab_b,USUARI_HorIniDom_b,USUARI_HorFinDom_b)
        VALUES ('$Name_usuarios', '$Email_usuarios', '$Id_usuarios', '$Image_usuarios', '$Role_usuarios', '$Password_usuarios','$horal1','$horal2','$horam1','$horam2','$horami1','$horami2','$horaj1','$horaj2','$horav1','$horav2 ','$horas1','$horas2','$horad1','$horad2')";

        $Resultado=$conn ->query($sql);


        if($Resultado){
            echo '<script>alert("SI SE PUDO.");</script>';
            header("Location:../View/Pagina_Principal.php");
            
        }else{
            echo '<script>alert("NO SE PUDO, INTENTE DE NUEVO.");</script>';
        }

?>