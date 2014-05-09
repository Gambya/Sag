<?php
include_once("../TConnect.class.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootstrap 3, from LayoutIt!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<ul class="nav nav-pills">
				<li class="active">
					<a href="#"><font><font>Cadastro de Gestante</font></font></a>
				</li>
				<li>
					<a href="/peixot/cadastrofilho/cadast.php"><font><font>Cadastro de Filhos</font></font></a>
				</li>
				<li class="disabled">
					<a href="#"><font><font>Ata de Presença</font></font></a>
				</li>
				
			</ul>
		</div>
	</div>
</div>

<form method ="post" action="cadastro.php"class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Cadastro de Gestante</legend>

<!-- NOME-->
<div class="control-group">
  <label class="control-label" for="nome">Nome</label>
  <div class="controls">
    <input id="nome" name="nome" type="text" placeholder="Nome Completo" class="input-xxlarge" required="">
    
  </div>
</div>

<!-- CPF-->
<div class="control-group">
  <label class="control-label" for="cpf">CPF</label>
  <div class="controls">
    <input id="cpf" name="cpf" type="text" placeholder="00000000000" class="input-medium" required="">
    
  </div>
</div>

<!-- RG-->
<div class="control-group">
  <label class="control-label" for="rg">RG</label>
  <div class="controls">
    <input id="rg" name="rg" type="text" placeholder="" class="input-medium">
    
  </div>
</div>

<!-- DATA DE NASCIMENTO-->
<div class="control-group">
  <label class="control-label" for="nasc">Data de Nascimento</label>
  <div class="controls">
    <input id="nasc" name="nasc" type="date" placeholder="00/00/0000" class="input-medium">
    
  </div>
</div>


<!-- ENDEREÇO-->
<div class="control-group">
  <label class="control-label" for="endereço">Endereço</label>
  <div class="controls">
    <input id="endereço" name="endereço" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<!-- NUMERO-->
<div class="control-group">
  <label class="control-label" for="numero">Número</label>
  <div class="controls">
    <input id="numero" name="numero" type="text" placeholder="" class="input-mini">
    
  </div>
</div>

<!-- COMPLEMENTO-->
<div class="control-group">
  <label class="control-label" for="complemento">Complemento</label>
  <div class="controls">
    <input id="complemento" name="complemento" type="text" placeholder="" class="input-medium">
    
  </div>
</div>

<!-- CEP-->
<div class="control-group">
  <label class="control-label" for="cep">CEP</label>
  <div class="controls">
    <input id="cep" name="cep" type="text" placeholder="" class="input-medium">
    
  </div>
</div>
<!-- CIDADE-->
<div class="control-group">
  <label class="control-label" for="cidade">Cidade</label>
  <div class="controls">
    <input id="cidade" name="cidade" type="text" placeholder="" class="input-medium">
    
  </div>
</div>

<!-- BAIRRO-->
<div class="control-group">
  <label class="control-label" for="bairro">Bairro</label>
  <div class="controls">
    <input id="bairro" name="bairro" type="text" placeholder="" class="input-medium">
    
  </div>
</div>

<!-- ESTADO-->
<div class="control-group">
  <label class="control-label" for="uf">UF</label>
  <div class="controls">
    <input id="uf" name="uf" type="text" placeholder="" class="input-mini">
    
  </div>
</div>

<!-- TELEFONE-->
<div class="control-group">
  <label class="control-label" for="telefone">Telefone</label>
  <div class="controls">
    <input id="telefone" name="telefone" type="text" placeholder="00000000" class="input-small">
    
  </div>
</div>

<?php
// Select para ir buscar as escolaridades cadastradas no banco de dados
$escolaridade = new TConnect();
$sqlEscola = "select * from grauinstrucao";
$escolaridade->execQuery($sqlEscola);
?>
<!-- ESCOLARIDADE -->
<div class="control-group">
  <label class="control-label" for="escolaridade">Escolaridade</label>
  <div class="controls">
    <select id="escolaridade" name="escolaridade" class="input-medium">
      <option>Selecione sua Escolaridade</option>
      <?php while($dadoEscola = $escolaridade->resultSet()): ?>
        <option value="<?php echo $dadoEscola['idgrauinstrucao']; ?>"><?php echo utf8_encode($dadoEscola['grauinstrucao']); ?></option>
      <?php endwhile; ?>
    </select>
  </div>
</div>

<!-- ESTADO CIVIL -->
<div class="control-group">
  <label class="control-label" for="estadociviel">Estado civil</label>
  <div class="controls">
    <label class="radio inline" for="estadociviel-0">
      <input type="radio" name="estadociviel" id="estadociviel-0" value="Solteira" checked="checked">
      Solteira
    </label>
    <label class="radio inline" for="estadociviel-1">
      <input type="radio" name="estadociviel" id="estadociviel-1" value="Casada">
      Casada
    </label>
  </div>
</div>

<!-- RELIGIÃO -->
<div class="control-group">
  <label class="control-label" for="religião">Religião</label>
  <div class="controls">
    <input id="religiao" name="religiao" type="text" placeholder="Religião" class="input-small">
  </div>
</div>

<!-- MES DE GESTAÇÃO-->
<div class="control-group">
  <label class="control-label" for="getacao">Meses de Gestação</label>
  <div class="controls">
    <input id="getacao" name="getacao" type="text" placeholder="" class="input-mini">
  </div>
</div>

<!-- SEXO DO BEBE -->
<div class="control-group">
  <label class="control-label" for="sexobebe">Sexo do Bebê</label>
  <div class="controls">
    <label class="radio inline" for="sexobebe-0">
      <input type="radio" name="sexobebe" id="sexobebe-0" value="M" checked="checked">
      M
    </label>
    <label class="radio inline" for="sexobebe-1">
      <input type="radio" name="sexobebe" id="sexobebe-1" value="F">
      F
    </label>
  </div>
</div>

<!-- NASCIMENTO DO BEBE-->
<div class="control-group">
  <label class="control-label" for="nascimento">Provável Data de Nascimento</label>
  <div class="controls">
    <input id="nascimento" name="nascimento" type="date" placeholder="00/00/0000" class="input-medium">
  </div>
</div>

<!-- ENTRADA NO GRUPO-->
<div class="control-group">
  <label class="control-label" for="grupo">Data de Entrada no Grupo</label>
  <div class="controls">
    <input id="grupo" name="grupo" type="date" placeholder="00/00/0000" class="input-medium">
    
  </div>
</div>

<!-- PRENATAL -->
<div class="control-group">
  <label class="control-label" for="prenatal">Pré-Natal</label>
  <div class="controls">                     
    <textarea id="prenatal" name="prenatal"></textarea>
  </div>
</div>

<!-- PQ ENGRAVIDOU -->
<div class="control-group">
  <label class="control-label" for="pergunta">Por que engravidou?</label>
  <div class="controls">                     
    <textarea id="pergunta" name="pergunta"></textarea>
  </div>
</div>
<!-- SAUDE -->
<div class="control-group">
  <label class="control-label" for="saude">Problemas de Saúde</label>
  <div class="controls">                     
    <textarea id="saude" name="saude"></textarea>
  </div>
</div>

<!-- CONJUGE-->
<div class="control-group">
  <label class="control-label" for="conjuge">Nome do Cônjuge</label>
  <div class="controls">
    <input id="conjuge" name="conjuge" type="text" placeholder="nome completo" class="input-xxlarge">
    
  </div>
</div>

<!-- CPF CONJUGE-->
<div class="control-group">
  <label class="control-label" for="cpfconjuge">CPF do Cônjuge</label>
  <div class="controls">
    <input id="cpfconjuge" name="cpfconjuge" type="text" placeholder="00000000000" class="input-medium">
    
  </div>
</div>


<!-- OBSERVAÇÃO -->
<div class="control-group">
  <label class="control-label" for="obs">Observações</label>
  <div class="controls">                     
    <textarea id="obs" name="obs"></textarea>
  </div>
</div>

<!-- ENXOVAL -->
<div class="control-group">
  <label class="control-label" for="enxoval">Recebeu o Enxoval?</label>
  <div class="controls">
    <label class="radio inline" for="enxoval-0">
      <input type="radio" name="enxoval" id="enxoval-0" value="Sim" checked="checked">
      Sim
    </label>
    <label class="radio inline" for="enxoval-1">
      <input type="radio" name="enxoval" id="enxoval-1" value="Não">
      Não
    </label>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="cadastrar"></label>
  <div class="controls">
    <button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
  </div>
</div>
</fieldset>
</form>

</body>
</html>
