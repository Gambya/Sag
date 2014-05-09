<?php
session_start();
include_once("TConnect.class.php");
$usuario= $_POST['usuario'];
$senha= $_POST['senha'];



$user = new TConnect();
$sql = "select usuario, senha from usuario where usuario = \"$usuario\" and senha = \"$senha\" limit 1";
$user->execQuery($sql);
$dadosUser = $user->resultSet();
$row = $user->contaLinha($sql);
if($row >0){
	$_SESSION['ativado'] = 1;
	echo "<center>você foi autenticando com sucesso! aguarde um instante</center>";
	header('Location:main.php');
}else{
	echo"<center>Nome de usuario ou senha incorrretos, tente novamente.</center>";
	header('location:index.php');
}

?>