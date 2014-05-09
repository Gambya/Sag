<?php
include_once("../TConnect.class.php");
// Selecionando Evento
$eve = new TConnect();
$sql = "select * from evento where data = '".date("Y-m-d")."'";
$eve->execQuery($sql);
?>
<div class="container">
<?php while($dadoEve = $eve->resultSet()):  ?>
<fieldset>
<?php
// Tratando data para apresentação
$data = explode("-",$dadoEve['data']);
$data = $data[2]."/".$data[1]."/".$data[0];
?>
<!-- Form Name -->
<legend><?php echo $dadoEve['evento']; ?> - Data: <?php echo $data; ?> - Hora: <?php echo $dadoEve['hora']; ?> - Lista de Presença</legend>
</fieldset>
<form class="form-horizontal">
  <input type="hidden" name="evento" value="<?php echo $dadoEve['idevento']; ?>">
  <table class="table table-striped">
    <tr>
      <th>Gestantes Presentes</th>
      <th>CPF</th>
      <th>Data</th>
      <th>Presença</th>
    </tr>
    <?php 
    // Selecionando Gestantes
    $gestante = new TConnect();
    $sql = "select idgestante,nome,cpf from gestante";
    $gestante->execQuery($sql);
    while($dado = $gestante->resultSet()):  ?>
    <tr>
      <td><?php echo $dado['nome']; ?></td>
      <td><?php echo $dado['cpf']; ?></td>
      <td><?php echo date("d/m/Y"); ?></td>
      <td><center>
      <input type="checkbox" name="presente[]" value="<?php echo $dado['idgestante']; ?>" />
    </center></td>
    </tr>
    <?php
    endwhile;
    ?>
  </table>
  <div class="control-group">
    <label class="control-label" for="cadastrar"></label>
    <div class="controls">
      <a href="#" id="envPresenca" class="btn btn-success" onclick="envPresenca()">enviar</a>
    </div>
  </div>
</form>
<?php endwhile; ?>
</div>