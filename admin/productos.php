<?php
error_reporting(0);

session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	header('Location:../login.php');
}

include "../conexion.php";
$producto;
$stock;
$precio;
$descripcion;
$image;

if($_POST["producto"]!=""){
	$producto     = $_POST["producto"];
    $stock        = $_POST["stocks"];
    $precio       = $_POST["precios"];
    $descripcion  = $_POST["descripcios"];
    $image        = $_POST["images"];

    $sql = "INSERT INTO productos  VALUES (NULL, '$producto', '$stock', '$precio', '$image', '$descripcion');";
    $insertar = $conexion->query($sql);
    echo $insertar;
}

if($_POST['idproducto'] !=''){
	$idproducto = $_POST['idproducto'];
	$sql = "DELETE FROM productos WHERE idproductos = '$idproducto'";
    $insertar = $conexion->query($sql);
    if($insertar == 1){
    	echo "SE ELIMINO CORRECTAMENTE EL PRODUCTO ".$idproducto;
    }
}
?>