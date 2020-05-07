<?php
include 'conexao.php'; 
$falta = $_POST['falta'];
$data = $_POST['data'];
$id = $_POST['id'];

$insere = "INSERT INTO falta (falta, data, id) values ('$falta','$data', '$id')";
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