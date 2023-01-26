<?php

session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();

$idEntrega = $_POST['idEntrega'];
$estado = $_POST['estado'];

$consultaSQL = "UPDATE entregas SET estado_entrega='$estado'WHERE id_entrega=$idEntrega";

$update = $conexion->editarDatos($consultaSQL);


echo ($update);
