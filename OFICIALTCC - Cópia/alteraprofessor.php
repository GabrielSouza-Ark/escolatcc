<?php
include 'conexao.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$especialista = $_POST['especialista'];
$datadenascimento = $_POST['datadenascimento'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$altera = "UPDATE listaprofessor SET nome = '$nome', idade = '$idade', especialista = '$especialista', datadenascimento = '$datadenascimento', telefone = '$telefone', email = '$email' WHERE id = '$id'";
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
