<?php
class Gato{
    function maullar(){
        print "El gato dice miau";
    }
    function ronronear(){
        print "El gato ronronea";
    }
}

echo "<h2>Muestra todos metodos existentes de la clase Gato</h2>"; 
$metodos = get_class_methods("Gato");
foreach($metodos as $metodo){
    print $metodo."<br>";
}

echo "<h2>Muestra si existe el metodo volar en la clase Gato</h2>";
if(method_exists("Gato","volar")){
    print "Los gatos puden volar";
}else {
    print "Los gatos NO puden volar";
}

echo "<h2>Muestra si existe el metodo maullar en la clase Gato</h2>";
if(method_exists("Gato","maullar")){
    print "Los gatos puden maullar";
}else {
    print "Los gatos NO puden maullar";
}





?>