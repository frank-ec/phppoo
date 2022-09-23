<?php
class Gato{
    public function ronronear(){
        return "Ronronear";
    }

    final function maullar(){
        return "Miau, miau";
    }
}
// No podemos sobrescrinir la funcion maullar porque es final
class GatoVolador extends Gato{
 /*   public function maullar(){
        return "Miauuuuu , Miauuuuuuu";
    } */
    public function ronronear(){
        return "Ron , ron , ron";
    }
}
$gatoVolador = new GatoVolador();
print "Maullar : ".$gatoVolador->maullar()."<br>";
print "Ronronear : ".$gatoVolador->ronronear()."<br>";

?>