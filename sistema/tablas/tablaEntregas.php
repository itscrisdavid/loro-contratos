<?php
session_start();
if (empty($_SESSION['active'])) {
    header('location: ../');
}
?>
<table class="table table-hover table-condensed table-bordered tablaDinamica" id="" width="100%" cellspacing="0">
    <thead>
        <tr class="text-center">
            <th>ID</th>
            <th>Empresa</th>
            <th>Recibió</th>
            <th>Entregó</th>
            <th>Fecha Registro</th>
            <th>Estado Firma</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>

        <?php include("../../db/Conexion.php");
        $conexion = new Conexion();
        $consultaSQL = "SELECT * FROM entregas ent 
                        INNER JOIN empresas empr ON empr.id_empresa=ent.empresa
                        INNER JOIN empleados empl ON empl.id_empleado=ent.empleado
                        INNER JOIN usuario us ON us.id_usuario=ent.usuario
                        INNER JOIN estado_entrega esen ON ent.estado_entrega=esen.id_estado WHERE ent.estado_entrega<=2";
        $entregas = $conexion->consultarDatos($consultaSQL);
        foreach ($entregas as $entrega) :
            $datos = $entrega['id_entrega'] . "||" . $entrega['estado_entrega'] . "||";

            $firmaEmpleado = $entrega['firma_empleado'];
        ?>
            <tr class="text-center">
                <td><?php echo ($entrega['id_entrega']); ?></td>
                <td><?php echo ($entrega['nombre_empresa']); ?></td>
                <td><?php echo ($entrega['nombre_empleado'] . " (" . $entrega['cargo_empleado'] . ")"); ?></td>
                <td><?php echo ($entrega['nombre_usuario']); ?></td>
                <td><?php echo ($entrega['fecha_ingreso']); ?></td>
                <td><?php echo ($entrega['nombre_estado']); ?></td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary" title="<?php if($firmaEmpleado==""){echo("Editar");}else{echo("Ver");}?> Entrega"><a href="reporteEntrega.php?id=<?php echo ($entrega['id_entrega']); ?>" target="_black"><i class="<?php if($firmaEmpleado==""){echo("fas fa-edit");}else{echo("fas fa-eye");}?> text-white"></i></a></button>
                        <button type="button" class="btn btn-success" title="Finalizar Entrega" onclick="finalizarEntrega('<?php echo ($datos); ?>3')"><i class="fas fa-check-circle"></i></button>
                        <button type="button" class="btn btn-danger" title="Anular Entrega" onclick="finalizarEntrega('<?php echo ($datos); ?>4')"><i class="fas fa-times-circle"></i></button>
                    </div>

                </td>
            </tr>

        <?php

        endforeach;  ?>

    </tbody>
</table>
<!-- <script src="js/scri.js"></script> -->
<!-- datatable -->
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
                [0, "asc"]
            ],
            "pageLength": 10,
            "language": {
                "url": "../plugins/datatables/Spanish.json"
            },
        });
    });
</script>