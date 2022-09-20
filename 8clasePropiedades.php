<?php
class Gato{
    // Propiedades/variables de las instancias/objetos declaradas en la clase
    var $nombre;
    var $colorPelo = "verde";
    var $corbata = "SI";

    function maullar(){
        return "miau miau";
    }
    function tieneCorbata(){
        return $this->nombre." ".$this->corbata." tiene corbata y su pelo es ".$this->colorPelo."<br>";
    }
}
echo "<h2>Creamos las instancias/objetos para la clase Gato </h2>";
$cucho = new Gato();
$cat = new Gato();

echo "<h2>Poblar las propiedades del la instancia/objeto para la clase Gato </h2>";
$cucho->nombre ="cucho";
$cucho->colorPelo ="Rosa";
$cucho->corbata ="NO";

echo "<h2>Retornamos propiedades y metodos del objeto cucho </h2>";
print $cucho->nombre." dice ".$cucho->maullar()."<br>";
print $cucho->tieneCorbata();
print $cat->tieneCorbata();


?>