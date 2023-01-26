<?php
session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();

$idUsuario = $_POST['idUsuario'];
$consultaSQL = "SELECT * FROM usuario WHERE id_usuario='$idUsuario'";
$firmas = $conexion->consultarDatos($consultaSQL); ?>

<?php
foreach ($firmas as $firma) {
   $output= $firma['firma_usuario'];
}

echo json_encode($output);
?>
