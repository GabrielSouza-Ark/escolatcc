<?php
include 'conexao.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$turma = $_POST['turma'];
$nomeresponsavel = $_POST['nomeresponsavel'];
$datadenascimento = $_POST['datadenascimento'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$escrita = $_POST['escrita'];
$avancos = $_POST['avancos'];
$dificuldades = $_POST['dificuldades'];
$providencias = $_POST['providencias'];
$encaminhamentos = $_POST['encaminhamentos'];
$portugues = $_POST['portugues'];
$matematica = $_POST['matematica'];
$historia = $_POST['historia'];
$geografia = $_POST['geografia'];
$ciencias = $_POST['ciencias'];
$arte = $_POST['arte'];
$edfisica = $_POST['edfisica'];
$ingles = $_POST['ingles'];
$altera = "UPDATE listaaluno SET nome = '$nome', idade = '$idade', turma = '$turma', nomeresponsavel = '$nomeresponsavel', datadenascimento = '$datadenascimento', telefone = '$telefone', email = '$email', escrita = '$escrita', avancos = '$avancos', dificuldades = '$dificuldades', providencias = '$providencias', encaminhamentos = '$encaminhamentos', portugues = '$portugues', matematica = '$matematica', historia = '$historia', geografia = '$geografia', ciencias = '$ciencias', arte = '$arte', edfisica = '$edfisica', ingles = '$ingles' WHERE id = '$id'";

mysqli_query($conecta,$altera) or DIE (mysqli_connect_error());
if (isset($_GET['dois'])) {
	if($_GET['dois']=="loginprofessor"){
	header("Refresh:0;url=loginprofessor.php");	
	}
	if($_GET['dois']=="loginsecretaria"){
	header("Refresh:0;url=loginsecretaria.php");	
	}
	if($_GET['dois']=="loginaluno"){
	header("Refresh:0;url=loginaluno.php");	
	}
}
?>