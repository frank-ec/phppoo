<?php
class Estampa{
    private $id;
    private $album;
    private $usuario;
    private $numero;
    private $estado;

    public function __construct(){}

    public function numEstampas(){
        $data = array ();
        $db = new MySqldb();
        $data = $db->query("SELECT count(*) FROM estampas ");
        $db->close();
        unset($db);
        return $data[0];
    }
}



?>