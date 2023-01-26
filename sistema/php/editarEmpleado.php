<?php

session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();

$idEmpleado=$_POST['idEmpleado'];
$nombre=$_POST['nombre'];
$empresa=$_POST['empresa'];
$cargo=$_POST['cargo'];
$correo=$_POST['correo'];
$estado=$_POST['estado'];



    $consultaSQL="UPDATE empleados SET nombre_empleado='$nombre',empresa='$empresa',cargo_empleado='$cargo', 
                        correo_empleado='$correo', estado_empleado='$estado'WHERE id_empleado=$idEmpleado";

$update = $conexion->editarDatos($consultaSQL);





echo ($update);
