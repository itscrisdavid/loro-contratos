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
            <th>Nombre Empleado</th>
            <th>Cargo</th>
            <th>Correo</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>

    </thead>

    <tbody>

        <?php include("../../db/Conexion.php");
        $conexion = new Conexion();
        $consultaSQL = "SELECT * FROM empleados empl 
        INNER JOIN estado es ON es.id_estado=empl.estado_empleado 
        INNER JOIN empresas empr ON empr.id_empresa=empl.empresa
        ORDER BY empl.nombre_empleado";
        $empleados = $conexion->consultarDatos($consultaSQL);
        foreach ($empleados as $empleado) :
            $datos = $empleado['id_empleado'] . "||" . $empleado['nombre_empleado'] .
                "||" . $empleado['empresa'] . "||" . $empleado['cargo_empleado']."||" . $empleado['correo_empleado']. "||" . $empleado['estado_empleado'];


        ?>
            <tr class="text-center">
                <td><?php echo ($empleado['id_empleado']); ?></td>
                <td><?php echo ($empleado['nombre_empresa']); ?></td>
                <td><?php echo ($empleado['nombre_empleado']); ?></td>
                <td><?php echo ($empleado['cargo_empleado']); ?></td>
                <td><?php echo ($empleado['correo_empleado']); ?></td>
                <td><?php echo ($empleado['nombre_estado']); ?></td>
                <td>
                    <h5>
                        <button class="btn btn-info" id="" title="Editar Empresa" onclick="formEditarEmpleado('<?php echo ($datos); ?>')"><i class="fas fa-edit"></i></i></button>

                    </h5>
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
                [2, "asc"]
            ],
            "pageLength": 10,
            "language": {
                "url": "../plugins/datatables/Spanish.json"
            },
        });
    });
</script>