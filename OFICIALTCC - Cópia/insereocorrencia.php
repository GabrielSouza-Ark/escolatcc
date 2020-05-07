<?php
include 'conexao.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$turma = $_POST['turma'];
$ocorrencia = $_POST['ocorrencia'];
$data = $_POST['data'];
$nomeresponsavel = $_POST['nomeresponsavel'];

$insere = "INSERT INTO ocorrencias (ocorrencia, data, id, nome) values ('$ocorrencia', '$data', '$id', '$nome')";
mysqli_query($conecta,$insere);
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