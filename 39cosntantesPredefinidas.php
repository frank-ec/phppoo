<?php
interface Animal{
    function nacer();
    function crecer();
    function reproducir();
    function morir();
}

class Errores{
    public static function error($texto){
        $prefix = date('d-m-Y h:i:s :::');
        file_put_contents('log.txt', $prefix.$texto."\n", FILE_APPEND);
    }
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
    public function getHuevos(){
        if(!isset($this->huevos)){
            Errores::error(
            "Error, debes indicar la variable 'huevos'".
            ", error en el archivo: ".__FILE__.
            ", error la linea: ".__LINE__.
            ", error la clase: ".__CLASS__.
            ", error el metodo: ".__METHOD__.
            ", en el trazo: ".__TRAIT__.
            ", error en el espacio de nombres: ".__NAMESPACE__
        );
            throw new Exception("No existe la variable 'huevos'");
        }
         return $this->nuevos; //
    }
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

$tortuga = new Tortuga();
$tortuga->getHuevos();




?>

