<!DOCTYPE HTML>
<html>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/layout.css">
    
    
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/swiper.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/carrito.js"></script>
        
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Source+Sans+Pro:400,700,900' rel='stylesheet' type='text/css'>  
</head>

<body>

<script type="text/javascript" src="js/script.js"></script>
<div class="container">
    <header>
        <div class="row" id="sticky">
            <div class="container">
            <div class="isologo">
                <a href="index.php">
                    <img src="img/logo.png">
                </a>
            </div>
            <div class="menu">
                
                <menu>
                <input type="checkbox" id="toogle" />
                <label class="menubtn" for="toogle"><i class="fa fa-bars"></i></label>
                <menu>
                    
                        </div>
                <input type="checkbox" id="toogle" />
                <label class="menubtn" for="toogle"><i class="fa fa-bars"></i></label>
                <menu>
                        <li><a href="productos.php" id="tienda">productos</a></li>
                        <li><a href="login.php" id="tienda">Ingresar</a></li>
                        <div class="productos-menu despliega" style="display:none;">
                            <ul class="responsiveno">
                                <h2>
                                    <a href="categoria.php?rubro=01&p=Vinos">
                                        Vinos
                                    </a>
                                </h2>
                                <li>
                                    <a href="tipo.php?rubro=01&idt=011&n=Vinos Tintos">
                                        Vinos Tintos
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=01&idt=012&n=Vinos%20Blancos">
                                        Vinos Blancos
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=01&idt=014&n=Vinos%20Dulces">
                                        Vinos Dulces
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=01&idt=013&n=Vinos%20Rosados">
                                        Vinos Rosados
                                    </a>
                                </li>
                                
                            </ul>
                            <ul class="responsiveno">
                                <h2>
                                    <a href="categoria.php?rubro=02&p=Espumantes">
                                        Espumantes
                                    </a>
                                </h2>
                                <li>
                                    <a href="tipo.php?rubro=02&idt=022&n=Espumantes%20Importados">
                                        Importados
                                    </a>
                                </li>
                                <li>
                                    <a href="tipo.php?rubro=02&idt=021&n=Espumantes%20Nacionales">
                                        Nacionales
                                    </a>
                                </li>
                                
                            </ul>
                            <ul class="responsiveno">

                                <h2>
                                    <a href="categoria.php?rubro=04&p=Cervezas-Sidras">
                                        Cervezas y Sidras
                                    </a>                                       
                                </h2>
                                <li>
                                    <a href="http://frappe.com.ar/tipo.php?rubro=04&idt=041&n=Cervezas">
                                        Cervezas
                                    </a>
                                </li>

                            </ul>
                            <ul class="responsivesi" style="display:none;">
                                
                                <li>
                                    <a href="categoria.php?rubro=01&p=Vinos">
                                        Vinos
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="categoria.php?rubro=02&p=Espumantes">
                                        Espumantes
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="categoria.php?rubro=04&p=Cervezas-Sidras">
                                        Cervezas y Sidras
                                    </a> 
                                </li>
                            </ul>
                        </div>
                        
                    
                        <li><a href="contacto.php" id="contacto">contacto</a></li>
                    </ul>
                </menu>
            </div>
            
            
                
            </div>
        </div>
        </div>
        <div class="row" style="width:250px;margin:0 auto;">
            <div class="col-md-12">
                <a href="index.php" class="logo">
                    <img src="img/logo.png">
                </a>
            </div>      
        </div>
    </header>
</div>
<script>
$(document).ready(function() {
    var stickyNavTop = $('#sticky').offset().top;

    var stickyNav = function() {
        var scrollTop = $(window).scrollTop();

        if (scrollTop > stickyNavTop) {
            $('#sticky').addClass('stick');
        } else {
            $('#sticky').removeClass('stick');
        }
    };

    stickyNav();

    $(window).scroll(function() {
        stickyNav();
    });
});
</script>
    
    <script type="text/javascript">
    $(document).ready(function() {
        $('#legales').addClass('active');
    });
    </script>
            
    <section class="content legales">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Legales</h1>
                    
                </div>
            </div>
            <div class="row">
                <h3>BEBER CON MODERACIÓN. PROHIBIDA SU VENTA A MENORES DE 18 AÑOS. </h3>
                
                <h3>35% OFF</h3>
<p>LA BODEGA S.A. - SARFATI S.A. - ALUF S.A. - TIAN VINES S.R.L. / PROMOCIÓN VÁLIDA EN TODOS LOS LOCALES LA BODEGA EL 29/06/2017 Y 30/06/2017. LA PRESENTE PROMOCIÓN NO ES ACUMULABLE NI PUEDE SUPERPONERSE CON OTRAS PROMOCIONES VIGENTES. NO PARTICIPAN DE ESTA PROMOCIÓN PRODUCTOS DE BODEGAS CHANDON, TERRAZAS DE LOS ANDES, LATITUD 33, FAMILIA ARIZU, BODEGAS ESMERALDA Y RUTINI WINES.</p>

                    <h3>2+1</h3>
                <p>
LA BODEGA S.A. - SARFATI S.A. - ALUF S.A. - TIAN VINES S.R.L. / PROMOCIÓN VÁLIDA EN TODOS LOS LOCALES LA BODEGA. LA PRESENTE PROMOCIÓN NO ES ACUMULABLE NI PUEDE SUPERPONERSE CON OTRAS PROMOCIONES VIGENTES. NO PARTICIPAN DE ESTA PROMOCIÓN PRODUCTOS DE BODEGAS CHANDON, TERRAZAS DE LOS ANDES, LATITUD 33, FAMILIA ARIZU, BODEGAS ESMERALDA Y RUTINI WINES.
                </p>
 
 
                <h3>American Express</h3>
 <p>
<span style="font-size:30px;">(C.F.T.): 0,00% </span> PROMOCIÓN VÁLIDA DEL 01/05/2017 AL 30/06/2017 INCLUSIVE, ABONANDO LA TOTALIDAD DE LA COMPRA CON TARJETAS PERSONALES Y CORPORATIVAS AMERICAN EXPRESS EMITIDAS Y ADMINISTRADAS POR AMERICAN EXPRESS ARGENTINA S.A. Y POR LOS BANCOS AUTORIZADOS (LAS “TARJETAS” Y SUS TITULARES O ADICIONALES LOS “SOCIOS”). VÁLIDO PARA COMPRAS EN SUCURSALES DE LA BODEGA S.A., WWW.LABODEGA.COM.AR Y VENTA TELEFÓNICA 3704-641201. NO ACUMULABLE CON OTRAS PROMOCIONES. LAS COMPRAS CON PLAN DE PAGOS ESTÁN SUJETAS A APROBACIÓN DE LA ENTIDAD EMISORA DE LA TARJETA. LA ENTIDAD EMISORA PUEDE SUSPENDER O MODIFICAR EL PLAN DE PAGOS EN CUALQUIER MOMENTO, LO CUAL LE SERÁ DEBIDAMENTE INFORMADO. TASA NOMINAL ANUAL (T.N.A.): 0,00%, TASA EFECTIVA ANUAL (T.E.A): 0,00%, COSTO FINANCIERO TOTAL EXPRESADO EN TASA EFECTIVA ANUAL (C.F.T.): 0,00% APLICABLE A LAS SIGUIENTES ENTIDADES EMISORAS DE TARJETAS AMERICAN EXPRESS: AMERICAN EXPRESS ARGENTINA S.A. Y BANCOS AUTORIZADOS, A SABER: BANCO MACRO S.A., HSBC BANK ARGENTINA S.A., BANCO SANTANDER RIO S.A., BANCO GALICIA Y BUENOS AIRES S.A. Y BANCO PATAGONIA S.A.<br /><br />
SÓLO VALIDO PARA COMPRAS FAMILIARES.<br /><br />
EL CONSUMO EXCESIVO DE ALCOHOL ES PERJUDICIAL PARA LA SALUD.<br />
BEBA CON MODERACIÓN. ESTÁ PROHIBIDA LA VENTA DE BEBIDAS ALCOHÓLICAS A MENORES DE 18 AÑOS.
              </p>
                
 
                <h3>Santander Rio</h3>
 <p>
 
LA BODEGA S.A. - SARFATI S.A. - ALUF S.A. - TIAN VINES S.R.L. / PROMOCIÓN VÁLIDA EXCLUSIVAMENTE PARA CLIENTES SANTANDER RÍO. EL DESCUENTO SE VERÁ REFLEJADO EN EL RESUMEN DE CUENTA. LA PRESENTE PROMOCIÓN ES VÁLIDA SÓLO PARA CONSUMOS DE TIPO FAMILIAR, EN CASO DE ESTABLECERSE DUDA SOBRE EL DESTINO DEL CONSUMO, EL BANCO SE RESERVA LA FACULTAD DE NO ACREDITAR EL MONTO DE LA BONIFICACIÓN HASTA TANTO SE RESUELVA SOBRE LA MISMA. PROMOCIÓN VÁLIDA EN TODOS LOS LOCALES LA BODEGA, HASTA EL DÍA 30/09/2017 O HASTA AGOTAR EL STOCK DISPONIBLE. LA PRESENTE PROMOCIÓN NO ES ACUMULABLE NI PUEDE SUPERPONERSE CON OTRAS PROMOCIONES VIGENTES. NO PARTICIPAN DE ESTA PROMOCIÓN PRODUCTOS DE BODEGAS CHANDON, FAMILIA ARIZU, RUTINI WINES, LATITUD 33, TERRAZAS DE LOS ANDES, Y BODEGAS ESMERALDA.
 
 
              <h3>Banco Francés</h3>
 <p>
 
PROMOCIÓN VÁLIDA DESDE 01/02/2017 HASTA 30/11/2017. CARTERA DE CONSUMO. PROMOCIÓN VÁLIDA PARA CLIENTES DEL BBVA FRANCÉS QUE ABONEN SUS COMPRAS UNICAMENTE CON TARJETAS DE CRÉDITO VISA Y MASTERCARD EMITIDAS POR BBVA FRANCÉS. CONSULTE TÉRMINOS Y CONDICIONES Y LOCALES ADHERIDOS EN WWW.FRANCESGO.COM.AR . 10% DE DESCUENTO y 3 CUOTAS SIN INTERES SOBRE PRECIO DE CONTADO. LA PRESENTE PROMOCIÓN ES VÁLIDA SOLO PARA CONSUMO DE TIPO FAMILIAR, REALIZADOS EN LOS COMERCIOS DETALLADOS PARA LA PROMOCIÓN Y NO SE ACUMULAN A OTRAS PROMOCIONES VIGENTES.  NO PARTICIPAN TARJETAS VISA PURCHASING, DISTRIBUTION Y CORPORATE. COSTO FINANCIERO TOTAL NOMINAL ANUAL: 0.00%. TASA NOMINAL ANUAL 0,00%. TASA EFECTIVA ANUAL 0,00%.EJEMPLO: EN UNA COMPRA DE $900 REALIZADA CON TARJETA DE CRÉDITO, FINANCIADA EN TRES CUOTAS, RECIBIRÁ EN EL PRIMER RESÚMEN DE SU TARJETA UN CONSUMO DE $300 Y UN REINTEGRO DE $135.  EN EL SEGUNDO Y TERCER RESÚMEN DE SU TARJETA RECIBIRA UN CONSUMO DE $300 EN CADA UNO DE ELLOS.  LOS ACCIONISTAS DE BBVA BANCO FRANCÉS S.A. LIMITAN SU RESPONSABILIDAD A LA INTEGRACIÓN DE LAS ACCIONES SUSCRIPTAS A LA LEY 19.550 Y LEY 25.738.  CUIT 30-500000319-3. CFTNA 0.00%. CFTNA (con Iva) 0.00%. CFTNA (sin Iva) 0.00%<br /><br />
 
Legales promoción Francés Go: LA BODEGA S.A. - SARFATI S.A. - ALUF S.A. - TIAN VINES S.R.L. / PROMOCIÓN VÁLIDA EN TODOS LOS LOCALES LA BODEGA, SOLAMENTE LOS DIAS 15, 16 y 17 DE JUNIO O HASTA AGOTAR EL STOCK DISPONIBLE. LA PRESENTE PROMOCIÓN NO ES ACUMULABLE NI PUEDE SUPERPONERSE CON OTRAS PROMOCIONES VIGENTES. NO PARTICIPAN DE ESTA PROMOCIÓN PRODUCTOS DE BODEGAS CHANDON, TERRAZAS DE LOS ANDES, LATITUD 33, FAMILIA ARIZU, BODEGAS ESMERALDA, VALMONT Y RUTINI WINES. SOLO VALIDO PARA COMPRAS FAMILIARES.
 
 
              <h3>Banco Patagonia</h3>
 <p>
 
LA BODEGA S.A. - SARFATI S.A. - ALUF S.A. - TIAN VINES S.R.L. / PROMOCIÓN VÁLIDA EN TODOS LOS LOCALES LA BODEGA, HASTA EL 30/06/2017 O HASTA AGOTAR EL STOCK DISPONIBLE. LA PRESENTE PROMOCIÓN NO ES ACUMULABLE NI PUEDE SUPERPONERSE CON OTRAS PROMOCIONES VIGENTES. NO PARTICIPAN DE ESTA PROMOCIÓN PRODUCTOS DE BODEGAS CHANDON, TERRAZAS DE LOS ANDES, LATITUD 33, FAMILIA ARIZU, BODEGAS ESMERALDA Y RUTINI WINES.<br /><br />
 
ESTA PROMOCIÓN SE AJUSTA A LA RESOLUCIÓN 51 E/2017 DE LA SECRETARÍA DE COMERCIO SIENDO LAS CUOTAS SIN INTERÉS.
COSTO FINANCIERO TOTAL (C.F.T.)<br />
C.F.T. (CON Y SIN IVA):0,00% (*)4,34% (**)  (*) PARA COMPRAS ABONADAS EN HASTA 3 CUOTAS FIJAS POR USUARIOS DE SERVICIOS FINANCIEROS - CARTERA DE CONSUMO - SE APLICARÁ: TASA NOMINAL ANUAL: 0,00% - TASA EFECTIVA ANUAL: 0,00% - COSTO SEGURO DE VIDA 0,00% - COSTO FINANCIERO TOTAL (C.F.T.) EXPRESADO EN TASA EFECTIVA ANUAL. (**) PARA COMPRAS ABONADAS EN CUOTAS POR CLIENTES DE CARTERA COMERCIAL, SE APLICARÁ: TASA NOMINAL ANUAL: 0% - TASA EFECTIVA ANUAL: 0% - COSTO SEGURO DE VIDA 0.35% - COSTO FINANCIERO TOTAL (C.F.T) EXPRESADO EN TASA EFECTIVA ANUAL.
 
 
              <h3>Club La Nación</h3>
 <p>
 
LA BODEGA S.A. - SARFATI S.A. - ALUF S.A. - TIAN VINES S.R.L. / PROMOCIÓN VÁLIDA EXCLUSIVAMENTE PARA SOCIOS CLUB LA NACIÓN, PARA PRODUCTOS PARA CONSUMO FAMILIAR. PROMOCIÓN VÁLIDA EN TODOS LOS LOCALES LA BODEGA, DE MARTES A DOMINGO  HASTA AGOTAR EL STOCK DISPONIBLE. LA PRESENTE PROMOCIÓN NO ES ACUMULABLE NI PUEDE SUPERPONERSE CON OTRAS PROMOCIONES VIGENTES. NO PARTICIPAN DE ESTA PROMOCIÓN PRODUCTOS DE BODEGAS CHANDON, FAMILIA ARIZU, RUTINI WINES, LATITUD 33, TERRAZAS DE LOS ANDES, Y BODEGAS ESMERALDA.
              </p>
                
                  <h3>VIERNES DE CEPAS</h3>
 <p>LA BODEGA S.A. - SARFATI S.A. - ALUF S.A. - TIAN VINES S.R.L. / PROMOCIÓN VÁLIDA EN TODOS LOS LOCALES LA BODEGA DESDE EL 23/06/2017 AL 21/09/2017. LA PRESENTE PROMOCIÓN NO ES ACUMULABLE NI PUEDE SUPERPONERSE CON OTRAS PROMOCIONES VIGENTES. NO PARTICIPAN DE ESTA PROMOCIÓN PRODUCTOS DE BODEGAS CHANDON, TERRAZAS DE LOS ANDES, LATITUD 33, FAMILIA ARIZU, BODEGAS ESMERALDA Y RUTINI WINES.</p>
                
            </div>
        </section>
    </div>
    <div class="container">
    <footer>
        <div class="servicios">
            <div class="row">
                <div class="col-sm-3">
                    <h1>Horarios</h1>
                    <p> Av. Gob. Gutnisky 3500<br>
                    8:00 a 12:00 <br>
                    16:00 a 20:00</p>
                </div>
                <div class="col-sm-3">
                    <h1>Venta telefónica</h1>
                    <p>3704-641201</p>
                </div>
                <div class="col-sm-3">
                    <h1>Envío gratuito</h1>
                    <p>En Formosa, comprando <br> a través del call center</p>
                </div>
                <div class="col-sm-3">
                    <h1><a href="contacto.php">Preguntas Frecuentes</a></h1>
                    <p>Escribinos, estamos <br> para ayudarte</p>
                </div>
            </div>
        </div>
        <div class="links">
            <div class="row">           
                <div class="col-sm-3 hidden-xs">
                    <h1>Tienda</h1>
                    <ul>
                        <li><a  href="categoria.php?rubro=01&p=Vinos">Vinos </a></li>
                        <li><a  href="categoria.php?rubro=02&p=Espumantes-Sidras">Espumantes y sidras </a></li>
                        <li><a  href="categoria.php?rubro=04&p=Cervezas">Cervezas </a></li>
                    </ul>
                </div>
                <div class="col-sm-3 hidden-xs">
                    <h1>La Bodega S.A</h1>
                    <ul>
                        
                        <li><a href="contacto.php">Contacto</a></li>
                        <li><a href="legales.php">Legales</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-2"></div>
                <div class="col-md-3 col-sm-4">
                    
                            <p>La Bodega S.A.<br>
                            2017 © Todos los Derechos Reservados <br>Programacion IV</p>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

</body>
</html>