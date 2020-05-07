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
    <div><br><br><br><br><br><br> 
<?php  
include_once 'conexao.php';
$id = $_GET['id'];
$consulta = mysqli_query($conecta,"SELECT * FROM listaaluno WHERE id = '$id'");
$registro = mysqli_fetch_array($consulta);
$falta = $registro[1];
$turma = $registro[4];
?>
<div class="container">
    <p class="text-center display-4">NOVA FALTA</p>
  </div>

    <form name="forminclui" method="POST" action="inserefalta.php?dois=<?php echo $_GET['volta'];?>">
    <div  class="container">
    <input type="hidden" name="id" value="<?php echo $id;?>">
      <label>Motivo</label>
      <input class="form-control" type="text" name="falta" required="yes"><br> 
      <label>Data </label>
      <input class="form-control" type="date" name="data" required="yes"><br>
      
 
        <div>
          <br>
          <center>
          <button type="submit" class="btn btn-secondary btn-center" name="Enviar">INCLUIR</button>
          </center>
          <br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </div>
    </form>
  </div>
</div>

</body>
</html>

