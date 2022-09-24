<?php
class Gato{
    public $bandera;
}
class Perro{
    public $bandera;
}
$gato1 = new Gato();
$gato2 = new Gato();
$gato3 = $gato1;
$perro1 = new Perro();

print "Comparamos elementos de la misma clase" ."</br>";
print "El gato 1 es == Gato 2 =>";
print ($gato1==$gato2)?"Verdadeero":"Falso"."</br>";
print "</br>";

print "El gato 1 es != Gato 2 =>";
print ($gato1!=$gato2)?"Verdadeero":"Falso"."<br>";
print "</br>";

print "El gato 1 es === Gato 2 =>";
print ($gato1===$gato2)?"Verdadeero":"Falso"."<br>";
print "<br>";

print "El gato 1 es !== Gato 2 =>";
print ($gato1!==$gato2)?"Verdadeero":"Falso"."<br>";
print "<hr>";

print "Comparamos elementos de la misma clase a la misma referencia" ."<br>";
print "El gato 1 es == Gato 3 =>";
print ($gato1==$gato3)?"Verdadeero":"Falso"."<br>";
print "<br>";

print "El gato 1 es != Gato 3 =>";
print ($gato1!=$gato3)?"Verdadeero":"Falso"."<br>";
print "br>";

print "El gato 1 es === Gato 3 =>";
print ($gato1===$gato3)?"Verdadeero":"Falso"."<br>";
print "<br>";

print "El gato 1 es !== Gato 3 =>";
print ($gato1!==$gato3)?"Verdadeero":"Falso"."<br>";
print "<hr>";

print "Comparamos elementos de diferente clase que tienen los mismos elementos" ."<br>";
print "El gato 1 es == Perro 1 =>";
print ($gato1==$perro1)?"Verdadeero":"Falso"."<br>";
print "<br>";

print "El gato 1 es != perro 1 =>";
print ($gato1!=$perro1)?"Verdadeero":"Falso"."<br>";
print "<br>";

print "El gato 1 es === perro 1 =>";
print ($gato1===$perro1)?"Verdadeero":"Falso"."<br>";
print "<br>";

print "El gato 1 es !== perro 1 =>";
print ($gato1!==$perro1)?"Verdadeero":"Falso"."<br>";

?>
