<?php
class Usuario{
    private $id;
    private $correo;

    public function __construct(){}

    public function numUsuarios(){
        $data = array ();
        $db = new MySqldb();
        $data = $db->query("SELECT count(*) FROM usuarios ");
        $db->close();
        unset($db);
        return $data[0];
    }

    // Metodo estatico sin crear instancia
    public static function buscaUsuario($usuario){
        $db = new MySqldb();
        $sql = "SELECT *  FROM usuarios WHERE correo='".$usuario."' ";
        $data = $db->query($sql);
        $db->close();
        unset($db);
        return isset($data[0]) ? true : false;
    }



}



?>