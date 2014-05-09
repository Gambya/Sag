<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SAG v.0.0.1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
	<!--/ Carregamento de Scripts -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="js/main.js"></script>  

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
</head>

<body>
<div id="header" class="container">
  <div class="col-md-3">
    <img src="img/peixotinho.png" alt="Logomarca Peixotinho" width="50%" height="50%">
  </div>
  <div class="col-md-9"></div>
</div>
<div id="wrapper" class="container">
  <nav id="nav" class="navbar navbar-default" role="navigation">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Gestante <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a id="lgestante" href="#">Listar Gestante</a></li>
            <li><a id="cgestante" href="#">Cadastro Gestante</a></li>
            <li><a href="#">Editar Gestante</a></li>
            <li class="divider"></li>
            <li><a id="cfilho" href="#">Cadastro Filho</a></li>
            <li><a href="#">Editar Filho</a></li>
            <li class="divider"></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a id="cevento" href="#">Cadastro Evento</a></li>
            <li><a href="#">Editar Evento</a></li>
            <li class="divider"></li>
            <li><a id="lpresenca" href="#">Lista de Presença</a></li>
            <li><a id="rpresenca" href="#">Relação de Presenças</a></li>
            <li class="divider"></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a id="cuser" href="#">Cadastro Usuário</a></li>
            <li><a href="#">Editar Usuário</a></li>
            <li class="divider"></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Relatórios <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Relação de Presenças</a></li>
            <li class="divider"></li>
          </ul>
        </li>
      </ul>
      <ul id="isearch" class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pesquisar">
          </div>
          <button type="submit" class="btn btn-default">Pesquisar</button>
        </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav><!-- /Barra Navegação -->
</div><!-- /container -->
<div id="conteudo" class="conteudo">
</div><!-- /Conteudo -->
</body>
</html>