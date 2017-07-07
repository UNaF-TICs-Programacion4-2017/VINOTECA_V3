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

	<title>Productos | Vinoteca La Bodega S.A</title>

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
		$('#tienda').addClass('active');
	});
	</script>
	
	<section class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Inicio</p>
				</div>
			</div>
		</div>
	</section>
			
	<section class="content tienda">
		<div class="container">
			<div class="row variedad">
				<div class="col-md-12">
					<h1>Vinos</h1>
				</div>
				
				<div class="producto col-md-3 col-xs-6">
							<a href="detalle.php?id=1005911" class="detalle">Detalle</a>
					<img src="img/productos/sinfoto.png">
					<h1>CADUS VISTA FLORES CHARDONNAY</h1>
					<p>$ 349.99</p>
				</div>
				
				<div class="producto col-md-3 col-xs-6">
							<a href="detalle.php?id=1005876" class="detalle">Detalle</a>
					<img src="img/productos/sinfoto.png">
					<h1>ALAMBRADO SAUVIGNON BLANC</h1>
					<p>$ 205.00</p>
				</div>
				
				<div class="producto col-md-3 col-xs-6">
							<a href="detalle.php?id=1005870" class="detalle">Detalle</a>
					<img src="img/productos/1005870.png">
					<h1>GRAN ALAMBRADO BLEND</h1>
					<p>$ 251.00</p>
				</div>
				
				<div class="producto col-md-3 col-xs-6">
							<a href="detalle.php?id=1005843" class="detalle">Detalle</a>
					<img src="img/productos/sinfoto.png">
					<h1>MENDEL CABERNET SAUVIGNON</h1>
					<p>$ 420.00</p>
				</div>
				
				
			</div>
			
			<div class="row variedad">
				<div class="col-md-12">
					<h1>Espumantes</h1>
				</div>
			
				<div class="producto col-md-3 col-xs-6">
								<a href="detalle.php?id=1005741" class="detalle">Detalle</a>
					<img src="img/productos/1005741.png">
					<h1>SPERONE PROSECCO BRUT </h1>
					<p>$ 350.00</p>
				</div>
			
				<div class="producto col-md-3 col-xs-6">
								<a href="detalle.php?id=1005646" class="detalle">Detalle</a>
					<img src="img/productos/1005646.png">
					<h1>LA PODEROSA EXTRA BRUT</h1>
					<p>$ 170.00</p>
				</div>
			
				<div class="producto col-md-3 col-xs-6">
								<a href="detalle.php?id=1005645" class="detalle">Detalle</a>
					<img src="img/productos/sinfoto.png">
					<h1>NIETO SENETINER BRUT ROSE</h1>
					<p>$ 259.01</p>
				</div>
			
				<div class="producto col-md-3 col-xs-6">
								<a href="detalle.php?id=1005625" class="detalle">Detalle</a>
					<img src="img/productos/1005625.png">
					<h1>FREIXENET ICE CUVÉE ESPECIAL</h1>
					<p>$ 440.00</p>
				</div>
	
			</div>
			<div class="row variedad">
				<div class="col-md-12">
					<h1>Cervezas y Sidras</h1>
				</div>
				
				<div class="producto col-md-3 col-xs-6">
										<a href="detalle.php?id=1005732" class="detalle">Detalle</a>
					<img src="img/productos/1005732.png">
					<h1>PIRAAT TRIPLE HOP X330 ML</h1>
					<p>$ 168.00</p>
				</div>
				
				<div class="producto col-md-3 col-xs-6">
										<a href="detalle.php?id=1005731" class="detalle">Detalle</a>
					<img src="img/productos/1005731.png">
					<h1>PIRAAT X330 ML</h1>
					<p>$ 135.00</p>
				</div>
				
				<div class="producto col-md-3 col-xs-6">
										<a href="detalle.php?id=1005730" class="detalle">Detalle</a>
					<img src="img/productos/1005730.png">
					<h1>GULDEN DRAAK 9000 X330 ML</h1>
					<p>$ 166.07</p>
				</div>
				
				<div class="producto col-md-3 col-xs-6">
										<a href="detalle.php?id=1005729" class="detalle">Detalle</a>
					<img src="img/productos/miller.png">
					<h1>MILLER X500 ML</h1>
					<p>$ 25.00</p>
				</div>
	
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