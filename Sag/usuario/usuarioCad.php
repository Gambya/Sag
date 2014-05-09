<?php include_once("../TConnect.class.php"); ?>
<div class="container">
<fieldset>
<!-- Form Name -->
<legend>Cadastro de Usuários</legend>
</fieldset>
<form class="form-horizontal">
<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nome">Nome</label>
  <div class="controls">
    <input id="nome" name="nome" type="text" placeholder="Nome Completo" class="form-control" required="">
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="usuario">Usuário</label>
  <div class="controls">
    <input id="usuario" name="usuario" type="text" placeholder="" class="form-control" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label" for="senha">Senha</label>
  <div class="controls">
    <input id="senha" name="senha" type="password" placeholder="" class="form-control" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label" for="repetesenha">Repetir Senha</label>
  <div class="controls">
    <input id="repetesenha" name="repetesenha" type="password" placeholder="" class="form-control" required="">
    
  </div>
</div>

<?php
// Select para ir buscar as escolaridades cadastradas no banco de dados
$tipoUser = new TConnect();
$sqlTipo = "select * from tipouser";
$tipoUser->execQuery($sqlTipo);
?>
<!-- Select Basic -->
<div class="control-group">
  <label class="control-label" for="escolaridade">Tipo de Usuário</label>
  <div class="controls">
    <select id="tipouser" name="tipouser" class="form-control">
      <option>Selecione tipo</option>
      <?php while($dado = $tipoUser->resultSet()): ?>
        <option value="<?php echo $dado['idtipouser']; ?>"><?php echo utf8_encode($dado['tipouser']); ?></option>
      <?php endwhile; ?>
    </select>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="cadastra"></label>
  <div class="controls">
    <a id="cadUser" href="#" class="btn btn-primary" onclick="cadUser()">Cadastrar</a>
  </div>
</div>
</form>
</div>