<!DOCTYPE html>
<!--codificação da página--><html lang="pt-br">
<!--tipo de linguagem que será desenvolvidada a página-->
<head>
<!--Contém informações para sistemas de buscas, descrições do site e etc-->
<meta charset="utf-8">
<!--tipo de codificação referente a acentuações, principalmente-->
<title>Cadastro</title>
<!--Texto que será exibido na parte superior do navegador-->
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  </head>
  <body>
<?php
include_once("../TConnect.class.php");
$nome= $_POST['nome'];
$cpf= $_POST['cpf'];
$rg= $_POST['rg'];
$nasc= $_POST['nasc'];
$endereco= $_POST['endereco'];
$num= $_POST['numero'];
$complemento= $_POST['complemento'];
$cep= $_POST['cep'];
$cidade= $_POST['cidade'];
$bairro= $_POST['bairro'];
$uf= $_POST['uf'];
$telefone= $_POST['telefone'];
$escolaridade= $_POST['escolaridade'];
$estadociviel= $_POST['estadociviel'];
$religiao= $_POST['religiao'];
$getacao= $_POST['getacao'];
$sexobebe= $_POST['sexobebe'];
$nascbebe= $_POST['nascimento'];
$entradagrupo= $_POST['grupo'];
$prenatal= $_POST['prenatal'];
$pqengravidou= $_POST['pergunta'];
$saude= $_POST['saude'];
$conjuge= $_POST['conjuge'];
$cpfconjuge= $_POST['cpfconjuge'];
$obs= $_POST['obs'];
$enchoval= $_POST['enxoval'];

// Inserindo dados Gestante na tabela pessoa
$gestante = new TConnect();
$sql = "INSERT INTO gestante(nome,cpf,rg,nascimento,estcivil,religiao,inscricao,idgrauinstrucao)
VALUES(\"$nome\",\"$cpf\",\"$rg\",'$nasc',\"$estadociviel\",\"$religiao\",'$entradagrupo',$escolaridade)";
$gestante->execQuery($sql);
$idgestante = $gestante->getId();

// Inserindo conjugue
$conju = new TConnect();

$sqlConju = "INSERT INTO conjuge(con_nome,con_cpf,idgestante)
VALUES(\"$conjuge\",\"$cpfconjuge\",$idgestante)";
$conju->execQuery($sqlConju);

// Inserindo endereço
$end = new TConnect();
$sqlEnd = "INSERT INTO endereco(endereco,numero,complemento,cep,bairro,municipio,estado,idgestante)
VALUES(\"$endereco\",$num,\"$complemento\",\"$cep\",\"$bairro\",\"$cidade\",\"$uf\",$idgestante)";
$end->execQuery($sqlEnd);

// Inserindo Gestação
$gestacao = new TConnect();
$sqlGest = "insert into gestacao(mezgestacao,sexo,pnascimento,prenatal,saude,motgravidez,idgestante)
			values($getacao,\"$sexobebe\",'$nascbebe',\"$prenatal\",\"$saude\",\"$pqengravidou\",$idgestante)";
$gestacao->execQuery($sqlGest);

// Inserir Telefone
$fone = new TConnect();
$sqlTel = "insert into telefone(telefone,idgestante)values($telefone,$idgestante)";
$fone->execQuery($sqlTel);

// Inserir Observações
$observa = new TConnect();
$sqlObs = "insert into observacao(observacao,idgestante)values(\"$obs\",$idgestante)";
$observa->execQuery($sqlObs);


?>
</body>
</html>