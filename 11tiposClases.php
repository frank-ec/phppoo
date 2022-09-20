<?php
class Gato{};
class Perro{};

function regresaGato(): Gato{
    return new Gato;
}

var_dump(regresaGato());


?>