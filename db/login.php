<?php
$sessionTime = 365 * 24 * 60 * 60; // 1 año de duración
session_set_cookie_params($sessionTime);
session_start();
include("Conexion.php");

$conectar = new Conexion();
//Se envia los datos mediante el ajax
$user = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$pass = (isset($_POST['password'])) ? $_POST['password'] : '';

//consulta SQL
$consultaSQL = "SELECT us.id_usuario, us.nombre_usuario, us.usuario_sesion, us.correo_usuario, us.firma_usuario,
rl.nombre_rol, rl.id_rol FROM usuario us 
INNER JOIN rol rl ON rl.id_rol=us.rol
WHERE us.usuario_sesion= '$user' AND us.clave= '$pass'";

$data = $conectar->consultarDatos($consultaSQL);

if ($data) {
    
    $_SESSION['active'] = true;
    $_SESSION['iduser'] = $data[0]['id_usuario'];
    $_SESSION['nombre'] = $data[0]['nombre_usuario'];
    $_SESSION['user'] = $data[0]['usuario_sesion'];
    $_SESSION['correo'] = $data[0]['correo_usuario'];
    $_SESSION['firma'] = $data[0]['firma_usuario'];
    $_SESSION['rol'] = $data[0]['nombre_rol'];
    $_SESSION['idrol'] = $data[0]['id_rol'];



    echo json_encode(1);
} else {
    echo json_encode(-1);
}
