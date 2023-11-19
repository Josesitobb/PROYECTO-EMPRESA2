<?php

include("db.php");

$USUARI_ConsInte__b=$_REQUEST['USUARI_ConsInte__b'];

$sql="DELETE FROM usuari WHERE USUARI_ConsInte__b= $USUARI_ConsInte__b";

$resultado =$conn ->query($sql);

if($resultado){
    header("location:../View/Pagina_Principal.php");
}else{
 echo"NO SE PUDO";   
}

?>