<?php

session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();
$nombreCompleto = $_POST['nombreCompleto'];
$nombreArtistico = $_POST['nombreArtistico'];
$email = $_POST['email'];
$tipoDcto = $_POST['tipoDcto'];
$nroDcto = $_POST['nroDcto'];
$banco = $_POST['banco'];
$tipoCuenta = $_POST['tipoCuenta'];
$numeroCuenta = $_POST['numeroCuenta'];
$celular = $_POST['celular'];
$pais = $_POST['pais'];
$carateresPermitidos = '0123456789abcdefghijklmnopqrstuvwxyz';
$aleatorio = substr(str_shuffle($carateresPermitidos), 0, 10);

$consultaSQL = "INSERT INTO contratos (nombre_completo, nombre_artista, email, 
                tipo_documento,  nro_documento, expedicion_documento, ciudad_domicilio,
                id_banco,tipo_cuenta, numero_cuenta, celular, id_aleatorio, id_pais) 
                values ('$nombreCompleto' , '$nombreArtistico', '$email', '$tipoDcto', '$nroDcto', 
                '', '', $banco, '$tipoCuenta', $numeroCuenta, '$celular', '$aleatorio', '$pais' )";


$insert = $conexion->agregarDatos($consultaSQL);
$retorno;

if ($insert) {
    $retorno = 1;
} else {
    $retorno = 0;
}


echo (json_encode($insert));
