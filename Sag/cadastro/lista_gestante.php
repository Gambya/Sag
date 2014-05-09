<?php
include_once("../TConnect.class.php");


$gest = new TConnect();
$sql = "select * from gestante";
$gest->execQuery($sql);
?>
<div class="container">
<table id="table" class="table table-hover">
	<tr>
		<th>ID</th><th>Nome</th><th>CPF</th><th>RG</th><th>Nascimento</th><th></th>
	</tr>
<?php
while($dado = $gest->resultSet()):
?>
<tr>
	<td><?php echo $dado['idgestante']; ?></td><td><?php echo $dado['nome']; ?></td><td><?php echo $dado['cpf']; ?></td><td><?php echo $dado['rg']; ?></td><td><?php echo $dado['nascimento']; ?></td>
	<td>
		<form method="post" accept-charset="utf-8">
			<input type="hidden" id="idgestante" value="<?php echo $dado['idgestante']; ?>">
			<button id="edite" class="btn btn-default">Editar</button>
		</form>
	</td>
</tr>
<?php endwhile; ?>
</table>
</div>