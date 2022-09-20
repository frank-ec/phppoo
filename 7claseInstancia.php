<?php
class Gato{
    function maullar(){
        return "miau, miau";
    }
}
echo "<h2>Creamos las instancias/objetos para la clase Gato </h2>";
$cucho = new Gato();
$benito = new Gato();
$espanto = new Gato();

echo "<h2>Detectar a que clase pertenece una instancia/objeto</h2>";
    print "Espanto pertenece a la clase <br>".get_class($espanto)."<br>";

echo "<hr>"; 

echo "<h2>Verificar que una instancia/objeto pertenece a una clase</h2>";

print "El objeto/instancia matute"."<br>";
if(is_a($matute,"Gato")){
    print "Si es un objeto/instancia de la clase Gato"."<br>";
}else {
    print "No es un objeto/instancia de la clase Gato"."<br>";
}

echo "<hr>"; 

echo "<h2>Vamos a llamar a un metodo(accion-funcion) de los objetos/instancias </h2>";
print "El gato cucho dice ".$cucho->maullar()."<br>";
print "El gato benito dice ".$benito->maullar()."<br>";
print "El gato espanto dice ".$espanto->maullar()."<br>";
?>