<?php
include 'conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$insere = "INSERT INTO mensagem (nome, email, telefone, mensagem) values ('$nome','$email', '$telefone', '$mensagem')";
mysqli_query($conecta,$insere);
?>
<script>
		alert("Mensagem enviada com sucesso!");
</script>

<?php

header("Refresh:0;url=index.html");
 
?>