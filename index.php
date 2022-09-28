<?php
require "clases/MySqldb.php";
require "clases/Albumes.php";
$albumes_obj = new Albumes();

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

</body>
</html>