<?php
include_once("../TConnect.class.php");

$mae	= $_POST['mae'];
$nome 	= $_POST['nomefilho'];
$nasc 	= $_POST['nascfilho'];
$info 	= $_POST['infoadicionais'];

// Inserindo dados na tabela filho
$filhos = new TConnect();
$sqlFilho = "insert into filho(nome,nascimento,info,idgestante)values(\"$nome\",'$nasc',\"$info\",$mae)";
if($filhos->execQuery($sqlFilho)){
	echo "<p>Cadastro efetuado com sucesso!</p>";
}
?>