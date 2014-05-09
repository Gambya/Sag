$(document).ready(function(){
	// chamar dados tabela
	$('#conteudo').load("cadastro/lista_gestante.php");

	/** Navegação do Nav **/
	// Listar Gestante
	$('#lgestante').click(function(e){
		e.preventDefault();
		$('#conteudo').load("cadastro/lista_gestante.php");
		$('#isearch').css("display","block");
	});

	// Cadastro Gestante
	$('#cgestante').click(function(e){
		e.preventDefault();
		$('#conteudo').load("cadastro/cadastroGestante.php");
		$('#isearch').css("display","none");
	});

	// Cadastro Filho
	$('#cfilho').click(function(e){
		e.preventDefault();
		$('#conteudo').load("cadastrofilho/cadastro_filho.php");
		$('#isearch').css("display","none");
	});

	// Cadastro Evento
	$('#cevento').click(function(e){
		e.preventDefault();
		$('#conteudo').load("evento/cadastro_evento.php");
		$('#isearch').css("display","none");
	});

	// Lista de Presença
	$('#lpresenca').click(function(e){
		e.preventDefault();
		$('#conteudo').load("evento/presenca_eve.php");
		$('#isearch').css("display","none");
	});

	// Relacionar Presenças
	$('#rpresenca').click(function(e){
		e.preventDefault();
		$('#conteudo').load("evento/busca_evento.php");
		$('#isearch').css("display","none");
	});

	// Cadastro Usuário
	$('#cuser').click(function(e){
		e.preventDefault();
		$('#conteudo').load("usuario/usuarioCad.php");
		$('#isearch').css("display","none");
	});
 });

function cadUser(){
	var nome = $("#nome").val();
	var usuario = $("#usuario").val();
	var senha = $("#senha").val();
	var repetesenha = $("#repetesenha").val();
	var tipouser = $("#tipouser").val();
	
	$("#conteudo").load("usuario/usuario.php", {
	nome: nome,
	usuario: usuario,
	senha: senha,
	repetesenha: repetesenha,
	tipouser: tipouser
	});
}

function cadGestante(){
	var nome = $("#nome").val();
	var cpf = $("#cpf").val();
	var rg = $("#rg").val();
	var nasc = $("#nasc").val();
	var endereco = $("#endereco").val();
	var numero = $("#numero").val();
	var complemento = $("#complemento").val();
	var cep = $("#cep").val();
	var cidade = $("#cidade").val();
	var bairro = $("#bairro").val();
	var uf = $("#uf").val();
	var telefone = $("#telefone").val();
	var escolaridade = $("#escolaridade").val();
	var estadociviel = $("#estadociviel").val();
	var religiao = $("#religiao").val();
	var getacao = $("#getacao").val();
	var sexobebe = $("#sexobebe").val();
	var nascimento = $("#nascimento").val();
	var grupo = $("#grupo").val();
	var prenatal = $("#prenatal").val();
	var pergunta = $("#pergunta").val();
	var saude = $("#saude").val();
	var conjuge = $("#conjuge").val();
	var cpfconjuge = $("#cpfconjuge").val();
	var obs = $("#obs").val();
	var enxoval = $("#enxoval").val();
	
	$("#conteudo").load("cadastro/cadastro.php", {
	nome: nome,
	cpf: cpf,
	rg: rg,
	nasc: nasc,
	endereco: endereco,
	numero: numero,
	complemento: complemento,
	cep: cep,
	cidade: cidade,
	bairro: bairro,
	uf: uf,
	telefone: telefone,
	escolaridade: escolaridade,
	estadociviel: estadociviel,
	religiao: religiao,
	getacao: getacao,
	sexobebe: sexobebe,
	nascimento: nascimento,
	grupo: grupo,
	prenatal: prenatal,
	pergunta: pergunta,
	saude: saude,
	conjuge: conjuge,
	cpfconjuge: cpfconjuge,
	obs: obs,
	enxoval: enxoval
	});
}

function cadFilho(){
	var mae = $("#mae").val();
	var nomefilho = $("#nomefilho").val();
	var nascfilho = $("#nascfilho").val();
	var infoadicionais = $("#infoadicionais").val();
	
	$("#conteudo").load("cadastrofilho/cadastrafilho.php", {
	mae: mae,
	nomefilho: nomefilho,
	nascfilho: nascfilho,
	infoadicionais: infoadicionais
	});	
}

function cadEvento(){
	var evento = $("#evento").val();
	var data = $("#data").val();
	var hora = $("#hora").val();
	
	$("#conteudo").load("evento/cadastro_eve.php", {
	evento: evento,
	data: data,
	hora: hora
	});	
}

function searchPresenca(){
	var datain = $("#datain").val();
	
	$("#conteudo").load("evento/busca_evento.php", {
	datain: datain
	});
}

function envPresenca(){
	var presente = $("#presente").val();
	var evento = $("#evento").val();
	
	$("#conteudo").load("evento/envio_presenca.php", {
	presente: presente,
	evento: evento
	});
}