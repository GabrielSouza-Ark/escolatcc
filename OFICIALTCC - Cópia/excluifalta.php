<?php
include 'conexao.php';
$idfalta = $_GET['idfalta'];

$altera = "DELETE FROM falta WHERE id_falta = '$idfalta'";
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