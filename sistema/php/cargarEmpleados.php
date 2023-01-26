<?php
session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();

$empresa = $_POST['empresa'];
$consultaSQL = "SELECT * FROM empleados WHERE empresa='$empresa'";
$empleados = $conexion->consultarDatos($consultaSQL);?>

    <option value="" selected disabled>Seleccione Una Empleado</option>
<?php
foreach($empleados as $empleado):
?>
 <option value="<?php echo($empleado['id_empleado']);?>"><?php echo($empleado['nombre_empleado']);?></option>
<?php endforeach;?>

<script>
    $('.select2').select2({
        theme: 'bootstrap4'
    })
</script>