<?php
/* El constructor es una funcion que se ejecuta cuando el objeto/instancia es creado
 recibe parametros iniciales, o para ejecutar acciones o metodos cuando el objeto
es construido

Heredar todos los metodos, propiedades en una clase a otra clase

Encapsulamiento:
public por omision 
private solo dentro de la  clase
protected se usa solo dentro de la clase/funcion, pero permite usarse en las 
clases heredadas

Todas las funciones por omision son publicas

*/

class Gato{
    // Propiedades/variables de las instancias/objetos declaradas en la clase
    protected $nombre;
    private $colorPelo;
    private $corbata = "SI";

    public function __construct($nombre="", $pelo="Negro"){
        $this->nombre = $nombre;
        $this->colorPelo = $pelo;
    }

    function __destruct(){
        print $this->nombre." Dice adios mundo cruel <br>";
    }

    function maullar(){
        return "miau miau";
    }
    function tieneCorbata(){
        return $this->nombre." ".$this->corbata." tiene corbata y su pelo es ".$this->colorPelo."<br>";
    }
    function saludo(){
        $cadena = "Hola soy ".$this->nombre." y mi pelo es ";
        $cadena .= $this->colorPelo;
        return $cadena;
    }
}

class GatoVolador extends Gato{
    function nombreGatoVolador(){
        return $this->nombre;
    }
}
$silvestre = new Gato("Silvestre","rosa");
$benito = new GatoVolador("Benito","azul");

print $silvestre->saludo()."<br>";
print $benito->saludo()."<br>";

print "El nombre del GatoVolador es ".$benito->nombreGatoVolador()."<br>";





?>