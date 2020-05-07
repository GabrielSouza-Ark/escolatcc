<!DOCTYPE html>
<html>
<title>Lista</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card-2 w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <!--<a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a> -->

    <a href="formlogin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">Logout</a>
  </div>
</div>
    <div>
        <p> ........</p>
<?php
include_once 'conexao.php';
$id = $_GET['id'];
$consulta = mysqli_query($conecta,"SELECT * FROM paciente WHERE id_paciente = '$id'");
$registro = mysqli_fetch_array($consulta);
$id = $registro[0];
$nome = $registro[1];
$idade = $registro[2];
$cpf = $registro[3];
$rg = $registro[4];
$telefone = $registro[5];
$email = $registro[6];
$tipo = $registro[7];
?>
<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo/estilo.css">
		<link rel="stylesheet" type="text/css" href="estilo/normalize.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<title>Alteração</title>
	</head>
	
	<body>
	<form name="formaltera" method="POST" action="alterapaciente.php">
	<div  class="w3-container">
	
	<div class="w3-container">
	<h2>Alteração de Dados</h2>
	</div>
	<form name="formaltera" method="POST" action="alterapaciente.php">
	

		<input type="hidden" name="id" value="<?php echo $id;?>">
        
        <label class="w3-text-black"><b>Nome</b></label>
		<input class="w3-input w3-border w3-light-grey" type="text" name="nome" value="<?php echo $nome;?>">
        <br>
        
        <label class="w3-text-black"><b>Idade</b></label>
		<input class="w3-input w3-border w3-light-grey" type="text" name="idade" value="<?php echo $idade;?>">
        <br>
        
        <label class="w3-text-black"><b>CPF</b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="cpf" value="<?php echo $cpf;?>">
        <br>
        
        <label class="w3-text-black"><b>RG</b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="rg" value="<?php echo $rg;?>">
        <br>
        
        <label class="w3-text-black"><b>Telefone</b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="telefone" value="<?php echo $telefone;?>">
        <br>
        
        <label class="w3-text-black"><b>Email</b></label>
        <input class="w3-input w3-border w3-light-grey" type="text" name="email" value="<?php echo $email;?>">
        <br>

        <br>      
        <select class="w3-select" name="tipo">
        <option value="Dentista">Dentista</option>
        <option value="Paciente">Paciente</option>
        <option value="Secretaria">Secretaria</option>
        </select>
        <br>
        <div class="w3-center">
	 <div class="w3-bar">
     <br>
     <button class="w3-btn w3-block w3-blue" type="submit" name="Enviar">Alterar</button>
     </div>
     </div>
	</div>
	</form>	
	</body>
</html>
