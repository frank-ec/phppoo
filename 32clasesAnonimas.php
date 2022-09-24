<?php //PHP > 7
$gato = new Class("Don Gato"){
    private $nombre;
    function __construct($nombre){
        $this->nombre = $nombre;
    }
    public function getNombre(){
        return "Soy un gato y mi nombre es " .$this->nombre."<br>";
    }
};

print $gato->getNombre();

?>