<?php
include 'conexao.php';
$idocorrencia = $_GET['idocorrencia'];

$altera = "DELETE FROM ocorrencias WHERE id_ocorrencia = '$idocorrencia'";
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