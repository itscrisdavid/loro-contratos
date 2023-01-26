<?php
session_start();
include("../../db/Conexion.php");
$conexion = new Conexion();
//buscar ultimo idEntrega
$consultaSQL = "SELECT max(id_entrega) as 'max' FROM entregas";
$result = $conexion->consultarDatos($consultaSQL);
$idEntrega = $result[0]['max'];

$consultaSQL = "SELECT * FROM entregas ent 
INNER JOIN empresas empr ON empr.id_empresa=ent.empresa
INNER JOIN empleados empl ON empl.id_empleado=ent.empleado
INNER JOIN usuario us ON us.id_usuario=ent.usuario
INNER JOIN estado_entrega esen ON ent.estado_entrega=esen.id_estado
 WHERE ent.id_entrega='$idEntrega'";
$entrega = $conexion->consultarDatos($consultaSQL);

$destinatario = $entrega[0]['correo_empleado'];
$asunto = "Confirmación de Firma para Entrega N°" . $idEntrega;
$cuerpo = " 
        <html> 
        <meta charset=\"utf-8\" />
        <body> 
        <h1 style=\"text-transform: uppercase;\">Hola " . $entrega[0]['nombre_empleado'] . "</h1> 
        <p> 
        <b>Se ha reportado una firma en la entrega N°" . $idEntrega . ", Y está esperando por ser aprobada.</b>. <br><br>
        <br>
        <center>
        <button type=\"button\" style=\"background-color: #2e3838; border-radius: 5px;padding: 5px; width: 300px;\"><a style=\"text-transform: none; color: white; font-weight: bold;  font-size: large;\" href=\"https://signature.intranetk-misetas.com/confirmarEntrega.php?id=".$idEntrega."\">CONFIRMAR</a></button>
        </center>
         <br><br>
         
        Si presenta alguna incosistencia con esta información, por favor abstenerse de aprobar firma y hacer el reporte. <br>
        </p> 
        </body> 
        </html> 
        
        ";
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente 
$headers .= "From: expertosip.com <noreply@expertosip.com>\r\n";

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To:" . $entrega[0]['correo_usuario'] . "\r\n";

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path:" . $entrega[0]['correo_empleado'] . "\r\n";

//direcciones que recibián copia 
//$headers .= "Cc:" . $entrega[0]['correo_usuario'] . "\r\n";

//direcciones que recibirán copia oculta 
/* $headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n";  */
$mail = @mail($destinatario, $asunto, $cuerpo,$headers);


echo json_encode($idEntrega);
//consultar el ultimo id de tabla novedades
?>

