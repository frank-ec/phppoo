<?php
namespace miNameSpace\miSubNameSpace;
function fopen($archivo){
    $f = \fopen($archivo);
    return $f;
}

class Exception extends \Exception{}
$e = new Exception("Hola"); // La clase del namespace
$e2 = new  \Exception("Hola, de nuevo"); // nos referimos a la clase global
const E_ERROR = 40;

print E_ERROR;
print \E_ERROR;

?>