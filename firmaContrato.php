<?php

include("db/Conexion.php");

$conexion = new Conexion();


$id = $_GET['id'];

// echo $id;
$consultaSQL = "SELECT co.nombre_completo, co.log_termino,  co.tipo_documento, co.nro_documento, ex.nombre_ciudad expedicion, 
                ed.nombre_ciudad domicilio, ba.nombre_banco, co.nombre_artista  , co.tipo_cuenta, co.numero_cuenta, us.firma_usuario,
                co.email, co.fecha_contrato
                FROM contratos co
                INNER JOIN ciudades ex ON ex.id_ciudad=co.expedicion_documento 
                INNER JOIN ciudades ed ON ed.id_ciudad=co.ciudad_domicilio 
                INNER JOIN bancos ba ON ba.id_banco=co.id_banco 
                inner JOIN usuario us ON us.id_usuario=1
                WHERE co.id_aleatorio='$id'";
$resultado = $conexion->consultarDatos($consultaSQL);
if ($resultado) {

    $firmado = $resultado[0]['log_termino'];

    if (!$firmado) {


        $fechaActual = $resultado[0]['fecha_contrato'];
        $nombreCompleto = $resultado[0]['nombre_completo'];
        $tipoDcto = $resultado[0]['tipo_documento'];
        $nroDcto = $resultado[0]['nro_documento'];
        $expedicion = $resultado[0]['expedicion'];
        $domicilio = $resultado[0]['domicilio'];
        $banco = $resultado[0]['nombre_banco'];
        $nombreArtistico = $resultado[0]['nombre_artista'];
        $tipoCuenta = $resultado[0]['tipo_cuenta'];
        $numeroCuenta  = $resultado[0]['numero_cuenta'];
        $firma  = $resultado[0]['firma_usuario'];
        $email  = $resultado[0]['email'];
        print_r('Contrato N°' . strtoupper($id));
    }
?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Contrato - <?php echo $nombreArtistico ?></title>
        <meta name="description" content="Contrato de <?php echo $nombreCompleto ?>">
        <link rel="icon" href="https://loromusical.co/images/logoLoroMusical.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="stylesheet" href="css/signature-pad.css">
        <link href="plugins/sweetalert2/sweetalert2.css" rel="stylesheet">

    </head>

    <body oncontextmenu="return false;" onmousedown="return false;" onselectstart="return false;">
        <?php

        if (!$firmado) { ?>
            <div class="container" style='text-align:justify'>
                <div class='text-center'>
                    <img src='https://loromusical.co/images/logoLoroMusical.png' alt='' style='width:150px'>
                </div>

                <div style=' text-align: center;' class='mt-5'>
                    <h2>ACUERDO DE ADMINISTRACIÓN</h2>
                    <h2>DE DERECHOS FONOGRÁFICOS</h2><br>
                </div>
                <div style='text-align: center;'>
                    <p>
                        <!-- <b>Fecha Actual:</b> <?php echo $fechaActual ?><br> -->
                        <?php print_r('<b>Contrato N°:</b> ' . strtoupper($id)); ?>
                    </p><br>
                </div>
                <p>
                    El siguiente acuerdo de administración de derechos fonográficos (el <b>ACUERDO</b>), se produce por y entre <b><?php echo $nombreCompleto ?></b> que actúa artísticamente como <b><?php echo $nombreArtistico ?></b> (el <b>LICENCIANTE</b>), identificado con <b><?php echo $tipoDcto ?></b> número <b><?php echo $nroDcto ?></b>; y <b>LORO MUSICAL S.A.S</b> (<b>LORO MUSICAL</b>), registrado en la Cámara de Comercio de Medellín para Antioquia (Colombia) e identificado con <b>NIT 901506267-0</b>.
                </p>
                <p>
                    <b>Usted entiende que al firmar electrónicamente el acuerdo y/o al utilizar los servicios de administración de fonogramas ofrecidos por LORO MUSICAL, usted se obliga a cumplir los términos aquí detallados. Si usted no acepta este acuerdo en su totalidad, favor abstenerse de aceptar y/o firmar electrónicamente este acuerdo y no utilice los servicios de administración de fonogramas de LORO MUSICAL. La “Fecha Efectiva” del acuerdo será establecida al momento de la firma electrónica de este contrato.</b>
                </p>
                <p>
                    Este acuerdo se regirá por las siguientes cláusulas, términos y consideraciones:
                </p><br>
                <div>
                    <h3 style='text-align: center;'>
                        CLÁUSULAS
                    </h3><br>
                </div>
                <p>
                    <b>PRIMERA: LICENCIA: LORO MUSICAL</b> tendrá los derechos exclusivos de distribución digital de los fonogramas que el <b>LICENCIANTE</b> envíe para su administración desde la Fecha Efectiva hasta la duración de este <b>ACUERDO</b>.
                </p>
                <p>
                    <b>SEGUNDA: INGRESOS:</b> En contraprestación a los derechos concedidos a <b>LORO MUSICAL</b> en el <b>ACUERDO</b>, <b>LORO MUSICAL</b> pagará al <b>LICENCIANTE</b>, condicionado al pleno cumplimiento de todas la cláusulas, el setenta por ciento (70%) de los Ingresos Netos por distribución digital de los fonogramas, Content ID, administración del Canal de YouTube y administración de Derechos Conexos.
                </p>
                <p>
                    <b>TERCERA: DURACIÓN:</b> El tiempo de vigencia del <b>ACUERDO</b> comenzará a partir de la Fecha Efectiva y continuará por un periodo inicial de 1 año o hasta que se llegue a tomar alguna de las causales de terminación establecidas en la cláusula decimoprimera de este <b>ACUERDO</b>. Una vez expirado el periodo inicial, se renovará automáticamente por períodos adicionales, sucesivos de un año, hasta que se dé por terminado por alguna de las partes con al menos 30 días de anticipación de manera escrita.
                </p>
                <p>
                    <b>CUARTA: TERRITORIO:</b> Este <b>ACUERDO</b> regirá en todo el universo.
                </p>




                <p>
                    <b> NOVENA: PAGOS:</b> <b>LORO MUSICAL</b> pagará las regalías en los primeros 15 días hábiles de los
                    meses de enero, abril, julio y octubre haciendo corte trimestral de la siguiente manera: Los
                    pagos realizados en enero corresponderá a los ingresos obtenidos durante el 1 de octubre al
                    31 de diciembre. Los pagos realizados en abril corresponderá a los ingresos obtenidos
                    durante el 1 de enero al 31 de marzo. Los pagos realizados en julio corresponderá a los
                    ingresos obtenidos durante el 1 de abril al 30 de junio. Y los pagos realizados en octubre
                    corresponderá a los ingresos obtenidos durante el 1 de julio al 30 de septiembre.
                </p>
                <p>
                    El pago de las regalías se realizará a través de transferencia bancaria siempre y cuando los
                    ingresos para el <b>ARTISTA</b> superen el valor mínimo de $25.000 M.L.C (veinticinco mil pesos),
                    en caso de no cumplir el mínimo, el pago se acumulará y se realizará en el siguiente ciclo.
                <div><b>Banco:</b> <?php echo $banco ?></div>
                <div><b>Número cuenta:</b> <?php echo $numeroCuenta ?></div>
                <div><b>Tipo de cuenta:</b> <?php echo $tipoCuenta ?></div>

                </p>

                <p>
                    <b>DÉCIMA: INFORMACIÓN CONFIDENCIAL:</b> El <b>ARTISTA</b> se obliga a no divulgar a terceras
                    partes, la “Información Confidencial”, información sobre el contrato, períodos de pago o
                    cualquier otro dato que no sea autorizado por parte de <b>LORO MUSICAL</b>. Además, se
                    compromete a darle a dicha información el mismo tratamiento que le darían a la
                    información confidencial de su propiedad. PARÁGRAFO: Para efectos de la presente acta,
                    “Información Confidencial” comprende toda la información divulgada por <b>LORO MUSICAL</b> ya
                    sea en forma oral, visual, escrita, grabada en medios magnéticos o en cualquier otra forma
                    tangible y que se encuentre claramente marcada como tal al ser entregada a la parte
                    receptora.
                </p>


                <p>
                    <b>DÉCIMA PRIMERA: CATÁLOGO Y EXCLUSIVIDAD:</b> El <b>ARTISTA</b>  concede a LORO MUSICAL 
                    la exclusividad únicamente de las obras musicales y audiovisuales que envíe para su distribución durante la vigencia de este contrato..
                </p>
                <p>
                    <b>DÉCIMA SEGUNDA: OTROS CONTRATOS:</b> Durante la vigencia de este contrato podrá
                    celebrarse otros acuerdos entre las Partes para servicios adicionales, sin que,
                    necesariamente, modifiquen este contrato de distribución ni la duración del mismo.
                </p>
                <p>
                    <b>DÉCIMA TERCERA: NOTIFICACIONES:</b> El <b>ARTISTA</b> establece como lugar de notificaciones el
                    correo electrónico <?php echo $email  ?> y autoriza, con la firma de este contrato, enviarle
                    información relacionada con el estado de sus servicios. Por otra parte, <b>LORO MUSICAL</b>
                    habilita el correo electrónico info@loromusical.co para brindar soporte a cualquier duda
                    que pueda surgir durante la vigencia de este contrato.
                </p>

                <p>
                    <b>DÉCIMA CUARTA: JURISDICCIÓN:</b> En caso de controversia, diferencia, conflicto o
                    reclamación en cuanto al Contrato, o en relación a o derivado de la interpretación o
                    ejecución del mismo, se acuerda que se someterán a la jurisdicción de los Juzgados y
                    Tribunales competentes conforme al derecho colombiano.
                </p>

                <p>
                    Para constancia, se emiten dos copias iguales, una para cada parte, y se firma en 
                    representación propia y entendiendo la información consignada en este contrato 
                    a la fecha establecida en el encabezado de este contrato.
                </p>
                <div class='row mt-5 text-center'>

                    <div class='col-12 '>
                        <div class=''><img src="<?php echo $firma ?>" alt="Firma Representante" width="300px"></div>
                        Maria Garces Castaño <br>
                        C.C. 43.261.125 de Medellín <br>
                        Representante <b>LORO MUSICAL</b>
                    </div>

                </div>
            </div>
            <div class="text-center">
                <center><div id="signature-pad" class="signature-pad mt-5 ">
                    <div class="signature-pad--body">
                        <canvas></canvas>
                    </div>
                    <div class="signature-pad--footer">
                        <div class="description">Firma Aquí</div>

                        <div class="signature-pad--actions">
                            <div>
                                <button type="button" class="btn btn-dark" data-action="clear">Limpiar</button>
                                <button type="button" class="btn btn-secondary" data-action="undo">Deshacer</button>

                            </div>

                        </div>
                    </div>
                </div></center>

                <div id="enviar" class="mt-5 mb-5">
                    <button type="button" class="btn btn-info" data-action="guardar-firma"> Enviar Contrato</button>
                </div>
                <div id="mostrarSvg"></div>
                <br><br><br><br>

            </div>
            <script src="plugins/jquery/jquery.min.js"></script>
            <script src="plugins/sweetalert2/sweetalert2.js"></script>
            <script src="js/signature_pad.umd.js"></script>
            <script src="js/app.js"></script>

            <script>
                var enviar = document.getElementById("enviar");
                var guardar = enviar.querySelector("[data-action=guardar-firma]");
                guardar.addEventListener("click", function(event) {
                    if (signaturePad.isEmpty()) {
                        Swal.fire({
                            position: "center",
                            html: '<img src="https://loromusical.co/images/logoLoroMusical.png" style="width:100px"><br>',
                            title: "Por favor firma el contrato",
                            background: " #000000cd",
                            showConfirmButton: false,
                            timer: 3000,
                        });
                    } else {
                        const signature = signaturePad.toDataURL();
                        const idContrato = '<?php echo $id ?>';
                        $.ajax({
                            type: "POST",
                            url: "sistema/php/actualizarFirmaContrato.php",
                            data: {
                                id: idContrato,
                                signature: signature
                            },
                            dataType: "json",
                            success: function(res) {
                                Swal.fire({
                                    position: "center",
                                    html: '<img src="https://loromusical.co/images/logoLoroMusical.png" style="width:100px"><br>',
                                    title: "Gracias, pronto nos comunicaremos contigo",
                                    background: " #000000cd",
                                    showConfirmButton: false,
                                    timer: 6000,
                                }).then((result) => {
                                    window.location = "../";
                                });

                            },
                            error: function(res) {
                                console.log('error:', res);
                            }
                        });
                    }
                });
            </script>

        <?php } else { ?>



            <script src="plugins/jquery/jquery.min.js"></script>
            <script src="plugins/sweetalert2/sweetalert2.js"></script>
            <script>
                Swal.fire({
                    position: "center",
                    html: '<img src="https://loromusical.co/images/logoLoroMusical.png" style="width:100px"><br>',
                    title: "Este contrato ya fue firmado",
                    background: " #000000cd",
                    showConfirmButton: false,
                    timer: 6000,
                }).then((result) => {
                    window.location = "../";
                });
            </script>
        <?php } ?>
    </body>

    </html>

<?php  } ?>