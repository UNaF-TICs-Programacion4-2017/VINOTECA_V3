<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	header('Location:../login.php');
}

include "../conexion.php";



?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin la bodega</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="black" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    LA BODEGA
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="user.html">
                        <i class="ti-shopping-cart"></i>
                        <p>Productos</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Consultas</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Productos</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
						<li>
                            <a href="salir.php">
								<i class="ti-power-off"></i>
								<p>SALIR</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Usuario</h4>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                            
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="http://enadcity.org/enadcity/wp-content/uploads/2017/02/profile-pictures.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        Admin
                                                        <br />
                                                        <span class="text-success"><small>Administrador</small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa ti-power-off"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7" >
                        <div class="card" id="listadoBicicleta">
                            <div class="header">
                                <h4 class="title">Vinos</h4>
                                <p class="category">Vinos en punto de ventas</p>
                            </div>
                            <div class="header">
                                 Filtrar <input type="text" placeholder="Nombre de vino..."/>
                                 <span>Categoria</span>
                                    <select>
                                        <?php
											//david aca traigo LAS CATEGORIAS
											$categorias = "SELECT * FROM `categorias`";    
											$query = $conexion->query($categorias);

											
											while($r=$query->fetch_array()){
												echo "<option>".$r["categorias"]."</option>";
											}
										?>
                                    </select>
                            </div>
                            <div class="content table-responsive table-full-width">
                             <div id="mensajeEkminar">
                                 <CENTER><input type="button" onclick="actualizar()" value="ACTUALIZAR LISTA" /></CENTER>
                             </div> 
                                <table class="table table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Vinos</th>
                                    	<th>Precio</th>
                                    	<th>Stock</th>
                                    	<th>Eliminar</th>
                                    </thead>
                                    <tbody>
										<?php
											//david aca traigo los registros de los vinos cargados en la BD
											$sql = "SELECT * FROM productos ORDER BY idproductos DESC";    
											$query = $conexion->query($sql);

											
											while($r=$query->fetch_array()){
												echo "<tr>";
													echo "<td>".$r["idproductos"]."</td>";
													echo "<td>".$r["producto"]."</td>";
													echo "<td>".$r["precio"]."</td>";
													echo "<td>".$r["stock"]."</td>";
													echo "<td>";
                                                    echo "<a style='cursor:pointer' onclick='eliminarProducto(".$r["idproductos"].")'>X</a>";
                                                    echo "</td>";
												echo "<tr>";
											}
										?>
                                        
                                       
                                    </tbody>
                                </table>

                            </div>
                       </div>     
                     <div id="AltaProducto">  
                     <div id="mensajeAlta"></div>     
                     <h3>NUEVO PRODUCTO</h3>       
                    <div class="form-group">
                    
                        <label for="usr">Producto:</label>
                            <input type="text"  id="producto" value="">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Stock:</label>
                            <input type=number"  id="stock" value="">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Precio:</label>
                            <input type="text"  id="precio" value="">
                        </div>  
                        <div class="form-group">
                            <label for="pwd">Image:</label>
                            <input type="text"  id="image" placeholder="Url del producto" value="">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Descripcion:</label>
                            <textarea id="descripcion" value=""></textarea>
                        </div>
                    </div>
                    </div>
						<center><button type="button" class="btn btn-default" id="nuevoAltaProducto">NUEVO PRODUCTO</button></center>
                </div>
                <!--zona alta de producto-->
                <div class="col-lg-8 col-md-7" id="nuevaProducto">

                </div>
                <!--fin zona alta de producto-->
            </div>
        </div>

    </div>
</div>
</body>
    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>
	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>
    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>
	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
    <script>
     $('#AltaProducto').hide();

    $("#nuevoAltaProducto").click(function(){

        var productos = $("#producto").val();
        var stock = $("#stock").val();
        var precio = $("#precio").val();
        var descripcion = $("#descripcion").val();
        var image = $("#image").val();

        if(productos !=''){

            $.post("productos.php",{producto: productos, stocks: stock,precios:precio,descripcios:descripcion,images:image},function(data){
            //alert(data);

            if(data == 1){

                $("#mensajeAlta").html("<strong style='color:green;'>EL PRODUCTO SE GUARDO CORRECTAMENTE <input type='button' value='ACTUALIZAR' onclick='actualizar();'/></strong>");
            }else{
                $("#mensajeAlta").html("<strong style='color:red;'>ERROR CON EL PRODUCTO</strong>");
            }
            });

        }
        
    })


    $('#nuevoAltaProducto').click(function(){
         $('#AltaProducto').show();
        $('#listadoBicicleta').hide();
        $('#AltaProducto').show();
    })

    function actualizar(){

        location.reload();
    }

    function eliminarProducto(id){

        if(id !=''){
            $.post("productos.php",{idproducto: id},function(data){

                alert(data);
            
            });
        }   
    }
    </script>
</html>
