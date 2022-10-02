<?php 
class MySqldb{
    private $host = "localhost";
	private $usuario = "root"; 
	private $clave = "";
	private $db = "albumes";
	private $conn;

    public function __construct(){
        $this->conn = mysqli_connect(
            $this->host,
            $this->usuario,
            $this->clave,
            $this->db);
        if(mysqli_connect_error()){
            printf("Error al conectar a la base de datos %d",mysqli_connect_error()); 
            exit;
        }else{
            // print "Conexion exitosa";
        }
    }

    public function query($q){
        $data = array();
        if($q!=""){
            if($r= mysqli_query($this->conn, $q)){
                $data = mysqli_fetch_row($r);
            }
        }
        return $data;
    }

        public function querySlect($q){
        $data = array();
        if($q!=""){
            if($r= mysqli_query($this->conn, $q)){
                $data = mysqli_fetch_array($r);
            }
        }
        return $data;
    }

    public function close(){
        mysqli_close($this->conn);
        // print "Cierre exitoso de la base de datos ";
    }

    
}

?>