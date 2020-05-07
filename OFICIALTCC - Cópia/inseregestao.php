<?php
include 'conexao.php';
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$cargo = $_POST['cargo'];
$datadenascimento = $_POST['datadenascimento'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$insere = "INSERT INTO loginsecretaria (nome, tipo, cargo,  datadenascimento, senha, email, telefone) values ('$nome', 'Secretaria', '$cargo', '$datadenascimento', '$senha', '$email', '$telefone')";
mysqli_query($conecta,$insere);
if (isset($_GET['dois'])) {
	if($_GET['dois']=="loginprofessor"){
	header("Refresh:0;url=loginprofessor.php");	
	}
	if($_GET['dois']=="loginsecretaria"){
	header("Refresh:5;url=loginsecretaria.php");	
	}
	if($_GET['dois']=="loginaluno"){
	header("Refresh:0;url=loginaluno.php");	
	}
}
?>