<!DOCTYPE html>
<?php

include_once 'conexao.php';



session_start();
$id = $_SESSION['id'];
$nome= $_SESSION['nome'];
$turma= $_SESSION['turma'];



?>

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

<div class="bg-light-lg text-info">

<nav class="navbar navbar-expand-LG bg-info navbar-secondary fixed-top">
  <form class="form-inline" action="/action_page.php">
    
    <a href="#informativos" class="btn btn-info"><i class="fa fa-envelope"></i> INFORMATIVOS</a>
    <a href="#ocorrencias" class="btn btn-info"><i class="fa fa-file"></i> OCORRÊNCIAS</a>
    <a href="#faltas" class="btn btn-info"><i class="fa fa-bar-chart"></i> FALTAS</a>
    <a href="#galeria" class="btn btn-info"><i class="fa fa-th"></i> GALERIA</a>

  </form>
  <div class="btn-right">
  <nav class="navbar navbar-expand-sm">
    <a href="index.html">
   <button class="btn btn-info btn-right" type="button">SAIR</button>
   </a>
</nav>
</div>
</nav>


 <br><br><br><br><br><br><br><br>

    <div>
        <p class="text-center display-4">Boas-vindas, <?php echo $nome;?>!</p>
    </div>

<div class="container" id="informativos">
<br><br><br><br><br><br><br>
<p class="text-center display-4">INFORMAÇÕES ACADÊMICAS GERAIS</p>

 <table class="table table-bordered">
    <thead class="thead-light">
    <tr>
      <th>INFORMATIVOS </th>
      <th>TURMA</th>
      <th>DATA</th>

    </tr>
</thead>
    <tr>

    <?php

  
    $Query = mysqli_query($conecta,"SELECT * FROM informativos");
       
    while ($Registro = mysqli_fetch_array($Query)){


      ?>
    <tr>
    <td> <?php echo $Registro["informativo"]."  ";  ?> </td>
    <td> <?php echo $Registro["turma"]."  ";  ?> </td>
    <td> <?php echo $Registro["data"]."  ";  ?> </td>


   <?php } ?>
  </tr>

    </table>
  </div>

<div class="container" id="ocorrencias">
<br><br><br><br><br><br>
<p class="text-center display-4">INFORMAÇÕES ACADÊMICAS INDIVIDUAIS</p>

<table class="table table-bordered">
<thead class="thead-light">
    <tr>
      <th>OCORRÊNCIA</th>
      <th>DATA</th>
    </tr>
</thead>
    <tr>

    <?php


    $Query = mysqli_query($conecta,"SELECT * FROM ocorrencias WHERE id = '$id'");
       
    while ($Registro = mysqli_fetch_array($Query)){


      ?>
    <tr>
    <td> <?php echo $Registro["ocorrencia"]."  ";  ?> </td>
    <td> <?php echo $Registro["data"]."  ";  ?> </td>



   <?php } ?>
  </tr>

    </table>
    </div>


    <div class="container" id="faltas">
<br><br><br><br>
<p class="text-center display-4">CONTROLE DE FALTAS</p>

<table class="table table-bordered">
<thead class="thead-light">
    <tr>
      <th>JUSTIFICATIVA </th>
      <th>DATA</th>

    </tr>
</thead>
    <tr>

    <?php


    $Query = mysqli_query($conecta,"SELECT * FROM falta WHERE id = '$id'");
       
    while ($Registro = mysqli_fetch_array($Query)){


      ?>
    <tr>
    <td> <?php echo $Registro["falta"]."  ";  ?> </td>
    <td> <?php echo $Registro["data"]."  ";  ?> </td>



   <?php } ?>
  </tr>

    </table>
    </div>


<div class="container" id="galeria">
      <br><br><br><br>
      <p class="text-center display-4">GALERIA</p>
       <?php


    $Query = mysqli_query($conecta,"SELECT * FROM fotos WHERE turma = '$turma'");
       
    while ($Registro = mysqli_fetch_array($Query)){


      ?>
    
    <div class="w3-col l3 m6" style="margin-left:60px; margin-top:50px; margin-bottom:30px">
    <img src="<?php echo $Registro['foto']?>"  class="w3-round w3-border w3-padding" style="width:300px; height: 200px">
    </div>

    </tr>
    </thead>
    </table>





   <?php } ?>




</div>

    </div>

</body>

</html>