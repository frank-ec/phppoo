<?php
class Gato{
    function maullar(){
        return "miau, miau";
    }
}
echo "<h2>Creamos las instancias para la clase Gato </h2>";
$cucho = new Gato();
$benito = new Gato();
$espanto = new Gato();

echo "<h2>Detectar la instancia / objeto de la clase Gato </h2>";
print "Espanto pertenece a la clase ".get_class($espanto)."<br>";

echo "<h2>Verificar que una instancia / objeto pertenece a la clase Gato </h2>";
print "El objeto/instancia cucho"."<br>";
if(is_a($cucho,"Gato")){
    print "Si es un objeto/instancia de la clase gato"."<br>";
}else {
    print "No es un objeto/instancia de la clase gato"."<br>";
}

echo "<h2>Verificar que una instancia / objeto pertenece a la clase Gato </h2>";
print "El objeto/instancia matute"."<br>";
if(is_a($matute,"Gato")){
    print "Si es un objeto/instancia de la clase gato"."<br>";
}else {
    print "No es un objeto/instancia de la clase gato"."<br>";
}

echo "<h2>Vamos a llamar a un metodo(accion-funcion) del objeto/instancia cucho </h2>";
print "El gato cucho dice ".$cucho->maullar()."<br>";
print "El gato benito dice ".$benito->maullar()."<br>";
print "El gato espanto dice ".$espanto->maullar()."<br>";
?>