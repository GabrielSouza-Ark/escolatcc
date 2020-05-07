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
<center>
<div class="text-white display-4"">
<br><br><br><br>
<?php
session_start();
include 'conexao.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
  if (isset($_POST['nome'])){
    $nome = $_POST['nome'];
  } 
  if (isset($_POST['senha'])){
    $senha = ($_POST['senha']); 
  }
  if (isset($_POST['tipo'])){
    $tipo = $_POST['tipo'];
  }



if ($tipo=='Professor'){
  $Consulta = "SELECT * FROM listaprofessor WHERE nome='$nome' AND senha='$senha'";
  $Query = mysqli_query ($conecta,$Consulta);
  $Registro = mysqli_fetch_array ($Query);
  $Linhas = mysqli_num_rows ($Query);
  if($Linhas>0){
      $id=$Registro['0']; 
      
      $_SESSION['id']=$id;
      $_SESSION['nome']=$Registro['nome'];
       $_SESSION['logado']=1;
      header("Refresh:0; url=loginprofessor.php");
  }else{
    echo "<br>";
	?>
	<script>
		alert("USUÁRIO, SENHA OU TIPO INCORRETOS!");
	</script>
	<?php
    header("Refresh:0;url=index.html");
  }
}
    
if ($tipo=='Aluno'){
  $Consulta = "SELECT * FROM listaaluno WHERE nome='$nome' AND senha='$senha'";
  $Query = mysqli_query($conecta, $Consulta);
  $Registro= mysqli_fetch_array($Query);
  $Linhas = mysqli_num_rows ($Query);
  if($Linhas>0){
      $id=$Registro['0'];
      $nome=$Registro['1'];
      $turma=$Registro['4'];
      $_SESSION['id']=$id;
      $_SESSION['nome']=$nome;
      $_SESSION['turma']=$turma;
      $_SESSION['logado']=1;
       
       
      header("Refresh:0; url=loginaluno.php");
   }else{
    echo "<br>";
	?>
	<script>
		alert("USUÁRIO, SENHA OU TIPO INCORRETOS!");
	</script>
	<?php
    header("Refresh:0;url=index.html");
  }
}


if ($tipo=='Secretaria'){
  $Consulta = "SELECT * FROM loginsecretaria WHERE nome='$nome' AND senha='$senha'";
  $Query = mysqli_query($conecta,$Consulta);
  $Registro= mysqli_fetch_array($Query);
  print_r($Query);
  $Linhas = mysqli_num_rows ($Query);
  if($Linhas>0){

      $id_secretaria=$Registro[0];
      $_SESSION['id_secretaria']=$id_secretaria;
      $_SESSION['nome']=$Registro['nome'];
      $_SESSION['logado']=1;

      header("Refresh:0; url=loginsecretaria.php");
   }else{
    echo "<br>";
	?>
	<script>
		alert("USUÁRIO, SENHA OU TIPO INCORRETOS!");
	</script>
	<?php
    header("Refresh:0;url=index.html");
  }
}
}

?>
<br><br><br><br><br><br><br>
    </div>
    </body>
</DOCTYPE>