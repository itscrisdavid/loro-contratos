<?php
session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();

$empresa= $_POST['empresa'];


$consultaSQL = "SELECT * FROM empresas WHERE id_empresa='$empresa'";
$empresas = $conexion->consultarDatos($consultaSQL);
$nit = $empresas[0]['nit_empresa'];
echo json_encode($nit);
