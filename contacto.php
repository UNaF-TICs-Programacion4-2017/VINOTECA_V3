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

    <title>Contacto | Vinoteca La Bodega S.A</title>
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
	
	<script type="text/javascript">
	$(document).ready(function() {
		$('#contacto').addClass('active');
	});
	</script>
			
	
<center>

 <h1>Contacto</h1>
  <p class="alert alert-danger">Puedes Enviar un Mail, te responderemos a la brevedad</p>
             <form name="contactform" method="post" action="email.php">

<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">Nombre *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Apellido *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">E-mail *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telefono</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="message">Mensaje *</label>
 </td>
 <td valign="top">
  <textarea  name="message" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Enviar">  
 </td>
</tr>
</table>
</center>
			</div>
				</form>
				   <h3 id="gracias-contact" style="display:none;"> Gracias por contactarse. Responderemos tu consulta a la brevedad. </h3>
           
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

</body>
</html>