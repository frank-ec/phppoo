<?php
/* El constructor es una funcion que se ejecuta cuando el objeto/instancia es creado
 recibe parametros iniciales, o para ejecutar acciones o metodos cuando el objeto
es construido

Heredar todos los metodos, propiedades en una clase a otra clase

Encapsulamiento:
public por omision 
private solo dentro de la  clase
protected se usa solo dentro de la clase/funcion, pero permite usarse en las 
clases heredadas

Todas las funciones por omision son publicas
*/

class Gato{
    // Propiedades/variables de las instancias/objetos declaradas en la clase
    const EDAD =18;
    public static $claveSecreta ="12345";
    protected $nombre;
    private $colorPelo;
    private $corbata = "SI";

    public function __construct($nombre="", $pelo="Negro"){
        $this->nombre = $nombre;
        $this->colorPelo = $pelo;
    }

    function __destruct(){
       // print $this->nombre." Dice adios mundo cruel <br>";
    }

    // Setters y Getters (modifica - actualiza)
    function __set($name, $valor){
        $this->$name = $valor;
    }

    function __get($name){
        return $this->$name;
    }

    public static function mensajeSecreto(){
        return "Haz el bien, sin mirar a quien";
    }


    function setCorbata($c="SI"){
        if($c!="SI"){
            $corbata= "NO";
        }
        $this->corbata =$c;
    }
    function getCorbata(){
        return $this->corbata;
    }
    // Fin Setters y Getters

    function maullar(){
        // return "miau miau".$this->$claveSecreta; No funciona con propiedades estaticas
        // despedida(); da error
        //$this->despedida(); ok llamar
        // self::despedida(); ok llamar

        return "miau miau".self::$claveSecreta; //Llamar a una propiedad estatica
    }
    static function despedida(){
        print " Dice adios mundo cruel <br>";    
    }

    function tieneCorbata(){
        return $this->nombre." ".$this->corbata." tiene corbata y su pelo es ".$this->colorPelo."<br>";
    }
    function saludo(){
        $cadena = "Hola soy ".$this->nombre." y mi pelo es ";
        $cadena .= $this->colorPelo;
        return $cadena;
    }
}

class GatoVolador extends Gato{
    function nombreGatoVolador(){
        return $this->nombre;
    }
    function maullar(){
        print parent::maullar()."<br>"; // de la funcion padre - Nivel hacia arriba 
        return "grrr,  grrr y  grrr";
    }
}

$silvestre = new Gato("Silvestre","rosa");
$benito = new GatoVolador("Benito","azul");

print $silvestre->nombre." Maulla asi: ". $silvestre->maullar()."<br>";
print $benito->nombre." Maulla asi: ". $benito->maullar()."<br>";

print Gato::EDAD;


?>