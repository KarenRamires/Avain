<?php
include 'Usuario.php';
class Usuario extends Cliente {
    public $idUsuario;
    public $login;
    public $email;
    public $senha;
	const USUARIO = "<BR>UM OBJETO DA CLASSE 'USUARIO' FOI CONSTRUIDO<BR>";

	function __construct() {
       print self::USUARIO;
   }
    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }
    

    public function setLogin($login) {
        $this->login = $login;
    }
    

    public function setEmail($email) {
        $this->email= $email;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }
}
//$u=new Usuario();
//echo "<pre>";
//var_dump($u);
//echo "</pre>";
?>
