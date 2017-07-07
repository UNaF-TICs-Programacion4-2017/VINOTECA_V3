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
        <title>Ingresar | Vinoteca La Bodega S.A</title>
    </head>
<body>
<script type="text/javascript" src="js/script.js"></script>
<div class="container">
    <header style="border:none;">
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
        $('#Ingresar').addClass('active');
    });
    </script>
            
    <section class="content contacto">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Iniciar Sesion</h1>
                   
                </div>
            </div>
            <div class="row">
            <table border="0" align="center" valign="middle">
        <tr>
        <td rowspan=2>
        <div class="container">
        <div id="mensaje"></div>
      <form class="form-signin">
            <label for="inputUsuario" class="sr-only">Usuario</label>
            <input type="text" id="usuario" class="form-control" placeholder="Usuario ..." name="usuario">
            <label for="inputPassword" class="sr-only">Contraseña</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="pass">
            <center><button class="btn btn-lg btn-primary" type="button" name="btnLogin" id="ingresar">Ingresar</button></center><br>
            <center><strong>No estoy registrado deseo </strong><a href="registro.php" style="color:blue;font-size:blue;">REGISTRARME</a></center>
      </form>
           
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
<script>
$("#ingresar").click(function(){

   var usuario  =  $('#usuario').val();
   var password =  $('#inputPassword').val();
   
   if(usuario !='' && password !='' ){

        $.post( "validar.php",{ user: usuario , pass: password },function(data){
            
            if(data === "correcto"){
                window.location.href = "admin/dashboard.php"; 
            }
            if(data === "incorrecto"){
                $('#mensaje').html("<strong style='color:red;'>EL USUARIO O CONTROSEÑA SON INCORRECTOS</strong>");
            }
            
        });
   }else{
     $('#mensaje').html("<strong style='color:red;'>El usuario y password no puede ir vacio</strong>");

   }
})

</script>
</body>
</html>
