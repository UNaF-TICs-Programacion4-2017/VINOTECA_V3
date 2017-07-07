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
     <link rel="SHORTCUT ICON" href="img/icono.png">

     <title>Pagina Principal | Vinoteca La Bodega S.A</title>
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
                                    <a href="categoria.php">
                                        Vinos
                                    </a>
                                </h2>
                                <li>
                                    <a href="categoria.php">
                                        Vinos Tintos
                                    </a>
                                </li>
                                <li>
                                    <a href="categoria.php">
                                        Vinos Blancos
                                    </a>
                                </li>
                                <li>
                                    <a href="categoria.php">
                                        Vinos Dulces
                                    </a>
                                </li>
                                <li>
                                    <a href="categoria.php">
                                        Vinos Rosados
                                    </a>
                                </li>
                                
                            </ul>
                            <ul class="responsiveno">
                                <h2>
                                    <a href="categoria.php">
                                        Espumantes
                                    </a>
                                </h2>
                                <li>
                                    <a href="categoria.php">
                                        Importados
                                    </a>
                                </li>
                                <li>
                                    <a href="categoria.php">
                                        Nacionales
                                    </a>
                                </li>
                                
                            </ul>
                            <ul class="responsiveno">

                                <h2>
                                    <a href="categoria.php">
                                        Cervezas y Sidras
                                    </a>                                       
                                </h2>
                                <li>
                                    <a href="categoria.php">
                                        Cervezas
                                    </a>
                                </li>

                            </ul>
                            <ul class="responsivesi" style="display:none;">
                                
                                <li>
                                    <a href="categoria.php">
                                        Vinos
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="categoria.php">
                                        Espumantes
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="categoria.php">
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
	
	</div>
		<section class="hero"  style="margin:0 auto;width:1200px;">

			    <div id="categoriasVinos" class="row">

                        <div class="col-md-4" >
                            <a class="banner" href="categoria.php">
                                <div class="text linea">
                                    <h1>Vinos</h1>
                                </div>
                                <img src="img/banner/vinos.jpg">
                            </a>        
                                
                        </div>
                        <div class="col-md-4">
                            <a class="banner"  href="categoria.php">
                                <div class="text">
                                    <h1>Espumantes  y Sidras</h1>
                                </div>
                                <img src="img/banner/espumantes.jpg">
                            </a>
                            
                        </div>
                        <div class="col-md-4 ">
                            <a class="banner"  href="categoria.php">
                                <div class="text linea">
                                    <h1>Cervezas</h1>
                                </div>
                                <img src="img/banner/cervezas.jpg">
                            </a>
                        </div>
				</div>
			</div>
		
	</section>
	
	<section class="content registro">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Registrate para recibir novedades</h1>
					<h3>Informate de novedades, degustaciones, promociones,  y más en tu casilla.</h3>
					 <form  id="formNews" name="formNews" method="post"  action="javascript: void(0);" data-parsley-validate>
						 <a href="login.php" class="btn btn-lg btn-success">INICIAR SESION</a>
                         <!--<a href="registro.php" class="btn btn-lg btn-success">REGISTRARME</a>-->					
					</form>
					
				</div>
			</div>
		</div>
	</section>

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
						<li><a  href="categoria.php">Vinos </a></li>
						<li><a  href="categoria.php">Espumantes y sidras </a></li>
						<li><a  href="categoria.php">Cervezas </a></li>
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
<script>
		var mySwiper = new Swiper('.swiper-container',{
			autoplay: 5000,
			keyboardControl: true,
		    pagination: '.swiper-pagination',
            paginationClickable: true,
            resizeEvent: 'resize' ,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'		
		})
	</script>
    <script>
        $(document).ready(function(){
                    $(".swiper-container").height(($('.swiper-container').width()/1170)*430);
                $(window).resize(function(){
                    //$(".swiper-container").height($(".swiper-container .img-responsive2").height());
                    $(".swiper-container").height(($('.swiper-container').width()/1170)*430);
                })
        
			});
    </script>
</body>
</html>