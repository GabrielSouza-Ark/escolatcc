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
$idfalta = $_GET['idfalta'];

$consulta = mysqli_query($conecta,"SELECT * FROM falta WHERE id_falta = '$idfalta'");
?>
	<div>
 <br><br><br><br><br><br>
	<div class="container">
		<p class="text-center display-4">EXCLUIR A FALTA?</p>

<table class="table table-bordered">
<thead class="thead-light">
      <tr>


        <th>FALTA</th>
        <th>DATA</th>
        
        </tr>
    </thead>
			<?php
			while($registro = mysqli_fetch_array($consulta)){
				$codigo = $registro[0];
			?>
			<tr>

				<td><?php echo $registro[2];?></td>
                <td><?php echo $registro[3];?></td>

			</tr>
			<?php }?>

		</table>
        <div class="w3-center"> 
        <br>
		<label> Tem certeza que deseja excluir o registro? </label>
		</div>
		<div class="w3-center">
	 	<div class="w3-bar">
	 	<br>
	 	<form name="formexclui" method="POST" action="excluifalta.php?idfalta=<?php echo $codigo;?>&dois=<?php echo $_GET['volta'];?>">
		<button class="btn btn-secondary btn-lg" type="submit" name="Excluir" value="Exluir">Excluir</button>
							 	<br><br>
								<button class="btn btn-secondary"><?php echo "<a href='loginsecretaria.php'>Não Excluir</a>";?></button>
								<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
								</form>

			</div>

	</div>
	</body>
</html>
