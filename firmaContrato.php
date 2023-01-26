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
        <title>Contrato <?php echo $nombreArtistico ?></title>
        <meta name="description" content="Contrato de <?php echo $nombreCompleto ?>">
        <link rel="icon" href="../images/icono.png">
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
                    <img src='../images/logoLoroMusical.png' alt='' style='width:150px'>
                </div>

                <div style=' text-align: center;' class='mt-5'>
                    <h1>CONTRATO DE DISTRIBUCIÓN MUSICAL</h1>
                </div>
                <div style='text-align: end;'>
                    <p>
                        <?php echo $fechaActual ?>
                    </p>
                </div>
                <p>
                    Entre los suscritos, de una parte <b>LORO MUSICAL S.A.S</b> , con NIT <b>901.506.267-0</b> , con domicilio
                    en la ciudad de Medellín- Antioquia, representada legalmente por <b>MARIA
                        GARCES CASTAÑO</b>, identificada con cédula de ciudadanía número 43.261.125 de Medellín y
                    que de ahora en adelante se conocerá como <b>LORO MUSICAL</b>.
                </p>
                <p>

                    Y por otra parte, <?php echo $nombreCompleto ?> identificado con <?php echo $tipoDcto ?> número
                    <?php echo $nroDcto ?> expedida en <?php echo $expedicion ?>. Con domicilio <?php echo $domicilio ?> el cual
                    actúa con el nombre artístico de <?php echo $nombreArtistico ?> y que de ahora en adelante se conocerá como
                    el <b>ARTISTA</b>.
                </p>
                <p>
                    Se procede a realizar el contrato de distribución musical el cual consta de las siguientes
                    cláusulas y comenzará a regir a partir de la fecha que encabeza este documento:
                </p>

                <div>
                    <h3 style='text-align: center;'>
                        CLÁUSULAS
                    </h3>
                </div>
                <p>
                    <b>PRIMERA: OBJETO Y TERRITORIO:</b> El <b>ARTISTA</b> confiere a <b>LORO MUSICAL</b> autorización
                    exclusiva para utilizar los fonogramas y videogramas del cual es su legítimo titular, con el
                    objeto de ejercer el derecho de puesta a disposición del público, y en general para el uso y
                    explotación de los fonogramas y videogramas tanto por los medios digitales hoy conocidos o
                    por conocerse como los provenientes de sociedades de gestión colectiva en EL MUNDO
                    durante la duración del presente contrato.
                </p>
                <p>
                    <b>SEGUNDA: NOMBRES, IMÁGENES Y BIOGRAFÍAS DEL CATÁLOGO LICENCIADO:</b> Igualmente,
                    por razón y efecto del presente contrato, <b>LORO MUSICAL</b> queda ampliamente facultado para
                    utilizar los nombres, las imágenes y las biografías del <b>ARTISTA</b> del catálogo licenciado y por
                    consiguiente queda autorizado para dar publicidad a dichos nombres, imágenes y biografías
                    por cualquier medio publicitario digital.
                </p>

                <p>
                    <b>TERCERA: OBLIGACIONES DE LORO MUSICAL</b>: Son obligaciones de <b>LORO MUSICAL</b> asesorar
                    en posicionamiento, publicidad y fortalecimiento todo lo que corresponda al desarrollo de
                    contenidos digitales. El utilizar las plataformas digitales y físicas conocidas y por conocerse
                    para administrar, recaudar y distribuir el catálogo objeto del presente contrato a favor del
                    <b>ARTISTA</b>. El realizar los pagos correspondientes a las regalías obtenidas por la explotación
                    del catálogo en las fechas establecidas en este contrato.
                </p>
                <p>
                    <b>CUARTA: OBLIGACIONES DEL ARTISTA</b>: El <b>ARTISTA</b> declara que es titular de los derechos del
                    catálogo objeto del presente contrato y no tiene ningún impedimento legal o contractual
                    para disponer del mismo y entregar las producciones fonográficas y videográficas sin ningún
                    impedimento de uso y utilización, teniendo en cuenta que ante cualquier reclamación que
                    pudiese presentar por un tercero, responderá por los efectos legales y jurídicos que llegasen
                    a suceder.
                </p>
                <p>
                    <b> QUINTA: SUMINISTROS DE INFORMACIÓN:</b> El <b>ARTISTA</b> se compromete a suministrar toda la
                    información necesaria y respectiva del catálogo objeto del presente contrato, para llevar a
                    cabo una correcta administración del mismo por parte de <b>LORO MUSICAL</b> en los medios
                    digitales. En caso de que el <b>ARTISTA</b> no suministre la información dentro de los 5 días
                    posteriores a la solicitud, <b>LORO MUSICAL</b> no podrá garantizar los tiempos de distribución ni
                    podrá ser acusado de incumplimiento. <b>LORO MUSICAL</b> se compromete a enviar informes de ventas y
                    reproducciones para garantizar la transparencia en la recolección de regalías y, también, informes
                    demográficos y geográficos de manera trimestral en los meses de enero, abril, julio y octubre.
                </p>

                <p>

                    <b>SEXTA: AUTORIZACIÓN DE RECAUDO:</b> El <b>ARTISTA</b> autoriza a <b>LORO MUSICAL</b> para que
                    recaude en cualquier medio digital conocido o por conocerse los beneficios económicos
                    generados por el uso y explotación digital del catálogo licenciado, teniendo en cuenta que
                    dicho recaudo no tiene relación alguna con el recaudo realizado por las sociedades de
                    gestión colectiva a nivel nacional o mundial a las que el <b>ARTISTA</b> pudiese ser asociado.
                </p>

                <p>
                    <b>SÉPTIMA: DURACIÓN:</b> El presente contrato de licencia tendrá una duración inicial de 1 año a
                    partir del día de su firma y será prorrateado automáticamente por períodos iguales si
                    ninguna de las dos partes manifestaron su intención de no renovación con, al menos, 3
                    meses de anticipación a su vencimiento. PARÁGRAFO: En el momento que el presente
                    contrato se dé por terminado, <b>LORO MUSICAL</b> no está en la obligación de suministrar a el
                    <b>ARTISTA</b> información, la base de datos o cualquier otro dato que fuera generado para la
                    administración del catálogo.
                </p>

                <p>
                    <b>OCTAVA: REGALÍAS:</b> El <b>ARTISTA</b> recibirá la remuneración del 70% sobre las regalías netas
                    generadas en cada período. <b>LORO MUSICAL</b> se compromete a emitir informes a favor del
                    <b>ARTISTA</b> previo al pago de las regalías con información sobre los ingresos obtenidos.
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
                <div id="signature-pad" class="signature-pad mt-5 ">
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
                </div>

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
                            html: '<img src="../images/logoLoroMusical.png" style="width:100px"><br>',
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
                                    html: '<img src="../images/logoLoroMusical.png" style="width:100px"><br>',
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
                    html: '<img src="../images/logoLoroMusical.png" style="width:100px"><br>',
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