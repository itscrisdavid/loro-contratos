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
  <title>Panel de Contratos - Loro Musical</title>
  <link rel="icon" href="https://loromusical.co/images/logoLoroMusical.png">

  <?php include "includes/scriptsUp.php" ?>
</head>

<style>
  #signatureparent {
    color: black;
    background-color: darkgrey;
    /* max-width: 350px; */
    max-width: 100%;
    padding: 10px;
    border-radius: 6px;
  }

  #firma {
    border: 2px dotted black;
    background-color: lightgrey;
  }

  html.touch #content {
    float: left;
    width: 92%;
  }
</style>

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
              <h1 class="m-0"></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Inicio</li>

              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- contenido-header -->

      <section class="content">
        <table class="table table-hover table-condensed table-bordered tablaDinamica" id="" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th>ID</th>
              <th>Nro Contrato</th>
              <th>Nombre Completo</th>
              <th>Nombre Artista</th>
              <th>Nro Documento</th>
              <th>Fecha Registro</th>
              <th>Celular</th>
              <th>¿Firma?</th>
              <th>Contrato</th>
            </tr>
          </thead>

          <tbody>

            <?php $consultaSQL = "SELECT * FROM contratos co INNER JOIN paises pa ON pa.id_pais=co.id_pais";
            $constratos = $conexion->consultarDatos($consultaSQL);
            foreach ($constratos as $contrato) :
              // $datos = $contratos['id_usuario'] . "||" . $usuario['nombre_usuario'] . "||" . $usuario['cargo_usuario']
              //   . "||" . $usuario['rol'] . "||" . $usuario['usuario_sesion'] . "||" . $usuario['clave'] . "||" . $usuario['correo_usuario'];

              $searchString = " ";
              $replaceString = "%20";
              $outputString = str_replace($searchString, $replaceString, $contrato['nombre_artista']);
            ?>
              <tr class="text-center">
                <td><?php echo ($contrato['id_contrato']); ?></td>
                <td><?php echo ($contrato['id_aleatorio']); ?></td>
                <td><?php echo ($contrato['nombre_completo']); ?></td>
                <td><?php echo ($contrato['nombre_artista']); ?></td>
                <td><?php echo ($contrato['tipo_documento'] . ' ' . $contrato['nro_documento']); ?></td>
                <td><?php echo ($contrato['fecha_contrato']); ?></td>
                <td><?php echo ('+' . $contrato['codigo_telefono'] . ' ' . $contrato['celular']); ?></td>
                <td><?php echo ($contrato['log_termino'] == 0 ? '<a target="_blank" href=https://api.whatsapp.com/send?phone=+' . $contrato['codigo_telefono'] . $contrato['celular'] . '&text=Hola%20' . $outputString . ',%20queremos%20darte%20la%20bienvenida%20a%20*Loro%20Musical*.%20En%20este%20link%20encontrar%C3%A1s%20tu%20contrato,%20si%20estas%20de%20acuerdo,%20firmalo%20y%20env%C3%ADalo%20https://loromusical.co/admin/firmaContrato.php?id=' . $contrato['id_aleatorio'] . '>No, Enviar Mensaje</a>' : $contrato['fecha_termino']); ?></td>
                <td>
                  <?php if ($contrato['log_termino'] == 1) : ?>
                    <a target="_blank" href="contrato.php?id=<?php echo $contrato['id_aleatorio']  ?>">Ver Contrato</a>
                  <?php endif ?>
                </td>
                <!-- <td>
                  <h5>
                    <button class="btn btn-info" id="" title="Editar Usuario" onclick="formEditarusuario('<?php echo ($datos); ?>')"><i class="fas fa-user-edit"></i></i></button>

                  </h5> -->
                </td>
              </tr>

            <?php

            endforeach;  ?>

          </tbody>
        </table>
        <!-- <script src="js/scri.js"></script> -->
        <!-- datatable -->


        <!-- inicio cuerpo de trabajo -->
        <div class="container-fluid">



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

</body>
<script>
  $(document).ready(function() {

    $('.tablaDinamica').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'copyHtml5',
        'excelHtml5',
        'pdfHtml5',
        'print',
        'csv'
      ],
      responsive: true,
      "order": [
        [0, "desc"]
      ],
      "pageLength": 10,
      "language": {
        "url": "../plugins/datatables/Spanish.json"
      },
    });
  });
</script>

</html>
