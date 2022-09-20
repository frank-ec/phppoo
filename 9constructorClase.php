<?php
/* El constructor es una funcion que se ejecuta cuando el objeto/instancia es creado
 recibe parametros iniciales, o para ejecutar acciones o metodos cuando el objeto
es construido*/

class Gato{
    // Propiedades/variables de las instancias/objetos declaradas en la clase
    var $nombre;
    var $colorPelo;
    var $corbata = "SI";

    function __construct($nombre="", $pelo="Negro"){
        $this->nombre = $nombre;
        $this->colorPelo = $pelo;
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
echo "<h2>Creamos las instancias/objetos para la clase Gato </h2>";
$cucho = new Gato("Cucho", "Rosa");

echo "<h2>Retornamos propiedades y metodos del objeto cucho </h2>";
print $cucho->nombre." dice ".$cucho->maullar()."<br>";
print $cucho->tieneCorbata();
print $cucho->saludo();

?>