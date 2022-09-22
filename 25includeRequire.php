<?php           //Include si no existe continua - require si no existe se detiene
require_once ("clases/25Gato.php");
require_once ("clases/25GatoVolador.php");

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