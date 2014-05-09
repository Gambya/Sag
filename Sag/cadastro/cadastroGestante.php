<?php
include_once("../TConnect.class.php");
?>
<form class="form-horizontal">
<fieldset>
<!-- Form Name -->
<legend>Cadastro de Gestante</legend>
</fieldset>
<div class="container">
<!-- NOME-->
<div class="control-group">
  <label class="control-label" for="nome">Nome</label>
  <div class="controls">
    <input id="nome" name="nome" type="text" placeholder="Nome Completo" class="form-control" required="">
    
  </div>
</div>

<!-- CPF-->
<div class="control-group">
  <label class="control-label" for="cpf">CPF</label>
  <div class="controls">
    <input id="cpf" name="cpf" type="text" placeholder="00000000000" class="form-control" required="">
    
  </div>
</div>

<!-- RG-->
<div class="control-group">
  <label class="control-label" for="rg">RG</label>
  <div class="controls">
    <input id="rg" name="rg" type="text" placeholder="" class="form-control">
  </div>
</div>

<!-- DATA DE NASCIMENTO-->
<div class="control-group">
  <label class="control-label" for="nasc">Data de Nascimento</label>
  <div class="controls">
    <input id="nasc" name="nasc" type="date" placeholder="00/00/0000" class="form-control">
  </div>
</div>


<!-- ENDEREÇO-->
<div class="control-group">
  <label class="control-label" for="endereço">Endereço</label>
  <div class="controls">
    <input id="endereco" name="endereco" type="text" placeholder="" class="form-control">
  </div>
</div>

<!-- NUMERO-->
<div class="control-group">
  <label class="control-label" for="numero">Número</label>
  <div class="controls">
    <input id="numero" name="numero" type="text" placeholder="" class="form-control">
  </div>
</div>

<!-- COMPLEMENTO-->
<div class="control-group">
  <label class="control-label" for="complemento">Complemento</label>
  <div class="controls">
    <input id="complemento" name="complemento" type="text" placeholder="" class="form-control">
    
  </div>
</div>

<!-- CEP-->
<div class="control-group">
  <label class="control-label" for="cep">CEP</label>
  <div class="controls">
    <input id="cep" name="cep" type="text" placeholder="" class="form-control">
  </div>
</div>
<!-- CIDADE-->
<div class="control-group">
  <label class="control-label" for="cidade">Cidade</label>
  <div class="controls">
    <input id="cidade" name="cidade" type="text" placeholder="" class="form-control">
  </div>
</div>

<!-- BAIRRO-->
<div class="control-group">
  <label class="control-label" for="bairro">Bairro</label>
  <div class="controls">
    <input id="bairro" name="bairro" type="text" placeholder="" class="form-control">
  </div>
</div>

<!-- ESTADO-->
<div class="control-group">
  <label class="control-label" for="uf">UF</label>
  <div class="controls">
    <input id="uf" name="uf" type="text" placeholder="" class="form-control">
  </div>
</div>

<!-- TELEFONE-->
<div class="control-group">
  <label class="control-label" for="telefone">Telefone</label>
  <div class="controls">
    <input id="telefone" name="telefone" type="text" placeholder="00000000" class="form-control">
    
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
    <select id="escolaridade" name="escolaridade" class="form-control">
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
    <label class="radio inline" for="estadociviel">
      <input type="radio" name="estadociviel" id="estadociviel" value="Solteira" checked="checked">
      Solteira
    </label>
    <label class="radio inline" for="estadociviel">
      <input type="radio" name="estadociviel" id="estadociviel" value="Casada">
      Casada
    </label>
  </div>
</div>

<!-- RELIGIÃO -->
<div class="control-group">
  <label class="control-label" for="religião">Religião</label>
  <div class="controls">
    <input id="religiao" name="religiao" type="text" placeholder="Religião" class="form-control">
  </div>
</div>

<!-- MES DE GESTAÇÃO-->
<div class="control-group">
  <label class="control-label" for="getacao">Meses de Gestação</label>
  <div class="controls">
    <input id="getacao" name="getacao" type="text" placeholder="" class="form-control">
  </div>
</div>

<!-- SEXO DO BEBE -->
<div class="control-group">
  <label class="control-label" for="sexobebe">Sexo do Bebê</label>
  <div class="controls">
    <label class="radio inline" for="sexobebe">
      <input type="radio" name="sexobebe" id="sexobebe" value="M" checked="checked">
      M
    </label>
    <label class="radio inline" for="sexobebe">
      <input type="radio" name="sexobebe" id="sexobebe" value="F">
      F
    </label>
  </div>
</div>

<!-- NASCIMENTO DO BEBE-->
<div class="control-group">
  <label class="control-label" for="nascimento">Provável Data de Nascimento</label>
  <div class="controls">
    <input id="nascimento" name="nascimento" type="date" placeholder="00/00/0000" class="form-control">
  </div>
</div>

<!-- ENTRADA NO GRUPO-->
<div class="control-group">
  <label class="control-label" for="grupo">Data de Entrada no Grupo</label>
  <div class="controls">
    <input id="grupo" name="grupo" type="date" placeholder="00/00/0000" class="form-control">
    
  </div>
</div>

<!-- PRENATAL -->
<div class="control-group">
  <label class="control-label" for="prenatal">Pré-Natal</label>
  <div class="controls">                     
    <textarea id="prenatal" name="prenatal" class="form-control" rows="3"></textarea>
  </div>
</div>

<!-- PQ ENGRAVIDOU -->
<div class="control-group">
  <label class="control-label" for="pergunta">Por que engravidou?</label>
  <div class="controls">                     
    <textarea id="pergunta" name="pergunta" class="form-control" rows="3"></textarea>
  </div>
</div>
<!-- SAUDE -->
<div class="control-group">
  <label class="control-label" for="saude">Problemas de Saúde</label>
  <div class="controls">                     
    <textarea id="saude" name="saude" class="form-control" rows="3"></textarea>
  </div>
</div>

<!-- CONJUGE-->
<div class="control-group">
  <label class="control-label" for="conjuge">Nome do Cônjuge</label>
  <div class="controls">
    <input id="conjuge" name="conjuge" type="text" placeholder="nome completo" class="form-control">
  </div>
</div>

<!-- CPF CONJUGE-->
<div class="control-group">
  <label class="control-label" for="cpfconjuge">CPF do Cônjuge</label>
  <div class="controls">
    <input id="cpfconjuge" name="cpfconjuge" type="text" placeholder="00000000000" class="form-control">
  </div>
</div>


<!-- OBSERVAÇÃO -->
<div class="control-group">
  <label class="control-label" for="obs">Observações</label>
  <div class="controls">                     
    <textarea id="obs" name="obs" class="form-control" rows="3"></textarea>
  </div>
</div>

<!-- ENXOVAL -->
<div class="control-group">
  <label class="control-label" for="enxoval">Recebeu o Enxoval?</label>
  <div class="controls">
    <label class="radio inline" for="enxoval">
      <input type="radio" name="enxoval" id="enxoval" value="Sim" checked="checked">
      Sim
    </label>
    <label class="radio inline" for="enxoval">
      <input type="radio" name="enxoval" id="enxoval" value="Não">
      Não
    </label>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="cadastrar"></label>
  <div class="controls">
    <a href="#" id="cadGest" class="btn btn-primary" onclick="cadGestante()">Cadastrar</a>
  </div>
</div>
</fieldset>
</form>
</div>