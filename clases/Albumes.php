<?php
class Albumes{
    private $id;
    private $nombre;
    private $estampas;

    public function __construct(){}

    public function numAlbumes(){
        $data = array ();
        $db = new MySqldb();
        $data = $db->query("SELECT count(*) FROM albumes ");
        $db->close();
        unset($db);
        return $data[0];
    }
}



?>