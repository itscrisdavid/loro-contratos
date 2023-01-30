<?php
$sessionTime = 365 * 24 * 60 * 60; // 1 año de duración
session_set_cookie_params($sessionTime);
session_start();
include "../db/Conexion.php";
$conexion = new Conexion();

if (empty($_SESSION['active'])) {
    header('location: ../');
}
$usuario = $_SESSION['iduser'];
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Contrato - Loro Musical</title>

    <?php include "includes/scriptsUp.php" ?>
</head>


<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <?php include "includes/navbar.php" ?>

        <!-- Contentido Wrapper-->
        <div class="content-wrapper">
            <!-- contenido-header -->
            <div class="content-header">
                <div class="container-fluid">

                    <!-- inicio de cuerpo de trabajo -->
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Nuevo Contrato</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                <li class="breadcrumb-item active">Nuevo Contrato</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contenido-header -->

            <section class="content">
                <!-- inicio cuerpo de trabajo -->
                <div class="container-fluid">

                    <div class=" mx-auto d-block border border-dark rounded col-md-12 mb-4">
                        <h2 class="mx-auto d-block mt-2 p-1 text-center">Creación de Nuevo Contrato</h2>
                        <form action="" id="formIngresoContrato" class="needs-validation mt-4 p-2 " method="POST" novalidate>
                            <div class="form-row">
                                <div class="form-group col-md-6">

                                    <label for="nombreCompleto">Nombre Completo (*):</label>
                                    <input type="text" id="nombreCompleto" name="nombreCompleto" class="form-control" style="color:darkgray" required autocomplete="off">
                                    <div class="invalid-feedback">Ingrese el nombre completo</div>
                                </div>
                                <div class="form-group col-md-6">

                                    <label for="nombreArtistico">Nombre Artístico (*):</label>
                                    <input type="text" id="nombreArtistico" name="nombreArtistico" class="form-control" style="color:darkgray" required autocomplete="off">
                                    <div class="invalid-feedback">Ingrese el nombre artístico</div>
                                </div>
                                <div class="form-group col-md-6">

                                    <label for="email">Correo Electrónico (*):</label>
                                    <input type="email" id="email" name="email" class="form-control" style="color:darkgray" required autocomplete="off">
                                    <div class="invalid-feedback">Ingrese el correo electrónico</div>
                                </div>
                                <div class="form-group col-md-6">

                                    <label for="pais">Pais Domicilio (*):</label>
                                    <?php
                                    $consultaProcesos = "SELECT * FROM paises ORDER BY nombre_pais";
                                    $paises = $conexion->consultarDatos($consultaProcesos);
                                    ?>
                                    <select name="pais" class="form-control select2" id="pais" required>
                                        <option disabled selected value="">Seleccione un Pais</option>
                                        <?php foreach ($paises as $pais) : ?>
                                            <option value="<?php echo ($pais['id_pais']) ?>">
                                                <?php echo ($pais['nombre_pais']) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="invalid-feedback">Ingrese el Pais de Domicilio</div>
                                </div>
                                <div class="form-group col-md-4">

                                    <label for="tipoDcto">Tipo Documento (*):</label>
                                    <select name="tipoDcto" class="form-control select2" id="tipoDcto" required>
                                        <option disabled selected value="">Seleccione un tipo de Documento</option>
                                        <option value="CC"> Cédula de Ciudadanía</option>
                                        <option value="CE"> Cédula de Extranjería</option>
                                        <option value="PAP"> Pasaporte</option>
                                    </select>
                                    <div class="invalid-feedback">Ingrese el tipo de documento</div>
                                </div>
                                <div class="form-group col-md-4">

                                    <label for="nroDcto">Número Documento (*):</label>
                                    <input type="number" id="nroDcto" name="nroDcto" class="form-control" style="color:darkgray" required autocomplete="off">
                                    <div class="invalid-feedback">Ingrese el número de documento</div>
                                </div>
                                <div class="form-group col-md-4">

                                    <label for="celular">Celular (*):</label>
                                    <input type="number" id="celular" name="celular" class="form-control" style="color:darkgray" required autocomplete="off">
                                    <div class="invalid-feedback">Ingrese nro Celular</div>
                                </div>
                                </div>
                                <div class="col-12">Información Bancaria</div>
                                <div class="row border border-dark rounded col-12">
                                    <div class="form-group col-md-4">
                                        <?php
                                        $consultaProcesos = "SELECT * FROM bancos ORDER BY nombre_banco";
                                        $bancos = $conexion->consultarDatos($consultaProcesos);
                                        ?>
                                        <label for="banco">Banco (*):</label>
                                        <select name="banco" class="form-control select2" id="banco" required>
                                            <option disabled selected value="">Seleccione un banco</option>
                                            <?php foreach ($bancos as $banco) : ?>
                                                <option value="<?php echo ($banco['id_banco']) ?>">
                                                    <?php echo ($banco['nombre_banco']) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div class="invalid-feedback">Ingrese el Banco</div>
                                    </div>
                                    <div class="form-group col-md-4">

                                        <label for="tipoCuenta">Tipo Cuenta (*):</label>
                                        <select name="tipoCuenta" class="form-control select2" id="tipoCuenta" required>
                                            <option disabled selected value="">Seleccione un banco</option>
                                            <option value="Ahorro">Ahorro</option>
                                            <option value="Ahorro">Internacional</option>
                                            <option value="Corriente">Corriente</option>

                                        </select>
                                        <div class="invalid-feedback">Ingrese el Tipo de Cuenta</div>
                                    </div>
                                    <div class="form-group col-md-4">

                                        <label for="numeroCuenta">Número de cuenta (*):</label>
                                        <input type="text" id="numeroCuenta" name="numeroCuenta" class="form-control" style="color:darkgray" required autocomplete="off">
                                        <div class="invalid-feedback">Ingrese documento del artista</div>
                                    </div>
                                </div>





                                <!-- /.card-header -->
                                <!-- <div class="form-group col-md-12">
                                    <label for="obs">Observaciones:</label>
                                    <textarea id="obs" name="obs" class="form-control"></textarea>
                                </div> -->
                            </div>
                            <div class="justify-content-center">
                                <div class="text-center">

                                    <button type="submit" class="btn btn-dark mt-3" name="botonRegistro" id="botonRegistro">Registrar Entrega</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- fin cuerpo de trabajo -->
            </section>
        </div>
        <!-- fin contenido-wrapper -->
        <!-- Main Footer -->
        <?php /* include "includes/footer.php"  */ ?>

    </div>
    <!-- fin wrapper -->
    <?php include "includes/scriptsDown.php" ?>

    <script>
        $(function() {

            $(document).on('submit', '#formIngresoContrato', function() {
                $('#botonRegistro').prop('disabled', true);

                const data = $('#formIngresoContrato').serialize();
                console.log(data);
                $.ajax({
                    url: "php/ingresarContrato.php",
                    method: 'POST',
                    data: data,

                    success: function(res) {
                        console.log('success', res)
                        if (res == 1) {

                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                html: '<img src="https://loromusical.co/images/logoLoroMusical.png" style="width:100px">',
                                title: '<br>Contrato registrado corectamente',
                                background: ' #000000cd',
                                showConfirmButton: false,
                                timer: 2000,
                            }).then((result) => {
                                window.location = "";
                            })
                        } else {
                            Swal.fire({
                                position: 'center',
                                icon: 'error',
                                html: '<img src="https://loromusical.co/images/logoLoroMusical.png" style="width:100px">',
                                title: '<br>Error al ingresar el contrato',
                                background: ' #000000cd',
                                showConfirmButton: false,
                                timer: 2000,
                            })
                            $('#botonRegistro').prop('disabled', false);
                            
                        }

                    },
                    error: function(res) {
                        console.log('error:', res);
                    }
                });

            });



        });
    </script>


</body>

</html>