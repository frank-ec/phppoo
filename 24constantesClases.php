<?php
class Gato{
   const EDAD = 18;
   //PHP >5.3
   const PESO = <<<'EOT'
   20 Lorem Ipsum is simply dummy text of the
   printing and typesetting industry. Lorem 
   EOT;
   // PHP > 5.6 Expresiones constantes
    const UNO =1;
    const DOS = self::UNO +self::UNO;
    const TRES = self::UNO +self::DOS;
    const SUMA = "La vidas de los gatos son: ".self::TRES * 3;
   function edadGatuna(){
        return self::EDAD;      //self-uno mismo
    }
}
$benito = new Gato();

print "1. Edad max de gatos es ".Gato::EDAD."<br>";
print "2. Edad max de gatos es ".$benito->edadGatuna()."<br>";

//PHP > 5.30
$clase = "Gato";
print "3. Edad max de gatos es ".$clase::EDAD."<br>";
print "4. Peso max de gatos es ".$clase::PESO."<br>";
print $clase::SUMA."<br>";

?>
