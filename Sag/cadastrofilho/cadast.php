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
				<li>
					<a href="/peixot/cadastro/teste.php"><font><font>Cadastro de Gestante</font></font></a>
				</li>
				<li class="active">
					<a href="/peixot/cadastrofilho/cadast.php"><font><font>Cadastro de Filhos</font></font></a>
				</li>
				<li class="disabled">
					<a href="#"><font><font>Ata de Presença</font></font></a>
				</li>
				
			</ul>
		</div>
	</div>
</div>

<form method ="post" action="cadastrafilho.php"class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Cadastro de Filhos</legend>

<!-- Search input-->
<?php
// Select para ir buscar as escolaridades cadastradas no banco de dados
$mae = new TConnect();
$sqlMae = "select idgestante,nome from gestante";
$mae->execQuery($sqlMae);
?>
<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="mae">Mãe</label>
  <div class="controls">
    <select id="mae" name="mae" class="input-xxlarge">
      <option>Nome da Mãe</option>
      <?php while($dado = $mae->resultSet()): ?>
        <option value="<?php echo $dado['idgestante']; ?>"><?php echo utf8_encode($dado['nome']); ?></option>
      <?php endwhile; ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nomefilho">Nome do Filho</label>
  <div class="controls">
    <input id="nomefilho" name="nomefilho" type="text" placeholder="nome completo" class="input-xxlarge" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nascfilho">Data de Nascimento</label>
  <div class="controls">
    <input id="nascfilho" name="nascfilho" type="date" placeholder="00/00/0000" class="input-xxlarge">
    
  </div>
</div>

<!-- Textarea -->
<div class="control-group">
  <label class="control-label" for="infoadicionais">Informações Adicionais</label>
  <div class="controls">                     
    <textarea id="infoadicionais" name="infoadicionais"></textarea>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="cadastrafilho"></label>
  <div class="controls">
    <button id="cadastrafilho" name="cadastrafilho" class="btn btn-primary">Cadastrar</button>
  </div>
</div>

</fieldset>
</form>

</body>
</html>
