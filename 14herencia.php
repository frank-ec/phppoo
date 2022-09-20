<?php
/* El constructor es una funcion que se ejecuta cuando el objeto/instancia es creado
 recibe parametros iniciales, o para ejecutar acciones o metodos cuando el objeto
es construido

Heredar todos los metodos, propiedades en uan clase a otra clase
 
*/

class Gato{
    // Propiedades/variables de las instancias/objetos declaradas en la clase
    var $nombre;
    var $colorPelo;
    var $corbata = "SI";

    function __construct($nombre="", $pelo="Negro"){
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

class GatoVolador extends Gato {
}
$silvestre = new Gato("Silvestre","rosa");
$benito = new GatoVolador("Benito","azul");

print $silvestre->saludo()."<br>";
print $benito->saludo()."<br>";

unset($silvestre);
unset($benito);

print "El pariente de la clase Gato es ".get_parent_class("Gato")."<br>";
print "El pariente de la clase GatoVolador es ".get_parent_class("GatoVolador")."<br>";
print "<br>";
print is_subclass_of("Gato","GatoVolador")?"SI":"NO";
print "<br>";
print is_subclass_of("GatoVolador","Gato")?"SI":"NO";
print "<br>";




?>