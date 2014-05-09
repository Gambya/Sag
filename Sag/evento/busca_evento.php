<?php
include_once("../TConnect.class.php");

if(!isset($_POST['datain'])){
  $datain = date('Y-m-d');
}else{
  $datain = $_POST['datain'];
}

// Select de eventos
$eve = new TConnect();
$sqlEve = "select * from evento
          where data = '$datain'";
$eve->execQuery($sqlEve);
?>
<div class="container">
<fieldset>
  <!-- Form Name -->
  <legend>Presença em Eventos</legend>
</fieldset>
<!-- Text input-->
<form class="form-inline" role="form" accept-charset="utf-8">
  <div class="form-group">
    <label class="sr-only" for="datain">data inicio</label>
    <input id="datain" name="datain" placeholder="" class="form-control" required="" type="date">
  </div>
  <a href="#" class="btn btn-primary" onclick="searchPresenca()">Consulta</a>
</form>
</fieldset>
<?php
while($dado = $eve->resultSet()):
?>
<fieldset>
<?php
// Tratando data para apresentação
$data = explode("-",$dado['data']);
$data = $data[2]."/".$data[1]."/".$data[0];
?>
<!-- Form Name -->
<legend><?php echo $dado['evento']; ?> - Data: <?php echo $data; ?> - Hora: <?php echo $dado['hora']; ?> - Lista de Presença</legend>
</fieldset>
  <table class="table table-striped">
    <tr>
      <th>Gestantes Presentes</th>
      <th>CPF</th>
    </tr>
    <?php 
    // Selecionando Gestantes
    $gestante = new TConnect();
    $sql = "select * from gestante g,presencaevento p
            where g.idgestante = p.idgestante
            and p.idevento = ".$dado['idevento'];
    $gestante->execQuery($sql);
    while($dado = $gestante->resultSet()):  ?>
    <tr>
      <td><?php echo $dado['nome']; ?></td>
      <td><?php echo $dado['cpf']; ?></td>
    </tr>
    <?php
    endwhile;
    ?>
  </table>
<?php endwhile; ?>
</div>