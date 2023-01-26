<?php
session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();

$idEntrega = $_POST['idEntrega'];


$consultaSQL = "SELECT * FROM entregas ent 
INNER JOIN empresas empr ON empr.id_empresa=ent.empresa
INNER JOIN empleados empl ON empl.id_empleado=ent.empleado
INNER JOIN usuario us ON us.id_usuario=ent.usuario
 WHERE ent.id_entrega='$idEntrega'";
$entrega = $conexion->consultarDatos($consultaSQL);
?>

<div class="card bg-white text-dark mt-5">


    <div class="card-body">
        <div class="row">
            <div class="col-2"><img src="../img/expertosip-negro.png" style="width:100%"></div>
            <div class="col-8 font-weight-bold text-center">
                <h3>ENTREGA A SATISFACCIÓN DE PRODUCTOS Y/O SERVICIOS</h3>
            </div>
            <div class="col-2 border rounded font-weight-bold d-flex align-items-center"><span class="mx-auto">
                    <p>
                    <h2>Entrega N°<?php echo ($idEntrega) ?></h2>
                    </p>
                    <p><?php echo ($entrega[0]['fecha_ingreso']) ?></p>
                </span> </div>
        </div>
        <hr>
        <div class="row">
            <div class="p-2 col-6 border rounded"><span class="font-weight-bold">Razón Social (Cliente): </span> <?php echo ($entrega[0]['nombre_empresa']) ?></div>
            <div class="p-2 col-6 border rounded"><span class="font-weight-bold">Nit: </span> <?php echo ($entrega[0]['nit_empresa']) ?></div>
        </div>
        <div class="row mt-2">
            <div class="p-2 col-6 border rounded"><span class="font-weight-bold">Quien Recibe: </span> <?php echo ($entrega[0]['nombre_empleado']) ?></div>
            <div class="p-2 col-6 border rounded"><span class="font-weight-bold">Cargo: </span> <?php echo ($entrega[0]['cargo_empleado']) ?></div>
        </div>
        <hr>
        <div class="col-12 ">
            <table class="table table-sm" width="100%">
                <thead>
                    <tr class="text-center table-active">
                        <th style="width:50px">Item</th>
                        <th style="width:70px">Cant</th>
                        <th>Descripción</th>
                        <th>Marca</th>
                        <th>Serial</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $consultaSQL = "SELECT * FROM entregas_productos WHERE entrega=$idEntrega";
                    $productos = $conexion->consultarDatos($consultaSQL);
                    $contar = 1;
                    foreach ($productos as $producto) :
                    ?>
                        <tr class="text-center">
                            <td><?php echo ($contar) ?></td>
                            <td><?php echo ($producto['cantidad']) ?></td>
                            <td><?php echo ($producto['descripcion']) ?></td>
                            <td><?php echo ($producto['marca']) ?></td>
                            <td><?php echo ($producto['serial']) ?></td>
                        </tr>
                    <?php $contar++;
                    endforeach ?>
                </tbody>
            </table>
        </div>
        <hr>
        <div class="p-2 mt-3 col-12 border rounded">
            <span class="font-weight-bold">Observaciones:</span>
            <hr> <?php echo ($entrega[0]['observaciones']) ?>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 text-center ">
                <div ><span><?php echo ($entrega[0]['firma_empleado']) ?></span ></div>
                <div><?php echo ($entrega[0]['nombre_empleado']) ?></div>
            </div>
            <div class="col-md-6 text-center">
            <div ><span><?php echo ($entrega[0]['firma_usuario']) ?></span ></div>
                <div><?php echo ($entrega[0]['nombre_usuario']) ?>(<?php echo ($entrega[0]['cargo_usuario']) ?>)</div>
            </div>
        </div>



    </div>
    <div class="card-footer">
        <b>Nota:</b> Al formatear un equipo, EXPERTOSIP SAS <b>No se hace responsable</b>  
        por la información que esté pro fuera de la ruta o carpetas que estén indicadas en esta hoja
    </div>
  

</div>

