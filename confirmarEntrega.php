<?php 
include "db/Conexion.php";
$conexion = new Conexion();

$idEntrega=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EXPERTOSIP.COM</title>
  <link rel="icon" href="img/favicon.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- SweetAlert -->
  <link href="plugins/sweetalert2/sweetalert2.css" rel="stylesheet">
</head>
<body class="hold-transition login-page bg-dark">
<div class="login-box">
  <div class="login-logo">
    <img src="img/expertosip-logo.svg" alt="">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Entregas de Satisfacción</p>

      <?php  
      $consultaSQL="UPDATE entregas SET estado_entrega=2 WHERE id_entrega=$idEntrega";
      $update=$conexion->editarDatos($consultaSQL);

      if($update==1){
        echo "<h1>Tu firma ha sido confirmada correctamente</h1>";
      }else{
        echo "<h1>error</h1>";
      }
      
      ?>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- sweetalert2 -->
<script src="plugins/sweetalert2/sweetalert2.js"></script>
<script src="scriptss.js"></script>
</body>
</html>
