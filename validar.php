<?php
if($_POST["user"]!=""&&$_POST["pass"]!=""){
        include "./conexion.php";
        $usuario   = $_POST['user'];
        $password  = $_POST['pass'];
        $user_id = "";
        $sql = "SELECT * FROM usuarios WHERE usuario ='$usuario' AND password = '$password'";    
        $query = $conexion->query($sql);
        //recorremos y buscamos al usuario en la tabla login que armo el CAPO DAVID
        while ($r=$query->fetch_array()) {
			$user_id = $r["idusuarios"];
			break;
		}
        if($user_id==null){
				echo "incorrecto";
		}else{
            session_start();
			$_SESSION["user_id"]=$user_id;
			echo "correcto";
            //header('Location:principal.php');
		}
    }
?>