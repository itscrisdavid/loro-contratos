<?php
session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();

$empleado= $_POST['empleado'];


$consultaSQL = "SELECT * FROM empleados WHERE id_empleado='$empleado'";
$empresas = $conexion->consultarDatos($consultaSQL);
$nit = $empresas[0]['cargo_empleado'];
echo json_encode($nit);
