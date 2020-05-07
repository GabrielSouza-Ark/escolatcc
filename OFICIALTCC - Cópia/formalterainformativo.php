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
  <form class="form-inline">
    
    
  </form>
  <div class="btn-right">
  <nav class="navbar navbar-expand-sm">
   <button class="btn btn-secondary btn-right" type="submit" href="index.html">SAIR</button>
</nav>
</div>
</nav>
<?php
include_once 'conexao.php';
$id = $_GET['id'];
$consulta = mysqli_query($conecta,"SELECT * FROM informativos WHERE id = '$id'");
$registro = mysqli_fetch_array($consulta);
$id = $registro[0];
$informativo = $registro[1];
$data = $registro[2];
$turma = $registro[3];

?>
	<form name="formaltera" method="POST" action="alterainformativo.php?dois=<?php echo $_GET['volta'];?>">
	
	<div class="w3-container">
	<br><br><br><br><br>
	<div class="container">
        <p class="text-center display-4">ALTERAR O INFORMATIVO?</p>
     
	<form name="formaltera" method="POST" action="alterainformativo.php">
	

		<input type="hidden" name="id" value="<?php echo $id;?>">
        
        <label>Informativo</label>
		<input class="form-control" type="text" name="informativo" value="<?php echo $informativo;?>"><br>
        <br>
        
        <label>Data</label>
		<input class="form-control" type="date" name="data" value="<?php echo $data;?>"><br>
        <br>

         <label>Turma</label>
    <input class="form-control" type="text" name="turma" value="<?php echo $turma;?>"><br>
        <br>
        
        
        

        <div class="w3-center">
	 <div class="w3-bar">
     <br>
    <button class="btn btn-secondary btn-center" type="submit" name="Enviar">Alterar</button><br><br><br><br><br><br><br><br><br><br>
     </div>
     </div>
	</div>
	</form>	
  </div>
	</body>
</html>
