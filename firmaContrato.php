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
    <html lang="es">

    <head>
        <meta charset="utf-8">
        <title>Acuerdo Administración - <?php echo $nombreArtistico ?></title>
        <meta name="description" content="Acuerdo Administración - <?php echo $nombreArtistico ?>">
        <link rel="icon" href="https://loromusical.co/images/icono.png">
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
                    <img src='https://loromusical.co/images/logoLoroMusical.png' alt='' style='width:125px'>
                </div>

                <div style=' text-align: center;' class='mt-5'>
                    <h2>ACUERDO DE ADMINISTRACIÓN</h2>
                    <h2>DE DERECHOS FONOGRÁFICOS</h2><br>
                </div>
                <div style='text-align: center;'>
                    <p>
                        <!-- <b>Fecha Efectiva:</b> <?php echo $fechaActual ?><br> -->
                        <b>Fecha Efectiva:</b> Se asignará al firmar
                        <!-- <?php print_r('<b>Contrato N°:</b> ' . strtoupper($id)); ?> -->
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
                    <b>QUINTA: CONCESIÓN DE DERECHOS:</b> Por el presente <b>ACUERDO</b> el <b>LICENCIANTE</b> otorga la licencia a <b>LORO MUSICAL</b> de forma exclusiva, irrevocable y sublicenciable de:
                </p>
                <ul>
                    <li>
                        El derecho exclusivo para convertir, digitalizar, codificar, integrar, hacer, causar o de otra manera reproducir los fonogramas en cualquier formato digital electrónico conocido o por conocerse con el propósito de distribuir, explotar o usar los fonogramas como acá se otorgan.
                    </li>
                    <li>
                        El derecho y la licencia exclusiva para distribuir, reproducir, transmitir, licenciar, vender digitalmente (incluyendo sin limitarse mediante descargas, streams y servicios de suscripción), publicitar, publicar, comunicar públicamente, emitir y de otra manera usar y explotar los fonogramas en cualquier formato electrónico o digital conocido o por conocerse en el <b>TERRITORIO</b> a través de cualquier plataforma o servicio incluyendo pero no limitando a su sitio o los sitios, plataformas o servicios de cualesquiera Plataforma de Terceros (distribución digital); y actuar como el agente de ISRCs del licenciante para adjudicar códigos ISRCs a los fonogramas.
                    </li>
                    <li>
                        El derecho y/u la licencia exclusiva para explotar, monetizar, reclamar y administrar la explotación de fonogramas y/u otros contenidos a través de plataformas que cuenten con software de identificación y rastreo de Contenido, cuando se incluyan fonogramas y/u otros contenidos en las grabaciones de audio, visuales y audiovisuales, y otros contenidos generados por terceros, en especial usuarios de YouTube mediante el uso de la herramienta conocida como Content ID. Así también como la gestión de Content ID de YouTube.
                    </li>
                    <li>
                        El derecho y la licencia no-exclusiva para usar en el <b>TERRITORIO</b> el nombre artístico, la marca, el nombre comercial, semejanzas, imagen y biografía de cada artista cuya interpretación está incorporada en los fonogramas y en las artes del lanzamiento, letras y notas relacionadas con los fonogramas en conexión con la explotación, venta y distribución de los fonogramas del presente y la publicidad, publicitación y promoción de los fonogramas en todas las configuraciones y por cualquier medio, siempre que todos los materiales proporcionados por el licenciante a <b>LORO MUSICAL</b> sean considerados aprobados para los propósitos de este <b>ACUERDO</b>.
                    </li>
                    <li>
                        El derecho y la licencia para explotar las composiciones musicales incorporadas en los fonogramas en la medida que se necesite para que <b>LORO MUSICAL</b> explote los derechos otorgados en el presente. En el caso en el que el <b>LICENCIANTE</b> no tenga propiedad o control sobre tales composiciones musicales, el <b>LICENCIANTE</b> deberá obtener licencias para tales composiciones.
                    </li>
                    <li>
                        El derecho exclusivo a registrar los fonogramas, a nombre del <b>LICENCIANTE</b>, en organizaciones y agencias de licenciamiento que realicen el recaudo de regalías por comunicación pública de Derechos Conexos; reclamar y recaudar, a nombre del <b>LICENCIANTE</b> y en su interés, todas las regalías por comunicación pública de Derechos Conexos y otros conceptos adeudados al solicitante por el ejercicio y explotación de derechos de comunicación pública de los fonogramas; utilizar y explotar de cualquier manera, y permitir a terceros para que utilicen y exploten de cualquier manera, los Derechos Conexos de los fonogramas por cualquier medio digital conocido o por conocerse, sea por medios interactivos o no interactivos, en especial pero no limitado a la comunicación pública digital y el licenciamiento para terceros para la explotación de los fonogramas, públicamente o de manera privada, con o sin ánimo de lucro, por cualquier medio conocido o desarrollado en el futuro.
                    </li>
                    <li>
                        El derecho no exclusivo, sujeto a la aprobación previa del <b>LICENCIANTE</b> en cada instancia (siendo suficiente el correo electrónico), a licenciar la sincronización de los fonogramas, en conexión con las películas, programas de televisión, anuncios, videojuegos y cualesquiera otra obra audiovisual. Este derecho incluye la capacidad para licenciar el uso, explotación, autorizar la interpretación o ejecución de los fonogramas en las obras audiovisuales descritas. Y, autorizar el uso de las composiciones musicales subyacentes incorporadas en los fonogramas en la medida en que sean de propiedad o controlados por el <b>LICENCIANTE</b>. Así mismo, el <b>LICENCIANTE</b> autoriza a <b>LORO MUSICAL</b> recolectar todo el ingreso relacionado con cualquier explotación de la sincronización de los fonogramas y tales composiciones musicales (excluyendo las regalías por comunicación pública) en uso de este derecho y, licenciar y autorizar, mediante acuerdos escritos, en nombre y representación del <b>LICENCIANTE</b>, el uso de servicios, imagen, marcas comerciales del <b>LICENCIANTE</b>, relacionadas o no con los fonogramas o los servicios del <b>LICENCIANTE</b> como intérprete, en especial pero no limitado a contratos de patrocinio, menciones, comerciales, campañas publicitarias y cualquier otro producto o alianza comercial con la autorización previa por escrito del <b>LICENCIANTE</b>, para el correcto uso de su imagen y/o marcas comerciales.
                    </li>
                    <li>
                        A menos que se especifique expresamente lo contrario, la anterior licencia es exclusiva en todo el <b>TERRITORIO</b> durante el tiempo estipulado en la cláusula tercera de este <b>ACUERDO</b>. De manera que el <b>LICENCIANTE</b> no otorgará a terceros los derechos concebidos a <b>LORO MUSICAL</b> en el <b>ACUERDO</b> en el <b>TERRITORIO</b> durante la duración de este <b>ACUERDO</b>. <b>El LICENCIANTE</b> reconoce y acuerda que <b>LORO MUSICAL</b> podrá utilizar a terceros para ejercer los derechos que le han sido otorgados en este <b>ACUERDO</b>.
                    </li>
                </ul>
                <div>
                    <h3 style='text-align: center;'>
                        ANEXO<br>
                        DEFINIFICIONES
                    </h3><br>
                </div>
                <div class='row mt-5 text-center'>

                    <div class='col-12 '>
                        <div class=''><img src="<?php echo $firma ?>" alt="Firma Representante" width="300px"></div>
                        María Garcés Castaño<br>
                        C.C. 43.261.125 de Medellín<br>
                        Representante Legal de <b>LORO MUSICAL</b>
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
                    <button type="button" class="btn btn-info" data-action="guardar-firma">Enviar Contrato</button>
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