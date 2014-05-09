<?php
include_once("../TConnect.class.php");

$nome		= $_POST['nome'];
$usuario	= $_POST['usuario'];
$senha		= $_POST['senha'];
$repetesenha= $_POST['repetesenha'];
$tipouser 	= $_POST['tipouser']; 



if($senha != $repetesenha){
	echo '<p>Senha não confere, favor verificar campo senha e confirma senha.</p>';
}else{
	$user = new TConnect();
	$sql = "INSERT INTO usuario(nome,usuario,senha,idtipouser)
			VALUES(\"$nome\",\"$usuario\",\"$senha\",$tipouser)";
	$user->execQuery($sql);
	echo "Cadastro efetuado com sucesso!";
}
?>
