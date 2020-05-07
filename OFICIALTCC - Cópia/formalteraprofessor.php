<!DOCTYPE html>  
<title>Lista</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
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
  <a href="index.html">
   <button class="btn btn-secondary btn-right" type="submit">SAIR</button>
  </a>
</nav>
</div>
</nav>
<?php
include_once 'conexao.php';
$id = $_GET['id'];
$consulta = mysqli_query($conecta,"SELECT * FROM listaprofessor WHERE id = '$id'");
$registro = mysqli_fetch_array($consulta);
$id = $registro[0];
$nome = $registro[1];
$idade = $registro[3]; 
$especialista = $registro[4];
$datadenascimento = $registro[5];
$senha = $registro[6];
$email = $registro[7];
$telefone = $registro[8];

?>
		
    <title>Alteração</title>
	</head>
	
	<body>
	<form name="formaltera" method="POST" action="alteraprofessor.php?dois=<?php echo $_GET['volta'];?>">
	<div  class="w3-container">
	
	<br><br><br><br><br>
  <div class="container">
    <p class="text-center display-4">ALTERAR OS DADOS DO PROFESSOR</p>
 
	
	<form name="formaltera" method="POST" action="alteraprofessor.php">

      <div class="form-group">
      		<input type="hidden" name="id" value="<?php echo $id;?>">
              
              <label>Nome</label>
      		    <input class="form-control" type="text" name="nome" value="<?php echo $nome;?>">
              <br>

              <label>Idade</label>
      		    <input class="form-control" type="text" name="idade" value="<?php echo $idade;?>">
              <br>
              
              <label>Especialista</label>
              <input class="form-control" type="text" name="especialista" value="<?php echo $especialista;?>">
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
              

            	 <div>
                 <br>
                 <center>
                 <button type="submit" class="btn btn-secondary btn-center" name="Enviar">ALTERAR</button>
                 </center>
                 <br><br>
               </div>
 </div>
      </div>
  </form>	
  </div>
	</body>
</html>
