<?php

session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();

$nombre = $_POST['nombre'];
$nit = $_POST['nit'];

$consultaSQL = "INSERT INTO empresas(nombre_empresa, nit_empresa) VALUES
                    ('$nombre','$nit')";
$insert = $conexion->agregarDatos($consultaSQL);





echo ($insert);
