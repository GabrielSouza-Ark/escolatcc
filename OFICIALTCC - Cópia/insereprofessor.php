<?php
include 'conexao.php';
$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$idade = $_POST['idade'];
$especialista = $_POST['especialista'];
$datadenascimento = $_POST['datadenascimento'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone']; 
$insere = "INSERT INTO listaprofessor (nome, tipo, idade, especialista,  datadenascimento, senha, email, telefone) values ('$nome', 'Professor', '$idade', '$especialista', '$datadenascimento', '$senha', '$email', '$telefone')";
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
