<?php
namespace miNamespace;
class miClase{
    function __construct (){
        print "Hola desde la funcion constructora";
    }
}

function miFuncion(){
    print "Hola desde la funcion <b> ";
}

const miConstante = "Hola";

// Dinamica
$a = "\miNamespace\miClase";
$clase = new $a;
$b = "\miNamespace\miFuncion";
$b();
print constant("\miNamespace\miConstante");


?>