<?php
interface Animal{
    function nacer();
    function crecer();
    function reproducir();
    function morir();
}
// Clases abstractas
abstract class Vertebrado implements Animal{
    private $huesos;
    public function getHuesos(){ return $this->huesos; }
    public function nacer(){}
    public function crecer(){}
    public function reproducir(){}
    public function morir(){}
}

abstract class Invertebrado implements Animal{
    use Oviparo;
    private $hemocianina;
    public function getHemocianina(){ return $this->hemocianina; }
    public function nacer(){}
    public function crecer(){}
    public function reproducir(){}
    public function morir(){}
}

trait Oviparo{
    private $huevos;
    public function getHuevos(){ return $this->huevos;}
}

class Molusco extends Invertebrado{
    private $radula;
    public function getRadula(){ return $this->radula; }
}
class Reptil extends Vertebrado{
    use Oviparo;
    private $escamas;
    public function getEscamas(){ return $this->escamas; }
}

class Tortuga extends Reptil{}
class Pulpo extends Molusco{}

print "<pre>";
$tortuga = new Tortuga();
var_dump(get_class_methods($tortuga));
print "<br>";
var_dump(get_class_methods(new Pulpo));
print "<br>";
var_dump(get_class_methods("Animal"));
print "<br>";
    if(method_exists($tortuga,"volar")){
        print "Si existe el metodo nacer en las tortugas";
    }else{
        print "No existe el metodo volar en las tortugas";
    }
print "</pre>";


?>

