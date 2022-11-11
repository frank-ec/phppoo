<?php
class Book{
    var $puntoVenta;
    var $nuevo = "SI";

    // Metodo magico
    public function __construct(
        private string $title,
        private string $autor,
        private float $price,
        private int $stock,
        private int $id,
    ){

    }
    public function getInfo(){
        $info = "<b> $this->title </b><br>";
        $info .= "<i>Escrito por : $this->autor </i><br>";
        $info .= "Precio $: {$this->price}<br>";
        $info .= "<b>Código - Id. : {$this->id}</b><br>";
        // Valida stock
        if($this->stock > 0){
            $info .= "Unidades disponibles : <span style = 'color:green'> {$this->stock} </span><hr>";
        }else{
            $info .= "<span style = 'color:red'> No disponible</span><hr>";
        }
        return $info;
    }

    public function abrirLibro(){
        return 'Ojear el libro y mostrar el prólogo';
    }

    function mostrarPropiedades(){
        return 'Disponible en : '.$this->puntoVenta."<br>". 'Se vende usado ? : '.$this->nuevo ;
    }

}
// Instancia de la clase Book pasando las propiedades
$book1 = new Book(
    'Confieso que he vivido',
    'Pablo Neruda',
    15.00,
    2,
    1
);

$book2 = new Book(
    'Don Quijote de la Mancha',
    'Miguel de Cervates',
    50.00,
    3,
    1
);

$book3 = new Book(
    'Fausto',
    'Goethe',
    10.00,
    4,
    1
);

// Objeto de la clase Book, llenando propiedades definidas fuera de las funciones
$book3->puntoVenta = "Matriz Principal";
$book3->nuevo = "sI ..";

print $book3->getInfo();
print $book3->mostrarPropiedades()."<br>";
print 'Ahora vamos a <b>'.$book3->abrirLibro().'</b><hr>' ;



echo '<h3> Quieres saber si la clase Book existe ? </h3>';

if (class_exists('Book')){
    print 'Pues si, la clase si existe';
}else{
    print 'la clase no existe';
}

echo '<h3> Te muestro que instancias tengo: </h3>';
echo 'Sabes tengo una instancia llamada Book1 que pertenece a la clase:'. get_class($book1).'<br>';
echo 'Sabes tengo una instancia llamada Book2 que pertenece a la clase:'. get_class($book2).'<Br>';
echo 'Sabes tengo una instancia llamada Book3 que pertenece a la clase:'. get_class($book3).'<hr>';

echo '<h3> Quieres saber que objeto o instancia pertenece a una clase ?: </h3>';
if (is_a ($book3,'Book')){
    print 'Book 3 es un obejto o instancia de Book';
}else{
    print 'el Objeto no existe';
}


echo '<h3> Soy la clase Book Te muestro que metodos tengo ? </h3>';
$metodosDeLaClase = get_class_methods('Book');
        foreach($metodosDeLaClase as $metodo ){
        print $metodo.'<br>';
    }

echo '<hr>';


echo '<h3> Asi llamamos a un metodo de la clase Book </h3>';

print 'Recuerda un metodo es una accion, entonces vamos a <b>'.$book1->abrirLibro().'</b><br>';



?>