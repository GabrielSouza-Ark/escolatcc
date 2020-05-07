<?php
include 'conexao.php';
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$tipo = $_POST['tipo'];
$turma = $_POST['turma'];
$nomeresponsavel = $_POST['nomeresponsavel'];
$datadenascimento = $_POST['datadenascimento'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$insere = "INSERT INTO listaaluno (nome, idade, tipo, turma, nomeresponsavel, datadenascimento, senha, email, telefone) values ('$nome','$idade','Aluno','$turma','$nomeresponsavel','$datadenascimento', '$senha', '$email', '$telefone')";
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