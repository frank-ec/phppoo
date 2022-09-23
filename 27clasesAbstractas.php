<?php   //Proyectos grandes
abstract class Mamifero{
    // Metodo Abstracto
    abstract public function saludo();
    //Metodo no abstracto
    public function maullar(){
        return "Miau, miau ";
    }
}
// Nos  epuede instanciar una clase abtracta $pepe = new Mamifero();
// Heredamos de la clase abstracta 
class Gato extends Mamifero{
    public function saludo(){
        return "Hola mundo desde la herencia";
    }
}

$demostenes = New Gato();
print "Saludo ". $demostenes->saludo()."<br>";
print "Maullar ". $demostenes->maullar()."<br>";


?>