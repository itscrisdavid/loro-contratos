<?php
$sessionTime = 365 * 24 * 60 * 60; // 1 año de duración
session_set_cookie_params($sessionTime);
session_start();
include "../db/Conexion.php";
$conexion = new Conexion();

if (empty($_SESSION['active'])) {
    header('location: ../');
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Entrega</title>

    <?php include "includes/scriptsUp.php" ?>
</head>
<style>

</style>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <?php include "includes/navbar.php" ?>

        <!-- Contentido Wrapper-->
        <div class="content-wrapper">
            <!-- contenido-header -->
            <div class="content-header">
                <div class="container-fluid">

                    <!--  -->
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Lista de Entregas de Satisfacción</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item active">Tabla Entrega</li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contenido-header -->

            <section class="content">
                <!-- inicio cuerpo de trabajo -->
                <div class="container-fluid">

                    <div class="mostrarTabla"></div>
                    <div class="mostrarEntrega"></div>

                </div>
                <!-- fin cuerpo de trabajo -->
            </section>
        </div>
        <!-- fin contenido-wrapper -->


        <!-- Main Footer -->
        <?php include "includes/footer.php" ?>

    </div>
    <!-- fin wrapper -->
    <?php include "includes/scriptsDown.php" ?>

    <script>
        $(document).ready(function() {
            $('.mostrarTabla').load('tablas/tablaEntregas.php');

        });
    </script>
  
</body>

</html>