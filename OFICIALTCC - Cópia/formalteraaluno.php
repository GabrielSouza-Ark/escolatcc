<!DOCTYPE html>
<html>
<title>Lista</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="css/jquery.min.js"></script>
  <script src="css/popper.min.js"></script>
  <script src="css/bootstrap.min.js"></script>

<body>

<div class="bg-light text-secondary">

<nav class="navbar navbar-expand-LG bg-secondary navbar-secondary fixed-top">
  <form class="form-inline" action="/action_page.php">
    
  </form>
  <div class="btn-right">
  <nav class="navbar navbar-expand-sm">
   <button class="btn btn-secondary btn-right" type="submit" href="index.html">SAIR</button>
</nav>
</div>
</nav>
    <div>
<br><br><br><br>
<?php
include_once 'conexao.php';
$id = $_GET['id'];
$consulta = mysqli_query($conecta,"SELECT * FROM listaaluno WHERE id = '$id'");
$registro = mysqli_fetch_array($consulta);
$id = $registro[0];
$nome = $registro[1];
$idade = $registro[3];
$turma = $registro[4];
$nomeresponsavel = $registro[5];
$datadenascimento = $registro[6];
$senha = $registro[7];
$email = $registro[8];
$telefone = $registro[9];
$escrita = $registro[10];
$avancos = $registro[11];
$dificuldades = $registro[12];
$providencias = $registro[13];
$encaminhamentos = $registro[14];
$portugues = $registro[15];
$matematica = $registro[16];
$historia = $registro[17];
$geografia = $registro[18];
$ciencias = $registro[19];
$arte = $registro[20];
$edfisica = $registro[21];
$ingles = $registro[22];

?>
	</head>
	
	<body>
	<form name="formaltera" method="POST" action="alteraaluno.php?dois=<?php echo $_GET['volta'];?>">
	<div class="container">
   <p class="text-center display-4">ALTERAR O ALUNO?</p>
 
	<form name="formaltera" method="POST" action="alteraaluno.php">

		<input type="hidden" name="id" value="<?php echo $id;?>">
        
        <label>Nome</label>
    		<input class="form-control" type="text" name="nome" value="<?php echo $nome;?>">
        <br>
            
        <label>Idade</label>
    		<input class="form-control" type="text" name="idade" value="<?php echo $idade;?>">
        <br>

        <label>Turma</label>
        <input class="form-control" type="text" name="turma" value="<?php echo $turma;?>">
        <br>
        
        <label>Nome do Responsavel</label>
        <input class="form-control" type="text" name="nomeresponsavel" value="<?php echo $nomeresponsavel;?>">
        <br>

        <label>Data de Nascimento</label>
        <input class="form-control" type="text" name="datadenascimento" value="<?php echo $datadenascimento;?>">
        <br>
        
        <label>Senha</label>
        <input class="form-control" type="text" name="senha" value="<?php echo $senha;?>">
        <br>

        <label>Email</label>
        <input class="form-control" type="text" name="email" value="<?php echo $email;?>">
        <br>

        <label>Telefone</label>
        <input class="form-control" type="text" name="telefone" value="<?php echo $telefone;?>">
        <br>

        <label>Escrita</label>
        <input class="form-control" type="text" name="escrita" value="<?php echo $escrita;?>">
        <br>        

        <label>Avanços</label>
        <input class="form-control" type="text" name="avancos" value="<?php echo $avancos;?>">
        <br>        

        <label>Dificuldades</label>
        <input class="form-control" type="text" name="dificuldades" value="<?php echo $dificuldades;?>">
        <br>        

        <label>Providências</label>
        <input class="form-control" type="text" name="providencias" value="<?php echo $providencias;?>">
        <br>        

        <label>Encaminhamentos</label>
        <input class="form-control" type="text" name="encaminhamentos" value="<?php echo $encaminhamentos;?>">
        <br>        

        <label>Português</label>
        <input class="form-control" type="text" name="portugues" value="<?php echo $portugues;?>">
        <br>        

        <label>Matemática</label> 
        <input class="form-control" type="text" name="matematica" value="<?php echo $matematica;?>">
        <br>        

        <label>História</label>
        <input class="form-control" type="text" name="historia" value="<?php echo $historia;?>">
        <br>        

        <label>Geografia</label>
        <input class="form-control" type="text" name="geografia" value="<?php echo $geografia;?>">
        <br>        

        <label>Ciências</label>
        <input class="form-control" type="text" name="ciencias" value="<?php echo $ciencias;?>">
        <br>

        <label>Artes</label>
        <input class="form-control" type="text" name="arte" value="<?php echo $arte;?>">
        <br>

        <label>Educação Física</label>
        <input class="form-control" type="text" name="edfisica" value="<?php echo $edfisica;?>">
        <br>

        <label>Inglês</label>
        <input class="form-control" type="text" name="ingles" value="<?php echo $ingles;?>">
        <br>

        <div class="w3-center">
	 <div class="w3-bar">
     <br>
     <button class="btn btn-secondary btn-center" type="submit" name="Enviar">Alterar</button><br><br>
     </div>
     </div>
      </div>
	</div>
	</form>	
	</body>
</html>
