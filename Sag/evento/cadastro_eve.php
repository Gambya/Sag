<?php
include_once("../TConnect.class.php");

$evento = $_POST['evento'];
$data 	= $_POST['data'];
$hora	= $_POST['hora'];

try{
	$eve = new TConnect();
	$sql = "insert into evento(evento,data,hora)values('$evento','$data','$hora')";
	if($eve->execQuery($sql)){
		echo "<p>Cadastro efetuado com sucesso!</p>";
	}
} catch(Exception $e){
	echo "Mensagem: ".$e-getMessage()."<br/>Código:".$e->getCode()." - Arquivo:".$e->getFile()." - Linha:".$e->getLine();
}
?>