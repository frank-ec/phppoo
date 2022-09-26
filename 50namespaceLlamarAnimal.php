<?php
namespace Animal\Perro;
include "50namespaceLlamarPerro.php";
const NOMBRE = "Perro";

function comer(){
    print "Estoy comiendo, perro"."<br>";
}

class Pasear{
static function paseo(){
    print "Estoy paseando, perro"."<br>";
}

}

// Nombre no cualificado
comer();
Pasear::paseo();
print NOMBRE."<br>";
print "<hr>";
// Nombre cualificado
salchicha\comer();
salchicha\Pasear::paseo();
print salchicha\NOMBRE."<br>";
print "<hr>";

// Nombre completamente cualificado
\Animal\Perro\salchicha\comer();
\Animal\Perro\salchicha\Pasear::paseo();
print \Animal\Perro\salchicha\NOMBRE."<br>";
?>