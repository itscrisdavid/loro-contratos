<?php

include("../db/Conexion.php");

$conexion = new Conexion();


$id = $_GET['id'];

// echo $id;
$consultaSQL = "SELECT co.nombre_completo, co.log_termino,  co.tipo_documento, co.nro_documento, ex.nombre_ciudad expedicion, 
ed.nombre_ciudad domicilio, ba.nombre_banco, co.nombre_artista  , co.tipo_cuenta, co.numero_cuenta, us.firma_usuario,
co.email, co.firma, co.fecha_contrato, co.fecha_termino
FROM contratos co
INNER JOIN ciudades ex ON ex.id_ciudad=co.expedicion_documento 
INNER JOIN ciudades ed ON ed.id_ciudad=co.ciudad_domicilio 
INNER JOIN bancos ba ON ba.id_banco=co.id_banco 
inner JOIN usuario us ON us.id_usuario=1
WHERE co.id_aleatorio='$id'";
$resultado = $conexion->consultarDatos($consultaSQL);
if ($resultado) {

    $firmado = $resultado[0]['log_termino'];

    if ($firmado) {


        $fechaActual = $resultado[0]['fecha_contrato'];
        $fechaFirma = $resultado[0]['fecha_termino'];
        $nombreCompleto = $resultado[0]['nombre_completo'];
        $tipoDcto = $resultado[0]['tipo_documento'];
        $nroDcto = $resultado[0]['nro_documento'];
        $expedicion = $resultado[0]['expedicion'];
        $domicilio = $resultado[0]['domicilio'];
        $banco = $resultado[0]['nombre_banco'];
        $nombreArtistico = $resultado[0]['nombre_artista'];
        $tipoCuenta = $resultado[0]['tipo_cuenta'];
        $numeroCuenta  = $resultado[0]['numero_cuenta'];
        $firmaRepresentante  = $resultado[0]['firma_usuario'];
        $firmaArtista  = $resultado[0]['firma'];
        $email  = $resultado[0]['email'];
        // print_r('Contrato N°' . strtoupper($id));
    }
    ?>

    <!doctype html>
        <html lang="es">

        <head>
            <meta charset="utf-8">
            <?php if ($firmado) : ?>
                <title>Contrato - <?php echo $nombreArtistico ?></title>
                <meta name="description" content="Contrato de <?php echo $nombreCompleto ?>">
            <?php endif ?>
            <link rel="icon" href="https://loromusical.co/images/icono.png">
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="black">

            <link href="../plugins/sweetalert2/sweetalert2.css" rel="stylesheet">

        </head>

        <body>
            <?php

            if ($firmado) { ?>
                <div class="container" style='text-align:justify'>
                    <div class='text-center'>
                        <img src='https://loromusical.co/images/logoLoroMusical.png' alt='' style='width:125px'>
                    </div>

                    <div style=' text-align: center;' class='mt-5'>
                        <h1>ACUERDO DE ADMINISTRACIÓN</h1>
                        <h1>DE DERECHOS FONOGRÁFICOS</h1>
                    </div><br>
                    <div style='text-align: center;'>
                        <p>
                            <b>Fecha Efectiva:</b> <?php echo $fechaFirma ?><br>
                            <?php print_r('<b>Contrato N°:</b> ' . strtoupper($id)); ?>
                        </p>
                    </div><br>
                    <?php if($fechaFirma < '2023-01-23 00:00:0') { ?>
                        <div>
                            <p>
                                Entre los suscritos, de una parte <b>LORO MUSICAL S.A.S</b> , con NIT <b>901.506.267-0</b> , con domicilio en la ciudad de Medellín-Antioquia, representada legalmente por <b>MARIA GARCES CASTAÑO</b>, identificada con cédula de ciudadanía número 43.261.125 de Medellín y que de ahora en adelante se conocerá como <b>LORO MUSICAL</b>.
                            </p>
                            <p>
                                Y por otra parte, <b><?php echo $nombreCompleto ?></b> identificado con <b><?php echo $tipoDcto ?></b> número <b><?php echo $nroDcto ?></b> expedida en <b><?php echo $expedicion ?></b>. Con domicilio <b><?php echo $domicilio ?></b> el cual actúa con el nombre artístico de <b><?php echo $nombreArtistico ?></b> y que de ahora en adelante se conocerá como el <b>ARTISTA</b>.
                            </p>
                            <p>
                                Se procede a realizar el contrato de distribución musical el cual consta de las siguientes cláusulas y comenzará a regir a partir de la fecha que encabeza este documento:
                            </p>
                            <div>
                                <h3 style='text-align: center;'>
                                    CLÁUSULAS
                                </h3><br>
                            </div>
                            <p>
                                <b>PRIMERA: OBJETO Y TERRITORIO:</b> El <b>ARTISTA</b> confiere a <b>LORO MUSICAL</b> autorización exclusiva para utilizar los fonogramas y videogramas del cual es su legítimo titular, con el objeto de ejercer el derecho de puesta a disposición del público, y en general para el uso y explotación de los fonogramas y videogramas tanto por los medios digitales hoy conocidos o por conocerse como los provenientes de sociedades de gestión colectiva en EL MUNDO durante la duración del presente contrato.
                            </p>
                            <p>
                                <b>SEGUNDA: NOMBRES, IMÁGENES Y BIOGRAFÍAS DEL CATÁLOGO LICENCIADO:</b> Igualmente, por razón y efecto del presente contrato, <b>LORO MUSICAL</b> queda ampliamente facultado para utilizar los nombres, las imágenes y las biografías del <b>ARTISTA</b> del catálogo licenciado y por consiguiente queda autorizado para dar publicidad a dichos nombres, imágenes y biografías por cualquier medio publicitario digital.
                            </p>

                            <p>
                                <b>TERCERA: OBLIGACIONES DE LORO MUSICAL</b>: Son obligaciones de <b>LORO MUSICAL</b> asesorar en posicionamiento, publicidad y fortalecimiento todo lo que corresponda al desarrollo de contenidos digitales. El utilizar las plataformas digitales y físicas conocidas y por conocerse para administrar, recaudar y distribuir el catálogo objeto del presente contrato a favor del <b>ARTISTA</b>. El realizar los pagos correspondientes a las regalías obtenidas por la explotación del catálogo en las fechas establecidas en este contrato.
                            </p>
                            <p>
                                <b>CUARTA: OBLIGACIONES DEL ARTISTA</b>: El <b>ARTISTA</b> declara que es titular de los derechos del catálogo objeto del presente contrato y no tiene ningún impedimento legal o contractual para disponer del mismo y entregar las producciones fonográficas y videográficas sin ningún impedimento de uso y utilización, teniendo en cuenta que ante cualquier reclamación que pudiese presentar por un tercero, responderá por los efectos legales y jurídicos que llegasen a suceder.
                            </p>
                            <p>
                                <b> QUINTA: SUMINISTROS DE INFORMACIÓN:</b> El <b>ARTISTA</b> se compromete a suministrar toda la información necesaria y respectiva del catálogo objeto del presente contrato, para llevar a cabo una correcta administración del mismo por parte de <b>LORO MUSICAL</b> en los medios digitales. En caso de que el <b>ARTISTA</b> no suministre la información dentro de los 5 días posteriores a la solicitud, <b>LORO MUSICAL</b> no podrá garantizar los tiempos de distribución ni podrá ser acusado de incumplimiento.
                            </p>

                            <p>
                                <b>SEXTA: AUTORIZACIÓN DE RECAUDO:</b> El <b>ARTISTA</b> autoriza a <b>LORO MUSICAL</b> para que recaude en cualquier medio digital conocido o por conocerse los beneficios económicos generados por el uso y explotación digital del catálogo licenciado, teniendo en cuenta que dicho recaudo no tiene relación alguna con el recaudo realizado por las sociedades de gestión colectiva a nivel nacional o mundial a las que el <b>ARTISTA</b> pudiese ser asociado.
                            </p>

                            <p>
                                <b>SÉPTIMA: DURACIÓN:</b>El presente contrato de licencia tendrá una duración inicial de 1 año a partir del día de su firma y será prorrateado automáticamente por períodos iguales si ninguna de las dos partes manifestaron su intención de no renovación con, al menos, 3 meses de anticipación a su vencimiento. PARÁGRAFO: En el momento que el presente contrato se dé por terminado, <b>LORO MUSICAL</b> no está en la obligación de suministrar a el <b>ARTISTA</b> información, la base de datos o cualquier otro dato que fuera generado para la administración del catálogo.
                            </p>

                            <p>
                                <b>OCTAVA: REGALÍAS:</b> El <b>ARTISTA</b> recibirá la remuneración del 70% sobre las regalías netas generadas en cada período. <b>LORO MUSICAL</b> se compromete a emitir informes a favor del <b>ARTISTA</b> previo al pago de las regalías con información sobre los ingresos obtenidos.
                            </p>

                            <p>
                                <b>NOVENA: PAGOS: LORO MUSICAL</b> pagará las regalías en los primeros 15 días hábiles de los meses de enero, abril, julio y octubre haciendo corte trimestral de la siguiente manera: Los pagos realizados en enero corresponderá a los ingresos obtenidos durante el 1 de octubre al 31 de diciembre. Los pagos realizados en abril corresponderá a los ingresos obtenidos durante el 1 de enero al 31 de marzo. Los pagos realizados en julio corresponderá a los ingresos obtenidos durante el 1 de abril al 30 de junio. Y los pagos realizados en octubre corresponderá a los ingresos obtenidos durante el 1 de julio al 30 de septiembre.
                            </p>
                            <p>
                                El pago de las regalías se realizará a través de transferencia bancaria siempre y cuando los ingresos para el <b>ARTISTA</b> superen el valor mínimo de $25.000 M.L.C (veinticinco mil pesos), en caso de no cumplir el mínimo, el pago se acumulará y se realizará en el siguiente ciclo.

                                <div><b>Banco:</b> <?php echo $banco ?></div>
                                <div><b>Número cuenta:</b> <?php echo $numeroCuenta ?></div>
                                <div><b>Tipo de cuenta:</b> <?php echo $tipoCuenta ?></div>

                            </p>

                            <p>
                                <b>DÉCIMA: INFORMACIÓN CONFIDENCIAL:</b> El <b>ARTISTA</b> se obliga a no divulgar a terceras partes, la “Información Confidencial”, información sobre el contrato, períodos de pago o cualquier otro dato que no sea autorizado por parte de <b>LORO MUSICAL</b>. Además, se compromete a darle a dicha información el mismo tratamiento que le darían a la información confidencial de su propiedad. PARÁGRAFO: Para efectos de la presente acta, “Información Confidencial” comprende toda la información divulgada por <b>LORO MUSICAL</b> ya sea en forma oral, visual, escrita, grabada en medios magnéticos o en cualquier otra forma tangible y que se encuentre claramente marcada como tal al ser entregada a la parte receptora.
                            </p>
                            <p>
                                <b>DÉCIMA PRIMERA: CATÁLOGO Y EXCLUSIVIDAD:</b> El <b>ARTISTA</b> concede a <b>LORO MUSICAL</b> la exclusividad de la distribución musical de todo su catálogo musical y audiovisual durante la vigencia de este contrato.
                            </p>
                            <p>
                                <b>DÉCIMA SEGUNDA: INFORMACIÓN FINAL: LORO MUSICAL</b> se compromete a entregar los códigos UPC y IRSC generados para los lanzamientos realizados durante la vigencia de este contrato al <b>ARTISTA</b> en el momento que el contrato finalice. Estos códigos serán entregados cuando la música ya no se encuentre distribuida por <b>LORO MUSICAL</b>.
                            </p>
                            <p>
                                <b>DÉCIMA TERCERA: OTROS CONTRATOS:</b> Durante la vigencia de este contrato podrá celebrarse otros acuerdos entre las Partes para servicios adicionales, sin que,
                                necesariamente, modifiquen este contrato de distribución ni la duración del mismo.
                            </p>
                            <p>
                                <b>DÉCIMA CUARTA: NOTIFICACIONES:</b> El <b>ARTISTA</b> establece como lugar de notificaciones el correo electrónico <?php echo $email  ?> y autoriza, con la firma de este contrato, enviarle información relacionada con el estado de sus servicios. Por otra parte, <b>LORO MUSICAL</b> habilita el correo electrónico info@loromusical.co para brindar soporte a cualquier duda que pueda surgir durante la vigencia de este contrato.
                            </p>
                            <p>
                                <b>DÉCIMA QUINTA: JURISDICCIÓN:</b> En caso de controversia, diferencia, conflicto o
                                reclamación en cuanto al Contrato, o en relación a o derivado de la interpretación o
                                ejecución del mismo, se acuerda que se someterán a la jurisdicción de los Juzgados y
                                Tribunales competentes conforme al derecho colombiano.
                            </p>
                            <p>
                                Para constancia, se emiten dos copias iguales, una para cada parte, y se firma en representación propia y entendiendo la información consignada en este contrato a la fecha establecida en el encabezado de este contrato en la ciudad de Medellín, Colombia.
                            </p>
                        </div>
                    <?php } else{ ?>
                        <div>
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
                            </ul><br>
                            <p>
                                <b>SEXTA: RESERVA DE DERECHOS:</b> <b>LORO MUSICAL</b> no editará, remezclará, resecuenciará ni de otra manera alterará cualquier fonograma entregado por el <b>LICENCIANTE</b> a su disposición en cualquier formato, salvo que se establezca lo contrario en este <b>ACUERDO</b> o como anexo de manera escrita. Todos los derechos que no sean específicamente otorgados o licenciados a <b>LORO MUSICAL</b> están expresamente reservados para el <b>LICENCIANTE</b>.
                            </p>
                            <p>
                                <b>SÉPTIMA: OBLIGACIONES:</b> Tras la suscripción de este <b>ACUERDO</b>, y durante toda la vigencia del mismo, el <b>LICENCIANTE</b> se compromete a:
                            </p>
                            <ul>
                                <li>
                                    Entregar a <b>LORO MUSICAL</b> los fonogramas (preferiblemente con al menos tres (3) semanas de anticipación a la fecha de lanzamiento programada) en un formato digital o electrónico aprobado por <b>LORO MUSICAL</b> (WAV, MP3 o FLAC). La entrega satisfactoria de los fonogramas por parte del <b>LICENCIANTE</b> deberá incluir todos los archivos relacionados, metadata, materiales del álbum, artes y materiales gráficos de alta resolución, información completa de la composición subyacente fijada en los fonogramas, toda la información de autores, editores, sociedades de gestión colectiva y otros elementos razonables requeridos por <b>LORO MUSICAL</b> y no se hará responsable de la afectación en los tiempos de entrega en los casos donde la información no sea entregada de manera oportuna.
                                </li>
                                <li>
                                    Entregar a <b>LORO MUSICAL</b> los certificados de derechos de autor, de autorización de uso de sampleo o del uso de Contenido no original para la correcta distribución del álbum dentro de los tiempos que les sean solicitados. En caso de no hacerlo, o de no tener alguno de los certificados, es posible que la distribución no pueda continuar hasta no relacionar la documentación correctamente. <b>LORO MUSICAL</b> no se hace responsable de la afectación en los tiempos de entrega o de la no distribución bajo su discreción por la falta de comprobación de identidad como protocolo de protección de derechos de autor de los autores originales.
                                </li>
                                <li>
                                    El <b>LICENCIANTE</b> se compromete a realizar la correcta dada de baja de los fonogramas en otras distribuidoras o empresas de distribución musical cuando aplique el caso. <b>PARÁGRAFO: LORO MUSICAL</b> no distribuirá un fonograma que esté siendo distribuido por otra distribuidora y/o sello discográfico.
                                </li>
                            </ul>
                            <p>
                                <b>PARÁGRAFO PRIMERO: El LICENCIANTE</b> será responsable por y pagará cualesquiera y todas las regalías y otros ingresos debidos a los artistas, artistas ejecutantes, productores, autores, compositores y otros participantes de regalías de grabación, de las ventas, y otros usos de los fonogramas, todos los pagos que puedan ser requeridos con los convenios colectivos aplicables a los fonogramas, y cualquier otro tipo de regalías, honorarios y/o dinero pagaderos por el <b>LICENCIANTE</b>.
                            </p>
                            <p>
                                Tras la suscripción de este <b>ACUERDO</b> y durante la vigencia del mismo, <b>LORO MUSICAL</b> se comprometa a:
                            </p>
                            <ul>
                                <li>
                                    Solicitar de y prestar servicios a Plataformas de Terceros. <b>LORO MUSICAL</b> no garantiza que las Plataformas de Terceros pongan a disposición los fonogramas. <b>LORO MUSICAL</b> podrá de manera razonada, rechazar la explotación de cualquier fonograma.
                                </li>
                                <li>
                                    Procesar los fonogramas entregados por el <b>LICENCIANTE</b>, según corresponda, para su entrega a Plataformas de Terceros.</li><li>Cobrar a las Plataformas de Terceros los montos adeudados en relación con las explotaciones de los fonogramas y liquidará y abonará a la Cuenta de Usuario del <b>LICENCIANTE</b>, los montos en la proporción que corresponda según la cláusula segunda de este <b>ACUERDO</b>.
                                    </li>
                                    <li>
                                        <b>LORO MUSICAL</b> se compromete a entregar la información obtenida de las tiendas digitales en donde se hayan generado reproducciones del catálogo que se esté distribuyendo en nombre del <b>LICENCIANTE</b>, a través de la plataforma, de manera trimestral siempre y cuando se hayan generado datos en ese periodo, en caso de que no se acumulará para el siguiente trimestre.
                                    </li>
                                    <li>
                                        <b>LORO MUSICAL</b> se compromete a entregar los códigos UPC y IRSC generados para los lanzamientos realizados durante la vigencia de este contrato al <b>LICENCIANTE</b>. Estos códigos estarán disponibles en la Cuenta de Usuario del <b>LICENCIANTE</b> y se dará por entendido que el <b>LICENCIANTE</b> dispondrá de ellos cuando lo requiera.
                                    </li>
                                </ul>
                                <p>
                                    <b>PARÁGRAFO SEGUNDO:</b> Algunos de los servicios ofrecidos por <b>LORO MUSICAL</b> podrán estar sujetos al pago de una tarifa, por una sola vez o recurrente -según el caso-, aplicable cuando se solicite el servicio, pagadera por el <b>LICENCIANTE</b> a <b>LORO MUSICAL</b>. Estos servicios serán adicionales para el <b>LICENCIANTE</b>, y el <b>LICENCIANTE</b> será informado si dichas tarifas aplican antes de que se preste el servicio ofrecido. Todas las tarifas serán cargadas en el momento en el que el <b>LICENCIANTE</b> opte por y acepte el servicio, y deberá pagarse inmediatamente utilizando la plataforma.
                                </p>
                                <p>
                                    <b>OCTAVA: CONTABILIDAD:</b> La parte de los Ingresos Netos del <b>LICENCIANTE</b> incluirá todas las regalías por distribución digital, Content ID, administración del Canal de YouTube, administración de Derechos Conexos y otros pagos debidos socados con los fonogramas y las composiciones musicales allí incorporadas. El <b>LICENCIANTE</b> será responsable por el pago de todos los impuestos gravados con respecto a todo el ingreso recibido de acuerdo con la cláusula segunda. <b>LORO MUSICAL</b> tendrá el derecho a confiar en la contabilidad, los usos y otras declaraciones recibidas de los sublicenciatarios de <b>LORO MUSICAL</b> para todos los propósitos del presente:
                                </p>
                                <ul>
                                    <li>
                                        <b>LORO MUSICAL </b>deberá contabilizar y pagar trimestralmente, en los primeros 20 días de los meses de febrero, mayo, agosto y noviembre, la cuota de los Ingresos Netos del <b>LICENCIANTE</b> a través de la Cuenta de Usuario, siempre y cuando las tiendas hayan reportado ganancias a favor del <b>LICENCIANTE</b> en ese periodo, en caso de no haber sido reportada la información a tiempo por parte de las Plataformas de Terceros será acumulado para el siguiente trimestre. Dicha contabilidad incluirá los Ingresos Netos recibidos por <b>LORO MUSICAL</b> por la explotación de los fonogramas de todas las fuentes (incluida la distribución directa y de terceros), especificada en este documento y en el monto adeudado al <b>LICENCIANTE</b>. <b>PARÁGRAFO PRIMERO:</b> Los pagos se harán al <b>LICENCIANTE</b> a través de la Cuenta de Usuario. <b>PARÁGRAFO SEGUNDO:</b> El <b>LICENCIANTE</b> tendrá la capacidad y será el responsable de solicitar cuándo retirar el saldo de las regalías abonadas a su Cuenta de Usuario a través de PayPal, si es usuario internacional, o transferencia bancaria si es usuario colombiano. En todo caso, el <b>LICENCIANTE</b> será responsable por los honorarios y/o comisiones cobrados por dichas entidades financieras y/o procesadoras de pagos. <b>PARÁGRAFO TERCERO:</b> El soporte sobre el uso de tales Plataformas de Terceros y su cuenta es responsabilidad exclusiva de los administradores de tales sitios y no de <b>LORO MUSICAL</b>. <b>PARÁGRAFO CUARTO:</b> El <b>LICENCIANTE</b> será el único responsable de la administración de los recursos disponibles en la Cuenta de Usuario, ya sea directamente o a través de terceros designados por éste, mediante el uso adecuado de su información de usuario y contraseña para la Cuenta de Usuario y, <b>LORO MUSICAL</b>, no asumirá ningún tipo de responsabilidad por la inobservancia de esta obligación a cargo del <b>LICENCIANTE</b>. Cualquier objeción relacionada con culturizar el reporte contable o cualquier requerimiento que surja de los mismos debe hacerse (y cualquier demanda deberá ser iniciada), a más tardar un año después de la fecha en que esté disponible el reporte correspondiente en la Cuenta de Usuario, y el <b>LICENCIANTE</b> renuncia a cualquier periodo adicional que otorga la ley para esto.
                                    </li>
                                    <li>
                                        El <b>LICENCIANTE</b> acepta que <b>LORO MUSICAL</b> puede congelar y retener todos y/o cada uno de los ingresos de la Cuenta de Usuario del <b>LICENCIANTE</b>, por indicios razonables sobre la violación de este <b>ACUERDO</b>. <b>LORO MUSICAL</b> deberá notificar por escrito al <b>LICENCIANTE</b> de manera oportuna que las sumas de dinero serán retenidas y revisará de buena fe cualquier explicación y/o tipo de respuesta que el <b>LICENCIANTE</b> entregue para esclarecer la situación. Sí <b>LORO MUSICAL</b> tiene una creencia de buena fe (y el abogado de <b>LORO MUSICAL</b> está de acuerdo) de que dichos ingresos son el resultado de fraude o infracción por parte del <b>LICENCIANTE</b>, dichos ingresos serán retenidos por <b>LORO MUSICAL</b>. En la medida en que se determine que las actividades fraudulentas o infractoras son causadas por las acciones u omisiones del <b>LICENCIANTE</b> o de sus afiliados, los costos incurridos por <b>LORO MUSICAL</b> (incluidos los honorarios y gastos legales) relacionados con los mismos pueden, además de otros remedios, ser deducidos por <b>LORO MUSICAL</b> de cualquier dinero de otra manera pagadero al <b>LICENCIANTE</b> bajo este <b>ACUERDO</b>. El <b>LICENCIANTE</b> acepta y autoriza a <b>LORO MUSICAL</b> a suministrar su información de contacto y/o datos contables en caso de que este se encuentre involucrado en algún tipo de controversia relacionada con derechos de autor y/o conexos de contenidos distribuidos a través de la Cuenta de Usuario. Ciertas Plataformas de Terceros también pueden tener políticas relacionadas con el fraude, infracciones y las actividades fraudulentas sospechosas, y el <b>LICENCIANTE</b> acepta que es su responsabilidad investigar dichas políticas, si las hubiere, y que dichas políticas serán obligatorias para el <b>LICENCIANTE</b>.<br>
                                    </li>
                                </ul>
                                <p>
                                    <b>NOVENA: CONFIDENCIALIDAD:</b> La información suministrada en este <b>ACUERDO</b> es confidencial y no será revelada por el <b>LICENCIANTE</b> a cualquier tercero (con excepción de sus asesores profesionales, pero manteniendo la entera responsabilidad sobre cada uno de ellos), sin el previo consentimiento escrito de <b>LORO MUSICAL</b>; excepto que requiera ser revelado por la ley aplicable o proceso legal, siempre y cuando el <b>LICENCIANTE</b> notifique a <b>LORO MUSICAL</b> con al menos cinco días antes de cualquier revelación requerida por la ley o dentro de un proceso judicial.
                                </p>
                                <p>
                                    <b>DÉCIMA: DECLARACIONES, GARANTÍAS E INDEMNIZACIÓN:</b> El <b>LICENCIANTE</b> declara y garantiza que:
                                </p>
                                <ul>
                                    <li>
                                        El <b>LICENCIANTE</b> es mayor de edad y tiene capacidad legal suficiente para manifestar su consentimiento y aceptar el <b>ACUERDO</b> de forma vinculante y/o se encuentra actuando bajo supervisión y autorización expresa de su representante, tutor o curador legal debidamente designado por la ley; el <b>LICENCIANTE</b> es y puede demostrar a la total satisfacción de <b>LORO MUSICAL</b> que es titular, licenciante de, o que de otra manera controla o ha obtenido los derechos y licencias de uso de los fonogramas, las composiciones musicales subyacentes incorporadas en estos y los materiales del álbum para que <b>LORO MUSICAL</b> explote los derechos que se le otorgan en virtud del presente <b>ACUERDO</b>; el <b>LICENCIANTE</b> no otorgará y no ha otorgado a terceros ningún derecho que sea inconsistente con los derechos licenciados u otorgados a <b>LORO MUSICAL</b> por el <b>ACUERDO</b>; el <b>LICENCIANTE</b> será el único responsable de la gestión y pago directamente u ante cualquier reclamo por parte de terceros interesados en el pago de cualquier regalía u otros pagos a terceros que puedan llegar a ser debidos como resultado del ejercicio por parte de <b>LORO MUSICAL</b> de sus derechos bajo el presente, incluyendo sin limitación, a cualquier organización de derechos de comunicación pública, autores, coautores, productores, artistas intérpretes o ejecutantes y terceros participantes de regalías. El Contenido (incluyendo, sin limitación, los fonogramas, materiales del álbum y cualquier composición musical subyacente incorporada en el mismo) y todo el material proporcionado por el <b>LICENCIANTE</b> a <b>LORO MUSICAL</b> y el ejercicio por parte de <b>LORO MUSICAL</b> de los derechos otorgados en el presente, no infringe, ni infringió cualquier derecho de terceros, incluyendo pero no limitado a los derechos de autor, marcas registradas y derechos de privacidad imagen y publicidad de cualquier tercero y el <b>LICENCIANTE</b> no conoce ninguna reclamación material, ni los fundamentos de ninguna reclamación material, que pueda afectar el libre ejercicio de <b>LORO MUSICAL</b> sobre los derechos otorgados por el <b>LICENCIANTE</b> o la explotación del Contenido conforme al <b>ACUERDO</b>; y el <b>LICENCIANTE</b> no conoce ninguna reclamación ni hechos que justifiquen reclamaciones, que puedan afectar la titularidad y validez del Contenido.
                                    </li>
                                    <li>
                                        El <b>LICENCIANTE</b> se compromete a indemnizar, defender y mantener indemne a <b>LORO MUSICAL</b>, sus afiliados, subdistribuidores y licenciatarios, sus directores, funcionarios, accionistas, agentes y empleados, respecto y contra cualquier reclamación de terceros, por daños, responsabilidades, pérdidas, costos y gastos, incluyendo, sin limitación a, honorarios razonables de abogados y costas judiciales, que surjan y/o estén relacionados con cualquier incumplimiento o supuesto incumplimiento por el <b>LICENCIANTE</b>, respecto de cualquier garantía, manifestación o acuerdo hecho en el presente o concerniente a cualquier acto, error y/o omisión cometidos por el <b>LICENCIANTE</b> o cualquier persona o entidad actuando en representación del <b>LICENCIANTE</b> o bajo la dirección o control del <b>LICENCIANTE</b>. En el evento en que una reclamación sea hecha o una acción sea iniciada, <b>LORO MUSICAL</b> tendrá el derecho a retener el pago de cualquiera o de todas las sumas de dinero adeudadas al <b>LICENCIANTE</b> por el presente en montos razonables a tal reclamación o acción pendiente de su disposición.
                                    </li>
                                    <li>
                                        Nada en este <b>ACUERDO</b> obligará a <b>LORO MUSICAL</b> a distribuir, reproducir, explotar o utilizar de cualquier otro modo cualquiera de los fonogramas u otro Contenido, todo lo cual quedará a la entera discreción de <b>LORO MUSICAL</b>. <b>LORO MUSICAL</b> puede optar por no proporcionar, o dejar de proporcionar, cualquier servicio, con respecto a cualquier fonograma a su entera discreción, incluyendo, sin limitación, debido a una mala calidad de grabación o Contenido odioso, obsceno o inapropiado. Sin limitar lo anterior, <b>LORO MUSICAL</b> tendrá el derecho unilateral de eliminar cualquier Contenido u otros materiales de la Cuenta de Usuario, Plataformas de Terceros y/o los servicios que considere, a su entera discreción, por violar los acuerdos del Sitio Web o los acuerdos de Plataformas de Terceros.
                                    </li>
                                    <li>
                                        La responsabilidad agregada de <b>LORO MUSICAL</b> por cualquiera y todas las causas de acción que surjan de o relacionadas con este <b>ACUERDO</b> no excederá el monto de dinero pagado por <b>LORO MUSICAL</b> al <b>LICENCIANTE</b> en el periodo de un (1) año anteriores a la fecha del incumplimiento o del incumplimiento de <b>LORO MUSICAL</b> alegado y que de origen a tal responsabilidad. En ningún caso, <b>LORO MUSICAL</b> será responsable para con el <b>LICENCIANTE</b> o cualquier tercero por cualquier daño indirecto, consecuente, ejemplares, incidentes, especiales o punitivos, incluidos los daños por pérdida de utilidad o pérdida de datos resultantes relacionada con este <b>ACUERDO</b>. Las limitaciones de responsabilidad establecidas en esta sección se aplicarán independientemente de la causa de la acción bajo la cual se pretenden tales daños, sea por incumplimiento contractual, diligencia, responsabilidad estricta u otro agravio, ya sea que las partes fueron o debieron estar conscientes o asesoradas de la posibilidad de tal daño, y sin importar si el remedio falla de su propósito esencial. Las partes acuerdan que las limitaciones de esta sección son un elemento esencial de este <b>ACUERDO</b> y que los acuerdos realizados en esta sección reflejan una estimación razonable de riesgo, y que cada parte no suscribirá este <b>ACUERDO</b> sin estas limitaciones de responsabilidad.
                                    </li>
                                </ul>
                                <p>
                                    <b>DECIMOPRIMERA: TERMINACIÓN:</b> El <b>LICENCIANTE</b> y <b>LORO MUSICAL</b> establecen que las causales de terminación serán las siguientes:
                                </p>
                                <ul>
                                    <li>
                                        La duración de este <b>ACUERDO</b> puede darse por terminado por escrito (al menos por correo electrónico) por cualquier de las partes con al menos 30 días de anticipación a la fecha de terminación y la terminación será efectiva según el mutuo acuerdo de las partes. <b>LORO MUSICAL</b> tendrá un espacio de hasta 15 días, luego de la fecha de terminación acordada, para solicitar a las Plataformas de Terceros que den de baja todos lo fonogramas suministrados por el <b>LICENCIANTE</b> y el <b>LICENCIANTE</b> acepta y reconoce que el tiempo que le toma a cada Plataformas de Terceros para retirar los fonogramas es variable y puede tomar hasta cuatro semanas. Al finalizar o terminar este <b>ACUERDO</b>, por cualquier causa, <b>LORO MUSICAL</b> gozará un periodo de recolección para recaudar todos los ingresos que se hayan generado por la explotación de los contenidos, fonogramas, composiciones y otros, conforme al <b>ACUERDO</b> mientras estuvo en vigencia, en especial pero no limitado, a ingresos generados en Plataformas de Terceros y por la explotación de las licencias.La duración de este <b>ACUERDO</b> puede darse por terminado por escrito (al menos por correo electrónico) por cualquier de las partes con al menos 30 días de anticipación a la fecha de terminación y la terminación será efectiva según el mutuo acuerdo de las partes. <b>LORO MUSICAL</b> tendrá un espacio de hasta 15 días, luego de la fecha de terminación acordada, para solicitar a las Plataformas de Terceros que den de baja todos lo fonogramas suministrados por el <b>LICENCIANTE</b> y el <b>LICENCIANTE</b> acepta y reconoce que el tiempo que le toma a cada Plataformas de Terceros para retirar los fonogramas es variable y puede tomar hasta cuatro semanas. Al finalizar o terminar este <b>ACUERDO</b>, por cualquier causa, <b>LORO MUSICAL</b> gozará un periodo de recolección para recaudar todos los ingresos que se hayan generado por la explotación de los contenidos, fonogramas, composiciones y otros, conforme al <b>ACUERDO</b> mientras estuvo en vigencia, en especial pero no limitado, a ingresos generados en Plataformas de Terceros y por la explotación de las licencias.
                                    </li>
                                    <li>
                                        <b>LORO MUSICAL</b> tendrá el derecho, en cualquier momento, de terminar este <b>ACUERDO</b>, retirar cualquiera de los contenidos del <b>LICENCIANTE</b> de los sitios, Plataformas de Terceros, o cualquier otro lugar que <b>LORO MUSICAL</b> considere oportuno para la correcta explotación de lo mismos, también, dejar de proveer los servicios al <b>LICENCIANTE</b> y/o cesar la explotación y distribución de cualquier Contenido, los cuales <b>LORO MUSICAL</b> podrá elegir como resultados la determinación que en algún momento <b>LORO MUSICAL</b> pueda darse cuenta de que: 1). El Contenido del <b>LICENCIANTE</b> infringe o puede infringir derecho de terceros; 2). El <b>LICENCIANTE</b> ha violado las cláusulas de este <b>ACUERDO</b>, los acuerdos de las Plataformas de Terceros o los términos y condiciones de nuestro Sitio Web; 3). El Contenido del <b>LICENCIANTE</b> puede ser ofensivo y/o obsceno; 4). El Contenido y/o actos del <b>LICENCIANTE</b> puede dañar o desacreditar a <b>LORO MUSICAL</b>; 5). Por cualquier otra razón, o ninguna razón, que <b>LORO MUSICAL</b> pueda determinar a su entera descripción. En caso de que <b>LORO MUSICAL</b> termine este <b>ACUERDO</b> de conformidad con los literales 1, 2, 3 o 4 anteriores, el <b>LICENCIANTE</b> acepta pagar inmediatamente a <b>LORO MUSICAL</b> las garantías que se encuentren en cabeza a <b>LORO MUSICAL</b> y/o los perjuicios que pueda ocasionar.
                                    </li>
                                </ul>
                                <p>
                                    <b>DECIMOSEGUNDA: ADELANTOS:</b> <b>LORO MUSICAL</b> podrá considerar otorgar adelantos económicos de regalías en forma de préstamo a favor del <b>LICENCIANTE</b>, en cualquier momento, y a su entera discreción; una vez presentada la oferta, el <b>LICENCIANTE</b> deberá aceptarlo antes de que sea transferido a su Cuenta de Usuario; estos adelantos serán descontados de los Ingresos Netos obtenidos por la explotación del catálogo musical, de manera prorrateada; los adelantos tendrán una tasa de interés fija mensual del dos por ciento (2%); y, el máximo a descontar en cada trimestre no superará el cincuenta por ciento (50%) de los Ingresos Netos generados. <b>PARÁGRAFO:</b> Este <b>ACUERDO</b> no se podrá dar por terminado mientras exista una deuda por concepto de adelanto y, en caso de que el <b>LICENCIANTE</b> quiera darlo por terminado deberá realizar el pago pendiente del adelanto, de manera voluntaria y deberá ser aprobado, de manera escrita, por <b>LORO MUSICAL</b>.
                                </p>
                                <p>
                                    <b>DECIMOTERCERA: SUCESIÓN POR CAUSA DE MUERTE: LORO MUSICAL</b> hará efectiva la sucesión de los Ingresos Netos del presente <b>ACUERDO</b>, por causa de muerte o por incapacidad legal, a los herederos de ley del <b>LICENCIANTE</b>; y, permitirá que ocupen la posición contractual del <b>LICENCIANTE</b> en el <b>ACUERDO</b>, siempre y cuando, los herederos de ley tomen la decisión de hacerlo efectivo en nombre del <b>LICENCIANTE</b>. <b>PARÁGRAFO:</b> Es responsabilidad del <b>LICENCIANTE</b> informar a sus herederos de ley antes de cualquier situación adversa, sobre la posibilidad de tomar su posición en el <b>ACUERDO</b>; y, será responsabilidad de los herederos de ley acudir a <b>LORO MUSICAL</b> para hacer efectivo su derecho.
                                </p>
                                <p>
                                    <b>DECIMOCUARTA: MISCELÁNEAS:</b> Las partes aceptan las siguientes declaraciones que regirán a todo este <b>ACUERDO</b> durante la vigencia del mismo:
                                </p>
                                <ul>
                                    <li>
                                        Las partes acuerdan y reconocen que la relación entre ellas es de contratantes independientes. El presente <b>ACUERDO</b> no crea una asociación o joint venture y ninguna de las partes será agente, socio o empleado de la otra.
                                    </li>
                                    <li>
                                        El <b>LICENCIANTE</b> acepta obligarse a los términos de uso de <b>LORO MUSICAL</b> (en https://loromusical.co/terminos), y también a la política de privacidad (en https://loromusical.co/privacidad). El <b>LICENCIANTE</b> acepta además estar obligado a los términos de uso y políticas de privacidad de las Plataformas de Terceros. El <b>LICENCIANTE</b> acepta también estar obligado al uso de las Plataformas de Terceros, la explotación del Contenido y los derechos otorgados en virtud de este <b>ACUERDO</b>. En la medida en que los términos de este acuerdo entren en conflicto con los acuerdos de Plataformas de Terceros, los términos de este <b>ACUERDO</b> prevalecerán sobre aquellos. Este <b>ACUERDO</b> junto con los términos de uso, contienen el entendimiento total entre las partes en relación con el asunto aquí referido y reemplaza todos los acuerdos y arreglos previos entre el <b>LICENCIANTE</b> y <b>LORO MUSICAL</b> en relación con los servicos, de existir uno; este acuerdo solo puede ser modificado por escrito electrónicamente aceptado y/o firmado por las partes.
                                    </li>
                                    <li>
                                        Este <b>ACUERDO</b> será obligatorio para los cesionarios, Herederos de Ley, ejecutores, afiliados, agentes, administradores y/o sucesores de cada una de las partes. <b>LORO MUSICAL</b> tendrá el derecho de ceder libremente este <b>ACUERDO</b> en cualquier momento a cualquier tercero, sin necesidad de notificar al <b>LICENCIANTE</b>. El <b>LICENCIANTE</b> reconoce y acepta que ni el presente <b>ACUERDO</b>, ni ningún derecho o interés en virtud del presente, podrá ser cedido o transferido por el <b>LICENCIANTE</b> sin el consentimiento expreso, previo y por escrito de <b>LORO MUSICAL</b>.
                                    </li>
                                    <li>
                                        Todos los avisos y notificaciones se enviarán por escrito a través de correo electrónico. Sí <b>LORO MUSICAL</b> requiere notificar al <b>LICENCIANTE</b>, <b>LORO MUSICAL</b> utilizará la información de contacto proporcionada por el <b>LICENCIANTE</b> al registrarse en la Cuenta de Usuario o según lo haya actualizado o, en ausencia de una dirección de correo electrónico válida, a través de cualquier otro método que <b>LORO MUSICAL</b> pueda elegir a su exclusivo criterio, incluyendo, pero no limitado a, mediante publicación en la Cuenta de Usuario del <b>LICENCIANTE</b>. Todas las notificaciones que el <b>LICENCIANTE</b> envíe a <b>LORO MUSICAL</b> deberán ser enviadas al correo “distribucion@loromusical.co”. Todas las notificaciones se considerarán recibidas: 1). 24 horas después de que se envió el mensaje de correo electrónico, si no se generó un “error del sistema” u otra notificación de no entrega o; 2). Al momento de la publicación, por otros medios electrónicos, si se permite. Si la ley aplicable requiere que una comunicación determinada esté “por escrito”, usted acepta que la comunicación por correo electrónico satisfará este requisito.
                                    </li>
                                    <li>
                                        Si alguna disposición de este <b>ACUERDO</b> o la aplicación del mismo por cualquier motivo es declarada por una corte o proceso arbitral competente bajo este <b>ACUERDO</b> como inválida o inaplicable, dicha decisión no tendrá el efecto de invalidar o anular el resto de este <b>ACUERDO</b>, siendo la intención y el acuerdo de las partes que este <b>ACUERDO</b> se considerará enmendado modificando dicha disposición en la medida necesaria para hacerla válida, legal y exigible preservando su intención o, si tal modificación no es posible, sustituyéndola por lo tanto otra disposición que sea válida, legal y exigible a fin de efectuar materialmente la intención de las partes.
                                    </li>
                                    <li>
                                        Como condición previa a cualquier afirmación por parte del <b>LICENCIANTE</b> de que <b>LORO MUSICAL</b> no ha cumplido con alguna de sus obligaciones contenida en este documento o que está incumpliendo el <b>ACUERDO</b>, el <b>LICENCIANTE</b> le dará a <b>LORO MUSICAL</b> una notificación detallada por escrito sobre dicho incumplimiento, y otorgará a <b>LORO MUSICAL</b> un período de treinta (30) días después de la recepción de dicha notificación por escrito, para que dé solución al supuesto incumplimiento. Ningún incumplimiento por <b>LORO MUSICAL</b> se considerará subsanable. El hecho de que una de las partes no actúe en caso de incumplimiento del <b>ACUERDO</b> por parte de la otra parte, no se considerará como una renuncia a reclamar por dicho incumplimiento o por incumplimientos futuros.
                                    </li>
                                    <li>
                                        Este <b>ACUERDO</b> se considerará que se ha hecho en el Estado de Colombia, sin tener en cuenta sus disposiciones de conflicto de leyes, y su validez, construcción, ejecución e incumplimiento se regirá por las leyes del Estado de Colombia.
                                    </li>
                                    <li>
                                        Este <b>ACUERDO</b> podrá ser firmado por medios de firma digital o electrónica e/o intercambiado por correo electrónico u por otros medios digitales.
                                    </li>
                                </ul>
                                <p>
                                    <b>El LICENCIANTE reconoce que se le ha aconsejado buscar asesoría legal y de negocios independiente con respecto a este ACUERDO y que ha solicitado y obtenido tal consejo o deliberadamente se ha abstenido de hacerlo. El presente ACUERDO se considerará redactado conjuntamente, en idioma español (castellano) por las partes y no podrá interpretarse contra ninguna parte por razón de su preparación o redacción.</b>
                                </p>
                                <p>
                                    Para constancia, se emiten dos copias iguales, una para cada parte, y se firma en representación propia y entendiendo la información consignada en este contrato a la fecha establecida en el encabezado de este contrato.
                                </p>
                                <div>
                                    <h4 style='text-align: center;'>
                                        ANEXO<br>
                                        DEFINIFICIONES
                                    </h4><br>
                                </div>
                                <ul>
                                    <li>
                                        “Fecha Efectiva” es la fecha en la que se considera que el <b>ACUERDO</b> entra en vigor y que siempre estará en el encabezado de este <b>ACUERDO</b>.
                                    </li>
                                    <li>
                                        “Ingresos Netos” significa todo el dinero recibido por o adeudados a <b>LORO MUSICAL</b> directamente atribuible a la venta, licencia, explotación, o uso de los fonogramas, videos y servicios de administración del Canal de YouTube en virtud del presente, menos cualesquiera tarifas de procesamiento de transacciones de transferencia de dinero, impuestos de ventas aplicables y retenciones fiscales requeridas en territorios aplicables y tarifas de la escala sindical (cuando sea aplicable). En caso de que <b>LORO MUSICAL</b> reciba un pago de una Plataformas de Terceros que no corresponda directamente al pago adeudado por la explotación del contenido, incluyendo, pero sin limitarse a (i) un pago relacionado con la venta de capitales de una Plataforma de Terceros; (ii) una porción no recuperada que haga parte de un anticipo entregado por una Plataforma de Terceros, que para ese momento dicha plataforma ya no pueda recuperar; (iii) y un pago para compensar la deuda de una garantía mínima; <b>LORO MUSICAL</b> aplicará un método, a su entera discreción, para determinar la asignación, si la hubiera, de dichos montos al <b>LICENCIANTE</b>. En el caso de que dichos montos se vayan a asignar, según lo determinado a discreción de <b>LORO MUSICAL</b>, <b>LORO MUSICAL</b> aplicará un método de cálculo de manera uniforme y equitativa para todos los clientes en situación similar y los montos asignados al <b>LICENCIANTE</b> se considerarán parte de los ingresos netos aquí establecidos. A través de la suscripción de este <b>ACUERDO</b>, el <b>LICENCIANTE</b> reconoce y acepta que no tendrá derecho alguno a objetar o impugnar este método utilizado por <b>LORO MUSICAL</b> para determinar el porcentaje que le sea asignado y/o su participación dentro de dichos pagos por parte de <b>LORO MUSICAL</b>.
                                    </li>
                                    <li>
                                        “Content ID” el sistema de identificación de contenido de YouTube es un programa de huellas digitales de audio que permite a YouTube catalogar la música enviada, lo que permite a los propietarios de derechos de autor identificar dónde se está utilizando su música en YouTube. Content ID fue diseñado para permitirte recuperar el control sobre dónde se puede escuchar tu música y para ayudarte a recibir pagos cuando tu música se usa en YouTube.
                                    </li>
                                    <li>
                                        “Derechos Conexos” significa el derecho a reproducir y comunicar públicamente por medios de difusión, terrestre, análogos o digitales de transmisión de audio, fonogramas protegidos por las normas de propiedad intelectual; únicamente en lo que respecta al productor fonográfico.
                                    </li>
                                    <li>
                                        “Regalías por Comunicación Pública” consiste en un pago dado por la explotación del derecho patrimonial de comunicación pública; es decir, cada vez que la música suene en establecimientos abiertos como bares, restaurantes, conciertos, hoteles, supermercados, etc., estas empresas deberán reconocerle un valor a unas entidades conocidas como Sociedades de Gestión Colectiva, cuya misión es dar licencias, monitorear los usos, recaudar los dineros y entregárselos a los compositores, intérpretes, ejecutantes y productores fonográficos afiliados.
                                    </li>
                                    <li>
                                        “Administración del Canal de YouTube” aplica cuando <b>LORO MUSICAL</b> está administrando el canal de YouTube, nos encargamos de optimizar el rendimiento al máximo, manteniéndolos sanos a través de la resolución de conflictos de propiedad y hacemos que aumenten los ingresos debido a la mejora de tasas como YouTube Ad Revenue, RPM o CPM.
                                    </li>
                                    <li>
                                        “Contenido” significa todos los fonogramas, videos, materiales del álbum, contenido de YouTube y otros materiales entregados por el <b>LICENCIANTE</b> a <b>LORO MUSICAL</b>.
                                    </li>
                                    <li>
                                        “Medios Interactivos” es un servicio interactivo en entornos digitales; es decir, que el usuario puede escuchar cualquier canción de la base de datos del proveedor de servicios digitales (Digital Service Provider o DSP, por sus siglas en inglés) sin restricciones de tiempo o capacidad de reproducción.
                                    </li>
                                    <li>
                                        “Medios No Interactivos” significa todos los medios por los cuales en la transmisión de la música  el usuario puede reproducir la música pero no se permite seleccionar la próxima canción, por ejemplo: la radio, radio por internet y algunas DSPs.
                                    </li>
                                    <li>
                                        “Plataforma de Terceros” significa minoristas y plataformas, digitales, de streaming interactivo o no interactivo, en la nube, redes sociales, móviles y/o de internet de terceros que distribuyen, transmiten, explotan o de cualquier otra forma ponen a disposición música, videos y otros contenidos, incluyendo, sin limitación, plataformas, tecnologías y servicios que pueden existir o desarrollarse después de la Fecha Efectiva.
                                    </li>
                                    <li>
                                        “Cuenta de Usuario” se refiere a la herramienta autogestión que el usuario puede utilizar para administrar sus lanzamientos, obtener información sobre reproducciones y reportes de ventas, analizar sus Ingresos Netos y solicitar la retirada de estos mismos hacia su PayPal o cuenta bancaria, dependiendo del caso.
                                    </li>
                                    <li>
                                        “Sitio Web” significa el(los) sitio(s) web de <b>LORO MUSICAL</b>.
                                    </li>
                                    <li>
                                        “Explotación” es el aprovechamiento del catálogo para ser publicado, transmitido, utilizado,  vendido y puesto en disposición en Plataformas de Terceros, Medios Interactivos y No Interactivos.
                                    </li>
                                </ul>
                            </div>
                        <?php } ?>
                        <div class='row mt-5 text-center'>

                            <div class='col-md-6 '>
                                <div class=''><img src="<?php echo $firmaRepresentante ?>" alt="Firma Representante" width="300px"></div>
                                María Garcés Castaño<br>
                                C.C. 43.261.125 de Medellín<br>
                                Representante Legal de <b>LORO MUSICAL</b>
                            </div>
                            <div class='col-md-6'>
                                <div class=''><img src="<?php echo $firmaArtista ?>" alt="Firma Artista" width="300px"></div>
                                <?php echo $nombreCompleto ?> <br>
                                <?php echo $tipoDcto . '. ' . $nroDcto ?> <br>
                                El <b>LICENCIANTE</b> <br>
                                Firmado el <?php echo $fechaFirma ?>

                            </div>

                        </div>
                    </div>

                    <script src="../plugins/jquery/jquery.min.js"></script>




                <?php } else { ?>



                    <script src="../plugins/jquery/jquery.min.js"></script>
                    <script src="../plugins/sweetalert2/sweetalert2.js"></script>
                    <script>
                        Swal.fire({
                            position: "center",
                            html: '<img src="https://loromusical.co/images/logoLoroMusical.png" style="width:100px"><br>',
                            title: "El contrato ya ha sido firmado.",
                            background: " #000000cd",
                            showConfirmButton: false,
                            timer: 6000,
                        }).then((result) => {
                            window.location = "./index.php";
                        });
                    </script>
                <?php } ?>
            </body>

            </html>

            <?php  } ?>