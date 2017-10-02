<?php
header("Content-Type: text/html; charset='utf-8'", true);
require("connection2.php");
$link=connect();
mysqli_set_charset($link,"utf8");

//pegando os valores preenchidos no formulário.
$login = $_POST['login'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//inserindo novo Usuario no banco.
$sql = 	"INSERT INTO tbl_usuario(
			nome_usuario,email,senha)
			VALUES('".$login."', '".$email."', '".$senha."')";
if(mysqli_query($link,$sql)){
	echo "Usuario cadastrado com sucesso";
}else{
	echo "Erro:".$sql."<br>".mysqli_error($link);
}

mysqli_close($link);
?>