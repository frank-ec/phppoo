<?php
class GatoVolador extends Gato{
    function nombreGatoVolador(){
        return $this->nombre;
    }
    function maullar(){
        print parent::maullar()."<br>"; // de la funcion padre - Nivel hacia arriba 
        return "grrr,  grrr y  grrr";
    }
}


?>