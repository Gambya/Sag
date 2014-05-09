<?php
include_once("../TConnect.class.php");
?>
<div class="container">
  <fieldset>
  <!-- Form Name -->
    <legend>Cadastro de Evento</legend>
  </fieldset>

  <form class="form-horizontal">
  <!-- NOME-->
  <div class="control-group">
    <label class="control-label" for="nome">Evento</label>
    <div class="controls">
      <input id="evento" name="evento" type="text" placeholder="Nome do Evento" class="form-control" required=""> 
    </div>
  </div>

  <!-- CPF-->
  <div class="control-group">
    <label class="control-label" for="cpf">Data</label>
    <div class="controls">
      <input id="data" name="data" type="date" placeholder="00/00/0000" class="form-control" required="">
    </div>
  </div>

  <!-- RG-->
  <div class="control-group">
    <label class="control-label" for="rg">Hora</label>
    <div class="controls">
      <input id="hora" name="hora" type="time" placeholder="" class="form-control">
    </div>
  </div>

  <!-- Button -->
  <div class="control-group">
    <label class="control-label" for="cadastrar"></label>
    <div class="controls">
      <a href="#" id="cadEve" class="btn btn-primary" onclick="cadEvento()">Cadastrar</a>
    </div>
  </div>
  </form>
</div>