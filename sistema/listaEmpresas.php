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
    <title>Lista Empresas</title>

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
                            <h1 class="m-0 mb-3">Lista de Empresas</h1>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalRegistrarEmpresa">
                                Registrar Empresa
                            </button>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item active">Tabla Empresas</li>

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
                    
                </div>
                <!-- fin cuerpo de trabajo -->
            </section>
        </div>
        <!-- fin contenido-wrapper -->
        <!-- Main Footer -->
        <?php include "includes/footer.php" ?>

        <!-- Modal REgistrar empresa-->
        <div class="modal fade" id="modalRegistrarEmpresa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registrar Empresa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="registrarEmpresa">
                            <div class="form-group">
                                <label for="nombre">Nombre Empresa:</label>
                                <input type="text" name="nombre" class="form-control nombre">
                            </div>
                            <div class="form-group">
                                <label for="nit">Nit:</label>
                                <input type="text" name="nit" class="form-control nit">
                            </div>
                            
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="registrarEmpresa()">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Editar usuario-->
        <div class="modal fade" id="modalEditarEmpresa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Empresa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="editarEmpresa">
                            <div class="form-group">
                                <label for="nombre">Nombre Empresa:</label>
                                <input type="hidden" name="idEmpresa" class="idEmpresa">
                                <input type="text" name="nombre" class="form-control nombre">
                            </div>
                            <div class="form-group">
                                <label for="nit">Nit:</label>
                                <input type="text" name="nit" class="form-control nit">
                            </div>
                            <div class="form-group">
                                <label for="estado">Área:</label>
                                <select name="estado" class="form-control estado">
                                    <?php
                                    $consultaSQL = "SELECT * FROM estado";
                                    $roles = $conexion->consultarDatos($consultaSQL);
                                    foreach ($roles as $rol) :
                                    ?>
                                        <option value="<?php echo ($rol['id_estado']) ?>"><?php echo ($rol['nombre_estado']) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="editarEmpresa()">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin wrapper -->
    <?php include "includes/scriptsDown.php" ?>

    <script>
        $(document).ready(function() {
           
            $('.mostrarTabla').load('tablas/tablaEmpresas.php');

        });
    </script>

</body>

</html>