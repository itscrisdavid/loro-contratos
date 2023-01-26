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
    <title>Lista Empleados</title>

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
                            <h1 class="m-0 mb-3">Lista de Empleados</h1>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalRegistrarEmpleado">
                                Registrar Empleado
                            </button>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item active">Tabla Empleado</li>

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



        <!-- Modal Editar Empleado-->
        <div class="modal fade" id="modalEditarEmpleado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar Empleado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="editarEmpleado">
                        <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="nombre">Nombre Empleado:</label>
                            <input type="hidden" name="idEmpleado" class="idEmpleado">
                            <input type="text" name="nombre" class="form-control nombre">
                        </div>
                        <div class="form-group col-md-12">
                            <?php
                            $consultaProcesos = "SELECT * FROM empresas WHERE estado_empresa=1";
                            $empresas = $conexion->consultarDatos($consultaProcesos);
                            ?>
                            <label for="empresa">Empresa (*):</label>
                            <select class="form-control empresa" name="empresa" required>
                                <?php foreach ($empresas as $empresa) : ?>
                                    <option value="<?php echo ($empresa['id_empresa']) ?>"><?php echo ($empresa['nombre_empresa']) ?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">Ingrese la empresa</div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="cargo">Cargo:</label>
                            <input type="text" name="cargo" class="form-control cargo">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="correo">Correo:</label>
                            <input type="text" name="correo" class="form-control correo">
                        </div>
                        <div class="form-group col-md-12">
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

                    </div>

                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="editarEmpleado()">Guardar Cambios</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin wrapper -->
    <?php include "includes/scriptsDown.php" ?>

    <script>
        $(document).ready(function() {
       
            $('.mostrarTabla').load('tablas/tablaEmpleados.php');

        });
    </script>

</body>

</html>