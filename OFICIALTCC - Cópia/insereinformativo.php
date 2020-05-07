<?php
include 'conexao.php'; 
$informativo = $_POST['informativo'];
$data = $_POST['data'];
$turma = $_POST['turma'];

$insere = "INSERT INTO informativos (informativo, data, turma) values ('$informativo','$data', '$turma')";
mysqli_query($conecta,$insere);
if (isset($_GET['dois'])) {
	if($_GET['dois']=="loginsecretaria"){
	header("Refresh:0;url=loginsecretaria.php");	
	}
	if($_GET['dois']=="loginprofessor"){
	header("Refresh:0;url=loginprofessor.php");	
	}
	if($_GET['dois']=="loginaluno"){
	header("Refresh:0;url=loginaluno.php");	
	}
}
?>