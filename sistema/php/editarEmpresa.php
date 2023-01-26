<?php

session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();

$idEmpresa=$_POST['idEmpresa'];
$nombre=$_POST['nombre'];
$nit=$_POST['nit'];
$estado=$_POST['estado'];



    $consultaSQL="UPDATE empresas SET nombre_empresa='$nombre',nit_empresa='$nit',estado_empresa='$estado'WHERE id_empresa=$idEmpresa";

$update = $conexion->editarDatos($consultaSQL);





echo ($update);
