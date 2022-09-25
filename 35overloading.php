<?php
class Gato{
    private $nombre;
    private $pelo;
    function __construct($nombre, $color){
        $this->nombre = $nombre;
        $this->pelo = $color;
    }

    public function __toString(){
        return "Mi nombre es ".$this->nombre."y mi pelo es " .$this->pelo."<br>" ;
    }

    public function __call($name, $argumentos){
        return $this->$name;
    }
}

$benito = new Gato("Benito","azul");
print $benito;
print $benito->nombre()."<br>";
print $benito->pelo()."<br>";


?>