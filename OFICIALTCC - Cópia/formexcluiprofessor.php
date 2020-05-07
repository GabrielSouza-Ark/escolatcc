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

		<?php
		include_once 'conexao.php';
		$id = $_GET['id'];

		$consulta = mysqli_query($conecta,"SELECT * FROM listaprofessor WHERE id = '$id'");
		?>
				
					<br><br><br><br><br><br>
					  <div class="container">
					    <p class="text-center display-4">EXCLUIR O PROFESSOR?</p><br>
					  

					<table class="table table-bordered">
					<thead class="thead-light">
				      <tr>
				      <?php
						include_once 'conexao.php';
						$query = mysqli_query($conecta,"SELECT * FROM listaprofessor");
					  ?>

				        <th>ID</th>
				        <th>NOME</th>
				        <th>IDADE</th>
				        <th>ESPECIALISTA</th>
				        <th>DATA DE NASCIMENTO</th>
				        <th>SENHA</th>
				        <th>EMAIL</th>
				        <th>TELEFONE</th>
				        
				        </tr>
				    </thead>
							<?php
							while($registro = mysqli_fetch_array($consulta)){
								$codigo=$registro[0];
							?>
							<tr>
								<td><?php echo $registro[0];?></td>
								<td><?php echo $registro[1];?></td>
								<td><?php echo $registro[2];?></td>
				                <td><?php echo $registro[3];?></td>
				                <td><?php echo $registro[4];?></td>
				                <td><?php echo $registro[5];?></td>
				                <td><?php echo $registro[6];?></td>
				                <td><?php echo $registro[7];?></td>
							</tr>
							<?php }?>

						</table>
					        <div class="w3-center">
						        <br>
								<label> Tem certeza que deseja excluir o registro? </label>
							 	<br>
							 	<form name="formexclui" method="POST" action="excluiprofessor.php?id=<?php echo $codigo;?>&dois=<?php echo $_GET['volta'];?>">
							 	<button class="btn btn-secondary btn-lg" type="submit" name="Excluir" value="Exluir">Excluir</button>
							 	<br><br>
								<button class="btn btn-secondary"><?php echo "<a href='loginsecretaria.php'>Não Excluir</a>";?></button>
								<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
								</form>
                         </div>
				        </div>
				</div>
	</body>
</html>
