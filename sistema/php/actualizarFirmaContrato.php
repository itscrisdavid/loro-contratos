<?php

session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();

$id = $_POST['id'];
$firma = $_POST['signature'];

$consultaSQL = "UPDATE contratos SET firma='$firma', fecha_termino=current_timestamp(), log_termino=1 WHERE id_aleatorio='$id'";
$update = $conexion->editarDatos($consultaSQL);

echo (json_encode($update));
