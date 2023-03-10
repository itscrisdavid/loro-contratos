<?php

include("db/Conexion.php");

$conexion = new Conexion();


$id = $_GET['id'];

// echo $id;
$consultaSQL = "SELECT co.nombre_completo, co.log_termino,  co.tipo_documento, co.nro_documento, ex.nombre_ciudad expedicion, 
ed.nombre_ciudad domicilio, ba.nombre_banco, co.nombre_artista  , co.tipo_cuenta, co.numero_cuenta, us.firma_usuario

FROM contratos co
INNER JOIN ciudades ex ON ex.id_ciudad=co.expedicion_documento 
INNER JOIN ciudades ed ON ed.id_ciudad=co.ciudad_domicilio 
INNER JOIN bancos ba ON ba.id_banco=co.id_banco 
inner JOIN usuario us ON us.id_usuario=1
WHERE co.id_contrato=$id";
$resultado = $conexion->consultarDatos($consultaSQL);

$firmado = $resultado[0]['log_termino'];
if ($firmado) {

  echo 'Este contrato ya ha sido firmado.';
} else {


  $fechaActual = date('d m Y');
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



  var_dump($resultado);
}
?>

<!doctype html>
  <html lang="es">

  <head>
    <meta charset="utf-8">
    <title>Signature - Loro Musical</title>
    <meta name="description" content="Signature - Loro Musical">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" href="https://loromusical.co/images/icono.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="stylesheet" href="css/signature-pad.css">

  <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="css/ie9.css">
  <![endif]-->
  </head>

  <body>
    <div class="container" style='text-align:justify'>
      <div class='text-center'>
        <img src='https://loromusical.co/images/logoLoroMusical.png' alt='' style='width:150px'>
      </div>

      <div style=' text-align: center;' class='mt-5'>
        <h1>ACUERDO DE ADMINISTRACI??N</h1>
        <h1>DE DERECHOS FONOGR??FICOS</h1>
      </div><br>
      <div>
        <p style='text-align: center;'>
          <b>Fecha Efectiva:</b> @fechaFctual
        </p>
      </div><br>
      <p>
        El siguiente acuerdo de administraci??n de derechos fonogr??ficos (el <b>ACUERDO</b>), se produce por y entre <b>@nombreCompleto</b> que act??a art??sticamente como <b>nombreArtistico</b> (el <b>LICENCIANTE</b>), identificado con <b>tipoDcto</b> n??mero <b>nroDcto</b>; y <b>LORO MUSICAL S.A.S</b> (<b>LORO MUSICAL</b>), registrado en la C??mara de Comercio de Medell??n para Antioquia (Colombia) e identificado con <b>NIT 901506267-0</b>.
      </p>
      <p>
        <b>Usted entiende que al firmar electr??nicamente el acuerdo y/o al utilizar los servicios de administraci??n de fonogramas ofrecidos por LORO MUSICAL, usted se obliga a cumplir los t??rminos aqu?? detallados. Si usted no acepta este acuerdo en su totalidad, favor abstenerse de aceptar y/o firmar electr??nicamente este acuerdo y no utilice los servicios de administraci??n de fonogramas de LORO MUSICAL. La ???Fecha Efectiva??? del acuerdo ser?? establecida al momento de la firma electr??nica de este contrato.</b>
      </p>
      <p>
        Este acuerdo se regir?? por las siguientes cl??usulas, t??rminos y consideraciones:
      </p><br>
      <div>
        <h3 style='text-align: center;'>
          CL??USULAS
        </h3><br>
      </div>
      <p>
        <b>PRIMERA: LICENCIA: LORO MUSICAL</b> tendr?? los derechos exclusivos de distribuci??n digital de los fonogramas que el <b>LICENCIANTE</b> env??e para su administraci??n desde la Fecha Efectiva hasta la duraci??n de este <b>ACUERDO</b>.
      </p>
      <p>
        <b>SEGUNDA: INGRESOS:</b> En contraprestaci??n a los derechos concedidos a <b>LORO MUSICAL</b> en el <b>ACUERDO</b>, <b>LORO MUSICAL</b> pagar?? al <b>LICENCIANTE</b>, condicionado al pleno cumplimiento de todas la cl??usulas, el setenta por ciento (70%) de los Ingresos Netos por distribuci??n digital de los fonogramas, Content ID, administraci??n del Canal de YouTube y administraci??n de Derechos Conexos.
      </p>
      <p>
        <b>TERCERA: DURACI??N:</b> El tiempo de vigencia del <b>ACUERDO</b> comenzar?? a partir de la Fecha Efectiva y continuar?? por un periodo inicial de 1 a??o o hasta que se llegue a tomar alguna de las causales de terminaci??n establecidas en la cl??usula decimoprimera de este <b>ACUERDO</b>. Una vez expirado el periodo inicial, se renovar?? autom??ticamente por per??odos adicionales, sucesivos de un a??o, hasta que se d?? por terminado por alguna de las partes con al menos 30 d??as de anticipaci??n de manera escrita.
      </p>
      <p>
        <b>CUARTA: TERRITORIO:</b> Este <b>ACUERDO</b> regir?? en todo el universo.
      </p>
      <p>
        <b>QUINTA: CONCESI??N DE DERECHOS:</b> Por el presente <b>ACUERDO</b> el <b>LICENCIANTE</b> otorga la licencia a <b>LORO MUSICAL</b> de forma exclusiva, irrevocable y sublicenciable de:
      </p>
      <ul>
        <li>
          El derecho exclusivo para convertir, digitalizar, codificar, integrar, hacer, causar o de otra manera reproducir los fonogramas en cualquier formato digital electr??nico conocido o por conocerse con el prop??sito de distribuir, explotar o usar los fonogramas como ac?? se otorgan.
        </li>
        <li>
          El derecho y la licencia exclusiva para distribuir, reproducir, transmitir, licenciar, vender digitalmente (incluyendo sin limitarse mediante descargas, streams y servicios de suscripci??n), publicitar, publicar, comunicar p??blicamente, emitir y de otra manera usar y explotar los fonogramas en cualquier formato electr??nico o digital conocido o por conocerse en el <b>TERRITORIO</b> a trav??s de cualquier plataforma o servicio incluyendo pero no limitando a su sitio o los sitios, plataformas o servicios de cualesquiera Plataforma de Terceros (distribuci??n digital); y actuar como el agente de ISRCs del licenciante para adjudicar c??digos ISRCs a los fonogramas.
        </li>
        <li>
          El derecho y/u la licencia exclusiva para explotar, monetizar, reclamar y administrar la explotaci??n de fonogramas y/u otros contenidos a trav??s de plataformas que cuenten con software de identificaci??n y rastreo de Contenido, cuando se incluyan fonogramas y/u otros contenidos en las grabaciones de audio, visuales y audiovisuales, y otros contenidos generados por terceros, en especial usuarios de YouTube mediante el uso de la herramienta conocida como Content ID. As?? tambi??n como la gesti??n de Content ID de YouTube.
        </li>
        <li>
          El derecho y la licencia no-exclusiva para usar en el <b>TERRITORIO</b> el nombre art??stico, la marca, el nombre comercial, semejanzas, imagen y biograf??a de cada artista cuya interpretaci??n est?? incorporada en los fonogramas y en las artes del lanzamiento, letras y notas relacionadas con los fonogramas en conexi??n con la explotaci??n, venta y distribuci??n de los fonogramas del presente y la publicidad, publicitaci??n y promoci??n de los fonogramas en todas las configuraciones y por cualquier medio, siempre que todos los materiales proporcionados por el licenciante a <b>LORO MUSICAL</b> sean considerados aprobados para los prop??sitos de este <b>ACUERDO</b>.
        </li>
        <li>
          El derecho y la licencia para explotar las composiciones musicales incorporadas en los fonogramas en la medida que se necesite para que <b>LORO MUSICAL</b> explote los derechos otorgados en el presente. En el caso en el que el <b>LICENCIANTE</b> no tenga propiedad o control sobre tales composiciones musicales, el <b>LICENCIANTE</b> deber?? obtener licencias para tales composiciones.
        </li>
        <li>
          El derecho exclusivo a registrar los fonogramas, a nombre del <b>LICENCIANTE</b>, en organizaciones y agencias de licenciamiento que realicen el recaudo de regal??as por comunicaci??n p??blica de Derechos Conexos; reclamar y recaudar, a nombre del <b>LICENCIANTE</b> y en su inter??s, todas las regal??as por comunicaci??n p??blica de Derechos Conexos y otros conceptos adeudados al solicitante por el ejercicio y explotaci??n de derechos de comunicaci??n p??blica de los fonogramas; utilizar y explotar de cualquier manera, y permitir a terceros para que utilicen y exploten de cualquier manera, los Derechos Conexos de los fonogramas por cualquier medio digital conocido o por conocerse, sea por medios interactivos o no interactivos, en especial pero no limitado a la comunicaci??n p??blica digital y el licenciamiento para terceros para la explotaci??n de los fonogramas, p??blicamente o de manera privada, con o sin ??nimo de lucro, por cualquier medio conocido o desarrollado en el futuro.
        </li>
        <li>
          El derecho no exclusivo, sujeto a la aprobaci??n previa del <b>LICENCIANTE</b> en cada instancia (siendo suficiente el correo electr??nico), a licenciar la sincronizaci??n de los fonogramas, en conexi??n con las pel??culas, programas de televisi??n, anuncios, videojuegos y cualesquiera otra obra audiovisual. Este derecho incluye la capacidad para licenciar el uso, explotaci??n, autorizar la interpretaci??n o ejecuci??n de los fonogramas en las obras audiovisuales descritas. Y, autorizar el uso de las composiciones musicales subyacentes incorporadas en los fonogramas en la medida en que sean de propiedad o controlados por el <b>LICENCIANTE</b>. As?? mismo, el <b>LICENCIANTE</b> autoriza a <b>LORO MUSICAL</b> recolectar todo el ingreso relacionado con cualquier explotaci??n de la sincronizaci??n de los fonogramas y tales composiciones musicales (excluyendo las regal??as por comunicaci??n p??blica) en uso de este derecho y, licenciar y autorizar, mediante acuerdos escritos, en nombre y representaci??n del <b>LICENCIANTE</b>, el uso de servicios, imagen, marcas comerciales del <b>LICENCIANTE</b>, relacionadas o no con los fonogramas o los servicios del <b>LICENCIANTE</b> como int??rprete, en especial pero no limitado a contratos de patrocinio, menciones, comerciales, campa??as publicitarias y cualquier otro producto o alianza comercial con la autorizaci??n previa por escrito del <b>LICENCIANTE</b>, para el correcto uso de su imagen y/o marcas comerciales.
        </li>
        <li>
          A menos que se especifique expresamente lo contrario, la anterior licencia es exclusiva en todo el <b>TERRITORIO</b> durante el tiempo estipulado en la cl??usula tercera de este <b>ACUERDO</b>. De manera que el <b>LICENCIANTE</b> no otorgar?? a terceros los derechos concebidos a <b>LORO MUSICAL</b> en el <b>ACUERDO</b> en el <b>TERRITORIO</b> durante la duraci??n de este <b>ACUERDO</b>. <b>El LICENCIANTE</b> reconoce y acuerda que <b>LORO MUSICAL</b> podr?? utilizar a terceros para ejercer los derechos que le han sido otorgados en este <b>ACUERDO</b>.
        </li>
      </ul><br>
      <p>
        <b>SEXTA: RESERVA DE DERECHOS:</b> <b>LORO MUSICAL</b> no editar??, remezclar??, resecuenciar?? ni de otra manera alterar?? cualquier fonograma entregado por el <b>LICENCIANTE</b> a su disposici??n en cualquier formato, salvo que se establezca lo contrario en este <b>ACUERDO</b> o como anexo de manera escrita. Todos los derechos que no sean espec??ficamente otorgados o licenciados a <b>LORO MUSICAL</b> est??n expresamente reservados para el <b>LICENCIANTE</b>.
      </p>
      <p>
        <b>S??PTIMA: OBLIGACIONES:</b> Tras la suscripci??n de este <b>ACUERDO</b>, y durante toda la vigencia del mismo, el <b>LICENCIANTE</b> se compromete a:
      </p>
      <ul>
        <li>
          Entregar a <b>LORO MUSICAL</b> los fonogramas (preferiblemente con al menos tres (3) semanas de anticipaci??n a la fecha de lanzamiento programada) en un formato digital o electr??nico aprobado por <b>LORO MUSICAL</b> (WAV, MP3 o FLAC). La entrega satisfactoria de los fonogramas por parte del <b>LICENCIANTE</b> deber?? incluir todos los archivos relacionados, metadata, materiales del ??lbum, artes y materiales gr??ficos de alta resoluci??n, informaci??n completa de la composici??n subyacente fijada en los fonogramas, toda la informaci??n de autores, editores, sociedades de gesti??n colectiva y otros elementos razonables requeridos por <b>LORO MUSICAL</b> y no se har?? responsable de la afectaci??n en los tiempos de entrega en los casos donde la informaci??n no sea entregada de manera oportuna.
        </li>
        <li>
          Entregar a <b>LORO MUSICAL</b> los certificados de derechos de autor, de autorizaci??n de uso de sampleo o del uso de Contenido no original para la correcta distribuci??n del ??lbum dentro de los tiempos que les sean solicitados. En caso de no hacerlo, o de no tener alguno de los certificados, es posible que la distribuci??n no pueda continuar hasta no relacionar la documentaci??n correctamente. <b>LORO MUSICAL</b> no se hace responsable de la afectaci??n en los tiempos de entrega o de la no distribuci??n bajo su discreci??n por la falta de comprobaci??n de identidad como protocolo de protecci??n de derechos de autor de los autores originales.
        </li>
        <li>
          El <b>LICENCIANTE</b> se compromete a realizar la correcta dada de baja de los fonogramas en otras distribuidoras o empresas de distribuci??n musical cuando aplique el caso. <b>PAR??GRAFO: LORO MUSICAL</b> no distribuir?? un fonograma que est?? siendo distribuido por otra distribuidora y/o sello discogr??fico.
        </li>
      </ul>
      <p>
        <b>PAR??GRAFO PRIMERO: El LICENCIANTE</b> ser?? responsable por y pagar?? cualesquiera y todas las regal??as y otros ingresos debidos a los artistas, artistas ejecutantes, productores, autores, compositores y otros participantes de regal??as de grabaci??n, de las ventas, y otros usos de los fonogramas, todos los pagos que puedan ser requeridos con los convenios colectivos aplicables a los fonogramas, y cualquier otro tipo de regal??as, honorarios y/o dinero pagaderos por el <b>LICENCIANTE</b>.
      </p>
      <p>
        Tras la suscripci??n de este <b>ACUERDO</b> y durante la vigencia del mismo, <b>LORO MUSICAL</b> se comprometa a:
      </p>
      <ul>
        <li>
          Solicitar de y prestar servicios a Plataformas de Terceros. <b>LORO MUSICAL</b> no garantiza que las Plataformas de Terceros pongan a disposici??n los fonogramas. <b>LORO MUSICAL</b> podr?? de manera razonada, rechazar la explotaci??n de cualquier fonograma.
        </li>
        <li>
          Procesar los fonogramas entregados por el <b>LICENCIANTE</b>, seg??n corresponda, para su entrega a Plataformas de Terceros.</li><li>Cobrar a las Plataformas de Terceros los montos adeudados en relaci??n con las explotaciones de los fonogramas y liquidar?? y abonar?? a la Cuenta de Usuario del <b>LICENCIANTE</b>, los montos en la proporci??n que corresponda seg??n la cl??usula segunda de este <b>ACUERDO</b>.
          </li>
          <li>
            <b>LORO MUSICAL</b> se compromete a entregar la informaci??n obtenida de las tiendas digitales en donde se hayan generado reproducciones del cat??logo que se est?? distribuyendo en nombre del <b>LICENCIANTE</b>, a trav??s de la plataforma, de manera trimestral siempre y cuando se hayan generado datos en ese periodo, en caso de que no se acumular?? para el siguiente trimestre.
          </li>
          <li>
            <b>LORO MUSICAL</b> se compromete a entregar los c??digos UPC y IRSC generados para los lanzamientos realizados durante la vigencia de este contrato al <b>LICENCIANTE</b>. Estos c??digos estar??n disponibles en la Cuenta de Usuario del <b>LICENCIANTE</b> y se dar?? por entendido que el <b>LICENCIANTE</b> dispondr?? de ellos cuando lo requiera.
          </li>
        </ul>
        <p>
          <b>PAR??GRAFO SEGUNDO:</b> Algunos de los servicios ofrecidos por <b>LORO MUSICAL</b> podr??n estar sujetos al pago de una tarifa, por una sola vez o recurrente -seg??n el caso-, aplicable cuando se solicite el servicio, pagadera por el <b>LICENCIANTE</b> a <b>LORO MUSICAL</b>. Estos servicios ser??n adicionales para el <b>LICENCIANTE</b>, y el <b>LICENCIANTE</b> ser?? informado si dichas tarifas aplican antes de que se preste el servicio ofrecido. Todas las tarifas ser??n cargadas en el momento en el que el <b>LICENCIANTE</b> opte por y acepte el servicio, y deber?? pagarse inmediatamente utilizando la plataforma.
        </p>
        <p>
          <b>OCTAVA: CONTABILIDAD:</b> La parte de los Ingresos Netos del <b>LICENCIANTE</b> incluir?? todas las regal??as por distribuci??n digital, Content ID, administraci??n del Canal de YouTube, administraci??n de Derechos Conexos y otros pagos debidos socados con los fonogramas y las composiciones musicales all?? incorporadas. El <b>LICENCIANTE</b> ser?? responsable por el pago de todos los impuestos gravados con respecto a todo el ingreso recibido de acuerdo con la cl??usula segunda. <b>LORO MUSICAL</b> tendr?? el derecho a confiar en la contabilidad, los usos y otras declaraciones recibidas de los sublicenciatarios de <b>LORO MUSICAL</b> para todos los prop??sitos del presente:
        </p>
        <ul>
          <li>
            <b>LORO MUSICAL </b>deber?? contabilizar y pagar trimestralmente, en los primeros 20 d??as de los meses de febrero, mayo, agosto y noviembre, la cuota de los Ingresos Netos del <b>LICENCIANTE</b> a trav??s de la Cuenta de Usuario, siempre y cuando las tiendas hayan reportado ganancias a favor del <b>LICENCIANTE</b> en ese periodo, en caso de no haber sido reportada la informaci??n a tiempo por parte de las Plataformas de Terceros ser?? acumulado para el siguiente trimestre. Dicha contabilidad incluir?? los Ingresos Netos recibidos por <b>LORO MUSICAL</b> por la explotaci??n de los fonogramas de todas las fuentes (incluida la distribuci??n directa y de terceros), especificada en este documento y en el monto adeudado al <b>LICENCIANTE</b>. <b>PAR??GRAFO PRIMERO:</b> Los pagos se har??n al <b>LICENCIANTE</b> a trav??s de la Cuenta de Usuario. <b>PAR??GRAFO SEGUNDO:</b> El <b>LICENCIANTE</b> tendr?? la capacidad y ser?? el responsable de solicitar cu??ndo retirar el saldo de las regal??as abonadas a su Cuenta de Usuario a trav??s de PayPal, si es usuario internacional, o transferencia bancaria si es usuario colombiano. En todo caso, el <b>LICENCIANTE</b> ser?? responsable por los honorarios y/o comisiones cobrados por dichas entidades financieras y/o procesadoras de pagos. <b>PAR??GRAFO TERCERO:</b> El soporte sobre el uso de tales Plataformas de Terceros y su cuenta es responsabilidad exclusiva de los administradores de tales sitios y no de <b>LORO MUSICAL</b>. <b>PAR??GRAFO CUARTO:</b> El <b>LICENCIANTE</b> ser?? el ??nico responsable de la administraci??n de los recursos disponibles en la Cuenta de Usuario, ya sea directamente o a trav??s de terceros designados por ??ste, mediante el uso adecuado de su informaci??n de usuario y contrase??a para la Cuenta de Usuario y, <b>LORO MUSICAL</b>, no asumir?? ning??n tipo de responsabilidad por la inobservancia de esta obligaci??n a cargo del <b>LICENCIANTE</b>. Cualquier objeci??n relacionada con culturizar el reporte contable o cualquier requerimiento que surja de los mismos debe hacerse (y cualquier demanda deber?? ser iniciada), a m??s tardar un a??o despu??s de la fecha en que est?? disponible el reporte correspondiente en la Cuenta de Usuario, y el <b>LICENCIANTE</b> renuncia a cualquier periodo adicional que otorga la ley para esto.
          </li>
          <li>
            El <b>LICENCIANTE</b> acepta que <b>LORO MUSICAL</b> puede congelar y retener todos y/o cada uno de los ingresos de la Cuenta de Usuario del <b>LICENCIANTE</b>, por indicios razonables sobre la violaci??n de este <b>ACUERDO</b>. <b>LORO MUSICAL</b> deber?? notificar por escrito al <b>LICENCIANTE</b> de manera oportuna que las sumas de dinero ser??n retenidas y revisar?? de buena fe cualquier explicaci??n y/o tipo de respuesta que el <b>LICENCIANTE</b> entregue para esclarecer la situaci??n. S?? <b>LORO MUSICAL</b> tiene una creencia de buena fe (y el abogado de <b>LORO MUSICAL</b> est?? de acuerdo) de que dichos ingresos son el resultado de fraude o infracci??n por parte del <b>LICENCIANTE</b>, dichos ingresos ser??n retenidos por <b>LORO MUSICAL</b>. En la medida en que se determine que las actividades fraudulentas o infractoras son causadas por las acciones u omisiones del <b>LICENCIANTE</b> o de sus afiliados, los costos incurridos por <b>LORO MUSICAL</b> (incluidos los honorarios y gastos legales) relacionados con los mismos pueden, adem??s de otros remedios, ser deducidos por <b>LORO MUSICAL</b> de cualquier dinero de otra manera pagadero al <b>LICENCIANTE</b> bajo este <b>ACUERDO</b>. El <b>LICENCIANTE</b> acepta y autoriza a <b>LORO MUSICAL</b> a suministrar su informaci??n de contacto y/o datos contables en caso de que este se encuentre involucrado en alg??n tipo de controversia relacionada con derechos de autor y/o conexos de contenidos distribuidos a trav??s de la Cuenta de Usuario. Ciertas Plataformas de Terceros tambi??n pueden tener pol??ticas relacionadas con el fraude, infracciones y las actividades fraudulentas sospechosas, y el <b>LICENCIANTE</b> acepta que es su responsabilidad investigar dichas pol??ticas, si las hubiere, y que dichas pol??ticas ser??n obligatorias para el <b>LICENCIANTE</b>.<br>
          </li>
        </ul>
        <p>
          <b>NOVENA: CONFIDENCIALIDAD:</b> La informaci??n suministrada en este <b>ACUERDO</b> es confidencial y no ser?? revelada por el <b>LICENCIANTE</b> a cualquier tercero (con excepci??n de sus asesores profesionales, pero manteniendo la entera responsabilidad sobre cada uno de ellos), sin el previo consentimiento escrito de <b>LORO MUSICAL</b>; excepto que requiera ser revelado por la ley aplicable o proceso legal, siempre y cuando el <b>LICENCIANTE</b> notifique a <b>LORO MUSICAL</b> con al menos cinco d??as antes de cualquier revelaci??n requerida por la ley o dentro de un proceso judicial.
        </p>
        <p>
          <b>D??CIMA: DECLARACIONES, GARANT??AS E INDEMNIZACI??N:</b> El <b>LICENCIANTE</b> declara y garantiza que:
        </p>
        <ul>
          <li>
            El <b>LICENCIANTE</b> es mayor de edad y tiene capacidad legal suficiente para manifestar su consentimiento y aceptar el <b>ACUERDO</b> de forma vinculante y/o se encuentra actuando bajo supervisi??n y autorizaci??n expresa de su representante, tutor o curador legal debidamente designado por la ley; el <b>LICENCIANTE</b> es y puede demostrar a la total satisfacci??n de <b>LORO MUSICAL</b> que es titular, licenciante de, o que de otra manera controla o ha obtenido los derechos y licencias de uso de los fonogramas, las composiciones musicales subyacentes incorporadas en estos y los materiales del ??lbum para que <b>LORO MUSICAL</b> explote los derechos que se le otorgan en virtud del presente <b>ACUERDO</b>; el <b>LICENCIANTE</b> no otorgar?? y no ha otorgado a terceros ning??n derecho que sea inconsistente con los derechos licenciados u otorgados a <b>LORO MUSICAL</b> por el <b>ACUERDO</b>; el <b>LICENCIANTE</b> ser?? el ??nico responsable de la gesti??n y pago directamente u ante cualquier reclamo por parte de terceros interesados en el pago de cualquier regal??a u otros pagos a terceros que puedan llegar a ser debidos como resultado del ejercicio por parte de <b>LORO MUSICAL</b> de sus derechos bajo el presente, incluyendo sin limitaci??n, a cualquier organizaci??n de derechos de comunicaci??n p??blica, autores, coautores, productores, artistas int??rpretes o ejecutantes y terceros participantes de regal??as. El Contenido (incluyendo, sin limitaci??n, los fonogramas, materiales del ??lbum y cualquier composici??n musical subyacente incorporada en el mismo) y todo el material proporcionado por el <b>LICENCIANTE</b> a <b>LORO MUSICAL</b> y el ejercicio por parte de <b>LORO MUSICAL</b> de los derechos otorgados en el presente, no infringe, ni infringi?? cualquier derecho de terceros, incluyendo pero no limitado a los derechos de autor, marcas registradas y derechos de privacidad imagen y publicidad de cualquier tercero y el <b>LICENCIANTE</b> no conoce ninguna reclamaci??n material, ni los fundamentos de ninguna reclamaci??n material, que pueda afectar el libre ejercicio de <b>LORO MUSICAL</b> sobre los derechos otorgados por el <b>LICENCIANTE</b> o la explotaci??n del Contenido conforme al <b>ACUERDO</b>; y el <b>LICENCIANTE</b> no conoce ninguna reclamaci??n ni hechos que justifiquen reclamaciones, que puedan afectar la titularidad y validez del Contenido.
          </li>
          <li>
            El <b>LICENCIANTE</b> se compromete a indemnizar, defender y mantener indemne a <b>LORO MUSICAL</b>, sus afiliados, subdistribuidores y licenciatarios, sus directores, funcionarios, accionistas, agentes y empleados, respecto y contra cualquier reclamaci??n de terceros, por da??os, responsabilidades, p??rdidas, costos y gastos, incluyendo, sin limitaci??n a, honorarios razonables de abogados y costas judiciales, que surjan y/o est??n relacionados con cualquier incumplimiento o supuesto incumplimiento por el <b>LICENCIANTE</b>, respecto de cualquier garant??a, manifestaci??n o acuerdo hecho en el presente o concerniente a cualquier acto, error y/o omisi??n cometidos por el <b>LICENCIANTE</b> o cualquier persona o entidad actuando en representaci??n del <b>LICENCIANTE</b> o bajo la direcci??n o control del <b>LICENCIANTE</b>. En el evento en que una reclamaci??n sea hecha o una acci??n sea iniciada, <b>LORO MUSICAL</b> tendr?? el derecho a retener el pago de cualquiera o de todas las sumas de dinero adeudadas al <b>LICENCIANTE</b> por el presente en montos razonables a tal reclamaci??n o acci??n pendiente de su disposici??n.
          </li>
          <li>
            Nada en este <b>ACUERDO</b> obligar?? a <b>LORO MUSICAL</b> a distribuir, reproducir, explotar o utilizar de cualquier otro modo cualquiera de los fonogramas u otro Contenido, todo lo cual quedar?? a la entera discreci??n de <b>LORO MUSICAL</b>. <b>LORO MUSICAL</b> puede optar por no proporcionar, o dejar de proporcionar, cualquier servicio, con respecto a cualquier fonograma a su entera discreci??n, incluyendo, sin limitaci??n, debido a una mala calidad de grabaci??n o Contenido odioso, obsceno o inapropiado. Sin limitar lo anterior, <b>LORO MUSICAL</b> tendr?? el derecho unilateral de eliminar cualquier Contenido u otros materiales de la Cuenta de Usuario, Plataformas de Terceros y/o los servicios que considere, a su entera discreci??n, por violar los acuerdos del Sitio Web o los acuerdos de Plataformas de Terceros.
          </li>
          <li>
            La responsabilidad agregada de <b>LORO MUSICAL</b> por cualquiera y todas las causas de acci??n que surjan de o relacionadas con este <b>ACUERDO</b> no exceder?? el monto de dinero pagado por <b>LORO MUSICAL</b> al <b>LICENCIANTE</b> en el periodo de un (1) a??o anteriores a la fecha del incumplimiento o del incumplimiento de <b>LORO MUSICAL</b> alegado y que de origen a tal responsabilidad. En ning??n caso, <b>LORO MUSICAL</b> ser?? responsable para con el <b>LICENCIANTE</b> o cualquier tercero por cualquier da??o indirecto, consecuente, ejemplares, incidentes, especiales o punitivos, incluidos los da??os por p??rdida de utilidad o p??rdida de datos resultantes relacionada con este <b>ACUERDO</b>. Las limitaciones de responsabilidad establecidas en esta secci??n se aplicar??n independientemente de la causa de la acci??n bajo la cual se pretenden tales da??os, sea por incumplimiento contractual, diligencia, responsabilidad estricta u otro agravio, ya sea que las partes fueron o debieron estar conscientes o asesoradas de la posibilidad de tal da??o, y sin importar si el remedio falla de su prop??sito esencial. Las partes acuerdan que las limitaciones de esta secci??n son un elemento esencial de este <b>ACUERDO</b> y que los acuerdos realizados en esta secci??n reflejan una estimaci??n razonable de riesgo, y que cada parte no suscribir?? este <b>ACUERDO</b> sin estas limitaciones de responsabilidad.
          </li>
        </ul>
        <p>
          <b>DECIMOPRIMERA: TERMINACI??N:</b> El <b>LICENCIANTE</b> y <b>LORO MUSICAL</b> establecen que las causales de terminaci??n ser??n las siguientes:
        </p>
        <ul>
          <li>
            La duraci??n de este <b>ACUERDO</b> puede darse por terminado por escrito (al menos por correo electr??nico) por cualquier de las partes con al menos 30 d??as de anticipaci??n a la fecha de terminaci??n y la terminaci??n ser?? efectiva seg??n el mutuo acuerdo de las partes. <b>LORO MUSICAL</b> tendr?? un espacio de hasta 15 d??as, luego de la fecha de terminaci??n acordada, para solicitar a las Plataformas de Terceros que den de baja todos lo fonogramas suministrados por el <b>LICENCIANTE</b> y el <b>LICENCIANTE</b> acepta y reconoce que el tiempo que le toma a cada Plataformas de Terceros para retirar los fonogramas es variable y puede tomar hasta cuatro semanas. Al finalizar o terminar este <b>ACUERDO</b>, por cualquier causa, <b>LORO MUSICAL</b> gozar?? un periodo de recolecci??n para recaudar todos los ingresos que se hayan generado por la explotaci??n de los contenidos, fonogramas, composiciones y otros, conforme al <b>ACUERDO</b> mientras estuvo en vigencia, en especial pero no limitado, a ingresos generados en Plataformas de Terceros y por la explotaci??n de las licencias.La duraci??n de este <b>ACUERDO</b> puede darse por terminado por escrito (al menos por correo electr??nico) por cualquier de las partes con al menos 30 d??as de anticipaci??n a la fecha de terminaci??n y la terminaci??n ser?? efectiva seg??n el mutuo acuerdo de las partes. <b>LORO MUSICAL</b> tendr?? un espacio de hasta 15 d??as, luego de la fecha de terminaci??n acordada, para solicitar a las Plataformas de Terceros que den de baja todos lo fonogramas suministrados por el <b>LICENCIANTE</b> y el <b>LICENCIANTE</b> acepta y reconoce que el tiempo que le toma a cada Plataformas de Terceros para retirar los fonogramas es variable y puede tomar hasta cuatro semanas. Al finalizar o terminar este <b>ACUERDO</b>, por cualquier causa, <b>LORO MUSICAL</b> gozar?? un periodo de recolecci??n para recaudar todos los ingresos que se hayan generado por la explotaci??n de los contenidos, fonogramas, composiciones y otros, conforme al <b>ACUERDO</b> mientras estuvo en vigencia, en especial pero no limitado, a ingresos generados en Plataformas de Terceros y por la explotaci??n de las licencias.
          </li>
          <li>
            <b>LORO MUSICAL</b> tendr?? el derecho, en cualquier momento, de terminar este <b>ACUERDO</b>, retirar cualquiera de los contenidos del <b>LICENCIANTE</b> de los sitios, Plataformas de Terceros, o cualquier otro lugar que <b>LORO MUSICAL</b> considere oportuno para la correcta explotaci??n de lo mismos, tambi??n, dejar de proveer los servicios al <b>LICENCIANTE</b> y/o cesar la explotaci??n y distribuci??n de cualquier Contenido, los cuales <b>LORO MUSICAL</b> podr?? elegir como resultados la determinaci??n que en alg??n momento <b>LORO MUSICAL</b> pueda darse cuenta de que: 1). El Contenido del <b>LICENCIANTE</b> infringe o puede infringir derecho de terceros; 2). El <b>LICENCIANTE</b> ha violado las cl??usulas de este <b>ACUERDO</b>, los acuerdos de las Plataformas de Terceros o los t??rminos y condiciones de nuestro Sitio Web; 3). El Contenido del <b>LICENCIANTE</b> puede ser ofensivo y/o obsceno; 4). El Contenido y/o actos del <b>LICENCIANTE</b> puede da??ar o desacreditar a <b>LORO MUSICAL</b>; 5). Por cualquier otra raz??n, o ninguna raz??n, que <b>LORO MUSICAL</b> pueda determinar a su entera descripci??n. En caso de que <b>LORO MUSICAL</b> termine este <b>ACUERDO</b> de conformidad con los literales 1, 2, 3 o 4 anteriores, el <b>LICENCIANTE</b> acepta pagar inmediatamente a <b>LORO MUSICAL</b> las garant??as que se encuentren en cabeza a <b>LORO MUSICAL</b> y/o los perjuicios que pueda ocasionar.
          </li>
        </ul>
        <p>
          <b>DECIMOSEGUNDA: ADELANTOS:</b> <b>LORO MUSICAL</b> podr?? considerar otorgar adelantos econ??micos de regal??as en forma de pr??stamo a favor del <b>LICENCIANTE</b>, en cualquier momento, y a su entera discreci??n; una vez presentada la oferta, el <b>LICENCIANTE</b> deber?? aceptarlo antes de que sea transferido a su Cuenta de Usuario; estos adelantos ser??n descontados de los Ingresos Netos obtenidos por la explotaci??n del cat??logo musical, de manera prorrateada; los adelantos tendr??n una tasa de inter??s fija mensual del dos por ciento (2%); y, el m??ximo a descontar en cada trimestre no superar?? el cincuenta por ciento (50%) de los Ingresos Netos generados. <b>PAR??GRAFO:</b> Este <b>ACUERDO</b> no se podr?? dar por terminado mientras exista una deuda por concepto de adelanto y, en caso de que el <b>LICENCIANTE</b> quiera darlo por terminado deber?? realizar el pago pendiente del adelanto, de manera voluntaria y deber?? ser aprobado, de manera escrita, por <b>LORO MUSICAL</b>.
        </p>
        <p>
          <b>DECIMOTERCERA: SUCESI??N POR CAUSA DE MUERTE: LORO MUSICAL</b> har?? efectiva la sucesi??n de los Ingresos Netos del presente <b>ACUERDO</b>, por causa de muerte o por incapacidad legal, a los herederos de ley del <b>LICENCIANTE</b>; y, permitir?? que ocupen la posici??n contractual del <b>LICENCIANTE</b> en el <b>ACUERDO</b>, siempre y cuando, los herederos de ley tomen la decisi??n de hacerlo efectivo en nombre del <b>LICENCIANTE</b>. <b>PAR??GRAFO:</b> Es responsabilidad del <b>LICENCIANTE</b> informar a sus herederos de ley antes de cualquier situaci??n adversa, sobre la posibilidad de tomar su posici??n en el <b>ACUERDO</b>; y, ser?? responsabilidad de los herederos de ley acudir a <b>LORO MUSICAL</b> para hacer efectivo su derecho.
        </p>
        <p>
          <b>DECIMOCUARTA: MISCEL??NEAS:</b> Las partes aceptan las siguientes declaraciones que regir??n a todo este <b>ACUERDO</b> durante la vigencia del mismo:
        </p>
        <ul>
          <li>
            Las partes acuerdan y reconocen que la relaci??n entre ellas es de contratantes independientes. El presente <b>ACUERDO</b> no crea una asociaci??n o joint venture y ninguna de las partes ser?? agente, socio o empleado de la otra.
          </li>
          <li>
            El <b>LICENCIANTE</b> acepta obligarse a los t??rminos de uso de <b>LORO MUSICAL</b> (en https://loromusical.co/terminos), y tambi??n a la pol??tica de privacidad (en https://loromusical.co/privacidad). El <b>LICENCIANTE</b> acepta adem??s estar obligado a los t??rminos de uso y pol??ticas de privacidad de las Plataformas de Terceros. El <b>LICENCIANTE</b> acepta tambi??n estar obligado al uso de las Plataformas de Terceros, la explotaci??n del Contenido y los derechos otorgados en virtud de este <b>ACUERDO</b>. En la medida en que los t??rminos de este acuerdo entren en conflicto con los acuerdos de Plataformas de Terceros, los t??rminos de este <b>ACUERDO</b> prevalecer??n sobre aquellos. Este <b>ACUERDO</b> junto con los t??rminos de uso, contienen el entendimiento total entre las partes en relaci??n con el asunto aqu?? referido y reemplaza todos los acuerdos y arreglos previos entre el <b>LICENCIANTE</b> y <b>LORO MUSICAL</b> en relaci??n con los servicos, de existir uno; este acuerdo solo puede ser modificado por escrito electr??nicamente aceptado y/o firmado por las partes.
          </li>
          <li>
            Este <b>ACUERDO</b> ser?? obligatorio para los cesionarios, Herederos de Ley, ejecutores, afiliados, agentes, administradores y/o sucesores de cada una de las partes. <b>LORO MUSICAL</b> tendr?? el derecho de ceder libremente este <b>ACUERDO</b> en cualquier momento a cualquier tercero, sin necesidad de notificar al <b>LICENCIANTE</b>. El <b>LICENCIANTE</b> reconoce y acepta que ni el presente <b>ACUERDO</b>, ni ning??n derecho o inter??s en virtud del presente, podr?? ser cedido o transferido por el <b>LICENCIANTE</b> sin el consentimiento expreso, previo y por escrito de <b>LORO MUSICAL</b>.
          </li>
          <li>
            Todos los avisos y notificaciones se enviar??n por escrito a trav??s de correo electr??nico. S?? <b>LORO MUSICAL</b> requiere notificar al <b>LICENCIANTE</b>, <b>LORO MUSICAL</b> utilizar?? la informaci??n de contacto proporcionada por el <b>LICENCIANTE</b> al registrarse en la Cuenta de Usuario o seg??n lo haya actualizado o, en ausencia de una direcci??n de correo electr??nico v??lida, a trav??s de cualquier otro m??todo que <b>LORO MUSICAL</b> pueda elegir a su exclusivo criterio, incluyendo, pero no limitado a, mediante publicaci??n en la Cuenta de Usuario del <b>LICENCIANTE</b>. Todas las notificaciones que el <b>LICENCIANTE</b> env??e a <b>LORO MUSICAL</b> deber??n ser enviadas al correo ???distribucion@loromusical.co???. Todas las notificaciones se considerar??n recibidas: 1). 24 horas despu??s de que se envi?? el mensaje de correo electr??nico, si no se gener?? un ???error del sistema??? u otra notificaci??n de no entrega o; 2). Al momento de la publicaci??n, por otros medios electr??nicos, si se permite. Si la ley aplicable requiere que una comunicaci??n determinada est?? ???por escrito???, usted acepta que la comunicaci??n por correo electr??nico satisfar?? este requisito.
          </li>
          <li>
            Si alguna disposici??n de este <b>ACUERDO</b> o la aplicaci??n del mismo por cualquier motivo es declarada por una corte o proceso arbitral competente bajo este <b>ACUERDO</b> como inv??lida o inaplicable, dicha decisi??n no tendr?? el efecto de invalidar o anular el resto de este <b>ACUERDO</b>, siendo la intenci??n y el acuerdo de las partes que este <b>ACUERDO</b> se considerar?? enmendado modificando dicha disposici??n en la medida necesaria para hacerla v??lida, legal y exigible preservando su intenci??n o, si tal modificaci??n no es posible, sustituy??ndola por lo tanto otra disposici??n que sea v??lida, legal y exigible a fin de efectuar materialmente la intenci??n de las partes.
          </li>
          <li>
            Como condici??n previa a cualquier afirmaci??n por parte del <b>LICENCIANTE</b> de que <b>LORO MUSICAL</b> no ha cumplido con alguna de sus obligaciones contenida en este documento o que est?? incumpliendo el <b>ACUERDO</b>, el <b>LICENCIANTE</b> le dar?? a <b>LORO MUSICAL</b> una notificaci??n detallada por escrito sobre dicho incumplimiento, y otorgar?? a <b>LORO MUSICAL</b> un per??odo de treinta (30) d??as despu??s de la recepci??n de dicha notificaci??n por escrito, para que d?? soluci??n al supuesto incumplimiento. Ning??n incumplimiento por <b>LORO MUSICAL</b> se considerar?? subsanable. El hecho de que una de las partes no act??e en caso de incumplimiento del <b>ACUERDO</b> por parte de la otra parte, no se considerar?? como una renuncia a reclamar por dicho incumplimiento o por incumplimientos futuros.
          </li>
          <li>
            Este <b>ACUERDO</b> se considerar?? que se ha hecho en el Estado de Colombia, sin tener en cuenta sus disposiciones de conflicto de leyes, y su validez, construcci??n, ejecuci??n e incumplimiento se regir?? por las leyes del Estado de Colombia.
          </li>
          <li>
            Este <b>ACUERDO</b> podr?? ser firmado por medios de firma digital o electr??nica e/o intercambiado por correo electr??nico u por otros medios digitales.
          </li>
        </ul>
        <p>
          <b>El LICENCIANTE reconoce que se le ha aconsejado buscar asesor??a legal y de negocios independiente con respecto a este ACUERDO y que ha solicitado y obtenido tal consejo o deliberadamente se ha abstenido de hacerlo. El presente ACUERDO se considerar?? redactado conjuntamente, en idioma espa??ol (castellano) por las partes y no podr?? interpretarse contra ninguna parte por raz??n de su preparaci??n o redacci??n.</b>
        </p>
        <p>
          Para constancia, se emiten dos copias iguales, una para cada parte, y se firma en representaci??n propia y entendiendo la informaci??n consignada en este contrato a la fecha establecida en el encabezado de este contrato.
        </p>
        <div>
          <h4 style='text-align: center;'>
            ANEXO<br>
            DEFINIFICIONES
          </h4><br>
        </div>
        <ul>
          <li>
            ???Fecha Efectiva??? es la fecha en la que se considera que el <b>ACUERDO</b> entra en vigor y que siempre estar?? en el encabezado de este <b>ACUERDO</b>.
          </li>
          <li>
            ???Ingresos Netos??? significa todo el dinero recibido por o adeudados a <b>LORO MUSICAL</b> directamente atribuible a la venta, licencia, explotaci??n, o uso de los fonogramas, videos y servicios de administraci??n del Canal de YouTube en virtud del presente, menos cualesquiera tarifas de procesamiento de transacciones de transferencia de dinero, impuestos de ventas aplicables y retenciones fiscales requeridas en territorios aplicables y tarifas de la escala sindical (cuando sea aplicable). En caso de que <b>LORO MUSICAL</b> reciba un pago de una Plataformas de Terceros que no corresponda directamente al pago adeudado por la explotaci??n del contenido, incluyendo, pero sin limitarse a (i) un pago relacionado con la venta de capitales de una Plataforma de Terceros; (ii) una porci??n no recuperada que haga parte de un anticipo entregado por una Plataforma de Terceros, que para ese momento dicha plataforma ya no pueda recuperar; (iii) y un pago para compensar la deuda de una garant??a m??nima; <b>LORO MUSICAL</b> aplicar?? un m??todo, a su entera discreci??n, para determinar la asignaci??n, si la hubiera, de dichos montos al <b>LICENCIANTE</b>. En el caso de que dichos montos se vayan a asignar, seg??n lo determinado a discreci??n de <b>LORO MUSICAL</b>, <b>LORO MUSICAL</b> aplicar?? un m??todo de c??lculo de manera uniforme y equitativa para todos los clientes en situaci??n similar y los montos asignados al <b>LICENCIANTE</b> se considerar??n parte de los ingresos netos aqu?? establecidos. A trav??s de la suscripci??n de este <b>ACUERDO</b>, el <b>LICENCIANTE</b> reconoce y acepta que no tendr?? derecho alguno a objetar o impugnar este m??todo utilizado por <b>LORO MUSICAL</b> para determinar el porcentaje que le sea asignado y/o su participaci??n dentro de dichos pagos por parte de <b>LORO MUSICAL</b>.
          </li>
          <li>
            ???Content ID??? el sistema de identificaci??n de contenido de YouTube es un programa de huellas digitales de audio que permite a YouTube catalogar la m??sica enviada, lo que permite a los propietarios de derechos de autor identificar d??nde se est?? utilizando su m??sica en YouTube. Content ID fue dise??ado para permitirte recuperar el control sobre d??nde se puede escuchar tu m??sica y para ayudarte a recibir pagos cuando tu m??sica se usa en YouTube.
          </li>
          <li>
            ???Derechos Conexos??? significa el derecho a reproducir y comunicar p??blicamente por medios de difusi??n, terrestre, an??logos o digitales de transmisi??n de audio, fonogramas protegidos por las normas de propiedad intelectual; ??nicamente en lo que respecta al productor fonogr??fico.
          </li>
          <li>
            ???Regal??as por Comunicaci??n P??blica??? consiste en un pago dado por la explotaci??n del derecho patrimonial de comunicaci??n p??blica; es decir, cada vez que la m??sica suene en establecimientos abiertos como bares, restaurantes, conciertos, hoteles, supermercados, etc., estas empresas deber??n reconocerle un valor a unas entidades conocidas como Sociedades de Gesti??n Colectiva, cuya misi??n es dar licencias, monitorear los usos, recaudar los dineros y entreg??rselos a los compositores, int??rpretes, ejecutantes y productores fonogr??ficos afiliados.
          </li>
          <li>
            ???Administraci??n del Canal de YouTube??? aplica cuando <b>LORO MUSICAL</b> est?? administrando el canal de YouTube, nos encargamos de optimizar el rendimiento al m??ximo, manteni??ndolos sanos a trav??s de la resoluci??n de conflictos de propiedad y hacemos que aumenten los ingresos debido a la mejora de tasas como YouTube Ad Revenue, RPM o CPM.
          </li>
          <li>
            ???Contenido??? significa todos los fonogramas, videos, materiales del ??lbum, contenido de YouTube y otros materiales entregados por el <b>LICENCIANTE</b> a <b>LORO MUSICAL</b>.
          </li>
          <li>
            ???Medios Interactivos??? es un servicio interactivo en entornos digitales; es decir, que el usuario puede escuchar cualquier canci??n de la base de datos del proveedor de servicios digitales (Digital Service Provider o DSP, por sus siglas en ingl??s) sin restricciones de tiempo o capacidad de reproducci??n.
          </li>
          <li>
            ???Medios No Interactivos??? significa todos los medios por los cuales en la transmisi??n de la m??sica  el usuario puede reproducir la m??sica pero no se permite seleccionar la pr??xima canci??n, por ejemplo: la radio, radio por internet y algunas DSPs.
          </li>
          <li>
            ???Plataforma de Terceros??? significa minoristas y plataformas, digitales, de streaming interactivo o no interactivo, en la nube, redes sociales, m??viles y/o de internet de terceros que distribuyen, transmiten, explotan o de cualquier otra forma ponen a disposici??n m??sica, videos y otros contenidos, incluyendo, sin limitaci??n, plataformas, tecnolog??as y servicios que pueden existir o desarrollarse despu??s de la Fecha Efectiva.
          </li>
          <li>
            ???Cuenta de Usuario??? se refiere a la herramienta autogesti??n que el usuario puede utilizar para administrar sus lanzamientos, obtener informaci??n sobre reproducciones y reportes de ventas, analizar sus Ingresos Netos y solicitar la retirada de estos mismos hacia su PayPal o cuenta bancaria, dependiendo del caso.
          </li>
          <li>
            ???Sitio Web??? significa el(los) sitio(s) web de <b>LORO MUSICAL</b>.
          </li>
          <li>
            ???Explotaci??n??? es el aprovechamiento del cat??logo para ser publicado, transmitido, utilizado,  vendido y puesto en disposici??n en Plataformas de Terceros, Medios Interactivos y No Interactivos.
          </li>
        </ul>
        <div class='row mt-5 text-center'>

          <div class='col-md-6'>
            <div class='border border-dark rounded'><img src="<?php echo $firma ?>" alt="" width="400px"></div>
            Mar??a Garc??s Casta??o<br>
            C.C. 43.261.125 de Medell??n<br>
            Representante Legal de <b>LORO MUSICAL</b>
          </div>

        </div>
      </div>
      <div id="signature-pad" class="signature-pad">
        <div class="signature-pad--body">
          <canvas></canvas>
        </div>
        <div class="signature-pad--footer">
          <div class="description">Sign above</div>

          <div class="signature-pad--actions">
            <div>
              <button type="button" class="button clear" data-action="clear">Clear</button>
              <button type="button" class="button" data-action="undo">Undo</button>

            </div>
            <div>
              <button type="button" class="button save" data-action="save-svg">Save as SVG</button>
            </div>
          </div>
        </div>
      </div>
      <div id="mostrarSvg"></div>

      <script src="js/signature_pad.umd.js"></script>
      <script src="js/app.js"></script>
    </body>

  </html>