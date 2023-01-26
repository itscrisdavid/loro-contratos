<?php
session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();

$idEntrega = $_POST['idEntrega'];
$consultaSQL = "SELECT * FROM entregas WHERE id_entrega='$idEntrega'";
$entregas = $conexion->consultarDatos($consultaSQL); ?>

<?php
foreach ($entregas as $entrega) {
   $output= $entrega['firma_empleado'];
}

echo json_encode($output);
?>
