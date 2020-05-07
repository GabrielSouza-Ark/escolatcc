<?php
include 'conexao.php';
$id = $_POST['id'];
$falta = $_POST['falta'];
$data = $_POST['data'];
$altera = "UPDATE falta SET  falta = '$falta', data = '$data' WHERE id = '$id'";
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