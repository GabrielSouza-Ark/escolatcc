<?php
include 'conexao.php';
$id = $_POST['id'];
$informativo = $_POST['informativo'];
$data = $_POST['data'];
$turma = $_POST['turma']; 
$altera = "UPDATE informativos SET informativo = '$informativo', data = '$data', turma = '$turma' WHERE id = '$id'";
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