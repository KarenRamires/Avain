<?php
header("Content-Type: text/html; charset='utf-8'", true);
require("connection2.php");
$link=connect();
mysqli_set_charset($link,"utf8");

$sql = 	"UPDATE tbl_usuario 
		SET nome_usuario='".$login."',
		email='".$email."',
		senha='".$senha."'
		WHERE email='".$email."'";
if(mysqli_query($link,$sql)){
	echo "cliente alterado com sucesso";
}else{
	echo "Erro:".$sql."<br>".mysqli_error($link);
}
mysqli_close($link);
?>