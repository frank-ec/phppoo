<?php
class Gato{
    public $peso = 10;
    private $genero = "M";
    protected $edad = 0;

function iteracion(){
    print "Vamos a iterar dentro de la clase Gato <br>";
    foreach($this as $clave => $valor){
        print $clave." -> ".$valor."<br>";
        }
    }
}

$gato = new Gato();
$gato->iteracion();

print "<hr>";
print "Vamos a iterar fuera de la clase Gato, muestra solo propiedades publicas <br>";
foreach($gato as $clave => $valor){
    print $clave." -> ".$valor."<br>";
    }

?>