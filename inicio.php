<?php
require "clases/MySqldb.php";
require "clases/Albumes.php";
require "clases/Usuario.php";
require "clases/Estampa.php";
$albumes_obj = new Albumes();
$usuarios_obj = new Usuario();
$estampas_obj = new Estampa();
$correo = "pedro@hotmail.com";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice</title>
</head>
<body>
    <h1>Tenemos <?php print $albumes_obj->numAlbumes();?> álbumes en el sistema </h1>
    <h1>Tenemos <?php print $usuarios_obj->numUsuarios();?> Usuarios en el sistema </h1>
    <h1>Tenemos <?php print $estampas_obj->numEstampas();?> estampas en el sistema </h1>
    <?php
    print "<p> El usuario '".$correo."' ";
    print (Usuario::buscaUsuario($correo))? "SI " : "NO ";
    print "existe en la base de datos </p>";
    ?>

</body>
</html>