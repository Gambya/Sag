<?php
include_once("../TConnect.class.php");
if(isset($_POST['presente'])){
	$idgestante = $_POST['presente'];
	$idevento	= $_POST['evento'];
	// Inserindo presenças na tabela presenca
	for ($i=0; $i < count($idgestante) ; $i++) { 
		// Tratando a variavel $presente
		if(!isset($idgestante[$i])){		
			$presente = 0;
		}else{
			$presente = 1;
		}
		try{
			$presenca = new TConnect();
			$sql = "insert into presencaevento(presente,idgestante,idevento)values($presente,".$idgestante[$i].",$idevento)";
			if($presenca->execQuery($sql)){
				echo "<p>Presenças enviadas a base de dados com sucesso!</p>";
			}
		}catch(Exception $e){
			echo $e->getMessage()."<br/>".$e->getCode()." - ".$e->getFile()." - ".$e->getLine();
		}
	}
}
?>