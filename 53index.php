<?php
require "53use.php";
//use Animales\Mamiferos as mascota;
// Agrupaciones PHP > 7
use Animales\Mamiferos\{Perro as MiPerro, Gato};
use function Animales\Mamiferos\{ladrar as ladrido, maullar};
use const Animales\Mamiferos\{PERRO as DOG, GATO as CAT};

print "Clases del espacio de nombres<br>";
$perro = new  MiPerro;
$gato =  new  Gato;
print "<hr>";
print "Clases del espacio de nombres<br>";
ladrido();
maullar();

print "<hr>";
print "Clases del espacio de nombres<br>";
print  DOG."<br>";
print  CAT."<br>";

?>