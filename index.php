<?php
require_once("clases/Sesion.php");
$sesion = new Sesion();
if($sesion->estadoLogin){
    header("location:inicio.php");
}else{
    header("location:login.php");
}

?>