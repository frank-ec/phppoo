<?php
class Sesion{
    private $login = false;
    private $usuario;

    function __construct(){
        session_start();
        $this->verificaLogin();         //Llamar  a la función
        if($login){

        }else{

        }
    }
    // Función privada, crear verifica login
    private function verificaLogin(){
        if(isset($SESSION["usuario"])){
            $this->usuario = $_SESSION["usuario"];
            $this->login =true;
        }else{
            unset($this->usuario);
            $this->login =false;
        }
    }
    // Funcion publica de incio de login
    public function inicioLogin($usuario){
        if($usuario){
            $this->usuario = $_SESSION["usuario"] = $usuario;
            $this->login = true;
        }    
    }
    // Fin Login
    public function finLogin($usuario){
        if($usuario){
            unset($_SESSION["usuario"]);
            unset($this->usuario);
            $this->login = false;
        }    
    }
    // Estado del login
    public function estadoLogin(){
        return $this->login;
    }
    public function getUsuario(){
        return $this->usuario;
    }
    

}



?>