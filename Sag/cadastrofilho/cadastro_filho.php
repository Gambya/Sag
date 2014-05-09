<?php include_once("../TConnect.class.php"); ?>
<div class="container">
  <fieldset>
    <!-- Form Name -->
    <legend>Cadastro de Filhos</legend>
  </fieldset>
  <form class="form-horizontal">
  <!-- Search input-->
  <?php
  // Select para ir buscar as escolaridades cadastradas no banco de dados
  $mae = new TConnect();
  $sqlMae = "select idgestante,nome from gestante";
  $mae->execQuery($sqlMae);
  ?>
  <!-- Select Basic -->
  <div class="control-group">
    <label class="col-md-2 control-label" for="mae">Mãe</label>
    <div class="col-md-10">
      <select id="mae" name="mae" class="form-control">
        <option>Nome da Mãe</option>
        <?php while($dado = $mae->resultSet()): ?>
          <option value="<?php echo $dado['idgestante']; ?>"><?php echo utf8_encode($dado['nome']); ?></option>
        <?php endwhile; ?>
      </select>
    </div>
  </div>

  <!-- Text input-->
  <div class="control-group">
    <label class="col-md-2 control-label" for="nomefilho">Nome do Filho</label>
    <div class="col-md-10">
      <input id="nomefilho" name="nomefilho" type="text" placeholder="nome completo" class="form-control" required="">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="control-group">
    <label class="col-md-2 control-label" for="nascfilho">Data de Nascimento</label>
    <div class="col-md-10">
      <input id="nascfilho" name="nascfilho" type="date" placeholder="00/00/0000" class="form-control">
    </div>
  </div>

  <!-- Textarea -->
  <div class="control-group">
    <label class="control-label" for="infoadicionais">Informações Adicionais</label>
    <div class="controls">                     
      <textarea id="infoadicionais" name="infoadicionais" rows="6" class="form-control"></textarea>
    </div>
  </div>

  <!-- Button -->
  <div class="control-group">
    <label class="control-label" for="cadastrafilho"></label>
    <div class="controls">
      <a href="#" id="cadastrafilho" class="btn btn-primary" onclick="cadFilho()">Cadastrar</a>
    </div>
  </div>
</div>
</form>