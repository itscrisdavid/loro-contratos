<?php

session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();

$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$cargo = $_POST['cargo'];
$correo = $_POST['correo'];


$consultaSQL = "INSERT INTO empleados(nombre_empleado, empresa, cargo_empleado, correo_empleado) VALUES
                    ('$nombre','$empresa','$cargo','$correo')";
$insert = $conexion->agregarDatos($consultaSQL);





echo ($insert);
