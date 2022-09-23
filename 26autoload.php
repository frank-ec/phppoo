<?php           //Include si no existe continua - require si no existe se detiene
// Autoload para cargar las clases 25Gato.php y 25GatoVolador.php
spl_autoload_register(function($clase){
   require_once "clases/25".$clase.".php"; //Se agrega 25 por el numero de archivo
});

$silvestre = new Gato("Silvestre","rosa");
$benito = new GatoVolador("Benito","azul");

// Copia por favor
$a = 10;
$b = $a;

// Copiado por referencia
$panza = clone $silvestre;
$panza->setCorbata("SI");
$silvestre->setCorbata("NO");
print $panza->tieneCorbata()."<br>";
print $silvestre->tieneCorbata()."<br>";
$panza->setNombre("panza");
print $panza->tieneCorbata()."<br>";
print $silvestre->tieneCorbata()."<br>";




?>