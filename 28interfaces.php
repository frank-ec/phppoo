<?php
// Proyectos grandes
interface iMamifero{
    public function andar();
    public function decir();

}

class Gato implements iMamifero{
    public function andar(){
        return "Camina";
    }
    public function decir(){
        return "Miau Miau";
    }
}

class Delfin implements iMamifero{
    public function andar(){
        return "Nada";
    }
    public function decir(){
        return "Glu glu";
    }
}

class Murcielago implements iMamifero{
    public function andar(){
        return "Vuela";
    }
    public function decir(){
        return "iii iii";
    }
}
// Instancias
$gato = new Gato();
$delfin = new Delfin();
$murcielago = new Murcielago();

print "El gato ".$gato->andar()." y dice :".$gato->decir()."<br>";
print "El delfin ".$delfin->andar()." y dice :".$delfin->decir()."<br>";
print "El murcielago ".$murcielago->andar()." y dice :".$murcielago->decir()."<br>";

?>