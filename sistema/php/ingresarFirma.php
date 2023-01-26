<?php

session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();
$idEntrega=$_POST['idEntrega'];
$firma=$_POST['signature'];
$native = $_POST['native'];

if($native!=""){
    $consultaSQL = "UPDATE entregas SET firma_empleado='$firma', estado_entrega=2 WHERE id_entrega=$idEntrega;
     UPDATE entregas SET firma_empleado=REPLACE(firma_empleado,'image/svg+xml,','')";
    $insert = $conexion->editarDatos($consultaSQL);

}else{
  $insert=2;
}




echo ($insert);
