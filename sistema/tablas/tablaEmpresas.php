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
            <th>Nombre Empresa</th>
            <th>Nit</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>

    </thead>

    <tbody>

        <?php include("../../db/Conexion.php");
        $conexion = new Conexion();
        $consultaSQL = "SELECT * FROM empresas em 
        INNER JOIN estado es ON es.id_estado=em.estado_empresa ORDER BY nombre_empresa";
        $empresas = $conexion->consultarDatos($consultaSQL);
        foreach ($empresas as $empresa) :
            $datos = $empresa['id_empresa'] . "||" . $empresa['nombre_empresa'] .
                "||" . $empresa['nit_empresa'] . "||" . $empresa['estado_empresa'];


        ?>
            <tr class="text-center">
                <td><?php echo ($empresa['id_empresa']); ?></td>
                <td><?php echo ($empresa['nombre_empresa']); ?></td>
                <td><?php echo ($empresa['nit_empresa']); ?></td>
                <td><?php echo ($empresa['nombre_estado']); ?></td>
                <td>
                    <h5>
                        <button class="btn btn-info" id="" title="Editar Empresa" onclick="formEditarEmpresa('<?php echo ($datos); ?>')"><i class="fas fa-edit"></i></i></button>

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
                [1, "asc"]
            ],
            "pageLength": 10,
            "language": {
                "url": "../plugins/datatables/Spanish.json"
            },
        });
    });
</script>