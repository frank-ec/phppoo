<?php
class Gato{
}


echo "<h2>Si existe una clase</h2>";

if(class_exists("Gato")){
    echo "La clase Gatos si existe"."<br>";
}else{
    echo "La clase Gatos no existe"."<br>";
}


echo "<h2>Muestra las clases existentes / declaradas</h2>"; 

$clases = get_declared_classes();
foreach($clases as $clase){
    print $clase."<br>";
}


?>