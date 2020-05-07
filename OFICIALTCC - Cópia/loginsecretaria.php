<!DOCTYPE html>
<?php 
session_start();
$nome = $_SESSION['nome'];
?>
<html>
<head>
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
</head> 

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<div class="bg-light text-secondary">

<nav class="navbar navbar-expand-LG bg-secondary navbar-secondary fixed-top">
  <form class="form-inline" action="/action_page.php">
  <a href="#gestao" class="btn btn-secondary"><i class="fa fa-user"></i> GESTÃO</a>
    <a href="#professores" class="btn btn-secondary"><i class="fa fa-user"></i> PROFESSORES</a>
    <a href="#alunos" class="btn btn-secondary"><i class="fa fa-user"></i> ALUNOS</a>
    <a href="#informativos" class="btn btn-secondary"><i class="fa fa-envelope"></i> INFORMATIVOS</a>
    <a href="#ocorrencias" class="btn btn-secondary"><i class="fa fa-file"></i> OCORRÊNCIAS</a>
    <a href="#mensagem" class="btn btn-secondary"><i class="fa fa-bars"></i> MENSAGENS</a>
    
  </form>
  <div class="btn-right">
  <nav class="navbar navbar-expand-sm">
    <a href="index.html">
   <button class="btn btn-secondary btn-right" type="submit">SAIR</button>
   </a>
</nav>
</div> 
</nav> 
 <br><br><br><br><br><br><br><br>
<div>
    <div>
        <p class="text-center display-4">Boas-vindas, <?php echo $nome;?>!</p>
    </div>
<div class="container" id="gestao">
<br><br><br><br><br><br><br>
<p class="text-center display-4">GESTÃO</p>


<table class="table table-bordered">
<thead class="thead-light">
      <tr>
      <?php
    include_once 'conexao.php';

    $query = mysqli_query($conecta,"SELECT * FROM loginsecretaria");
    ?>

        <th>ID</th>
        <th>NOME</th>
        <th>TELEFONE</th>
        <th>EMAIL</th>
        <th>CARGO</th>
        <th>DATA DE NASCIMENTO</th>
        <th>SENHA</th>
        <th>ALTERAR</th>
        <th>EXCLUIR</th>
        
         
      </tr>
    </thead>
  <?php 
  while ($registro = mysqli_fetch_array($query)){
    ?> 
    <div class="container">
    <tr>
      <td><?php echo "$registro[0]"; ?></td>
      <td><?php echo "$registro[1]"; ?></td>
      <td><?php echo "$registro[2]"; ?></td>
      <td><?php echo "$registro[3]"; ?></td>
      <td><?php echo "$registro[4]"; ?></td>
      <td><?php echo "$registro[6]"; ?></td>
      <td><?php echo "$registro[5]"; ?></td>

      <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formalteragestao.php?id=$registro[0]&volta=loginsecretaria'>Alterar</a>"; ?></button></td>
      <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formexcluigestao.php?id=$registro[0]&volta=loginsecretaria'>Excluir</a>"; ?></button></td>
      </tr>
      </div>  
  <?php } ?>
  </table>
  <div class="container">
   <center>
   <td><button type="button" class="btn btn-secondary" name="gestao"><?php echo "<a href='formincluigestao.php?&volta=loginsecretaria'>Incluir Novo</a>";?></button></td>
   </center>
   </div>
</div>
</div>


<div>
<div class="container" id="professores">
<br><br><br><br><br><br><br>
<p class="text-center display-4">PROFESSORES</p>


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
        <th>NASCIMENTO</th>
        <th>SENHA</th>
        <th>EMAIL</th>
        <th>TELEFONE</th>
        <th>ALTERAR</th>
        <th>EXCLUIR</th>
        
         
      </tr>
    </thead>
  <?php 
  while ($registro = mysqli_fetch_array($query)){
    ?> 
    <div class="container">
    <tr>
      <td><?php echo "$registro[0]"; ?></td>
      <td><?php echo "$registro[1]"; ?></td>
      <td><?php echo "$registro[3]"; ?></td>
      <td><?php echo "$registro[4]"; ?></td>
      <td><?php echo "$registro[5]"; ?></td>
      <td><?php echo "$registro[6]"; ?></td>
      <td><?php echo "$registro[7]"; ?></td>
      <td><?php echo "$registro[8]"; ?></td>
      <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formalteraprofessor.php?id=$registro[0]&volta=loginsecretaria'>Alterar</a>"; ?></button></td>
      <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formexcluiprofessor.php?id=$registro[0]&volta=loginsecretaria'>Excluir</a>"; ?></button></td>
      </tr>
      </div>  
  <?php } ?>
  </table>
  <div class="container">
   <center>
   <td><button type="button" class="btn btn-secondary" name="professor"><?php echo "<a href='formincluiprofessor.php?&volta=loginsecretaria'>Incluir Novo</a>";?></button></td>
   </center>
   </div>
</div>
</div>
<br>


<div>
 <div class="container" id="alunos">
<br><br><br><br><br><br>
<p class="text-center display-4">ALUNOS</p>


<table class="table table-bordered">
<thead class="thead-light">
      <tr>
      <?php
    include_once 'conexao.php';
    $query = mysqli_query($conecta,"SELECT * FROM listaaluno");
    ?>

        <th>ID</th>
        <th>NOME</th>
        <th>IDADE</th>
        <th>TURMA</th>
        <th>RESPONSAVEL</th>
        <th>NASCIMENTO</th>
        <th>SENHA</th>
        <th>EMAIL</th>
        <th>TELEFONE</th>
        <th>ALTERAR</th>
        <th>EXCLUIR</th>        
        
      </tr>
    </thead>
  <?php 
  while ($registro = mysqli_fetch_array($query)){
    ?> 
    <tr>
      <td><?php echo "$registro[0]"; ?></td>
      <td><?php echo "$registro[1]"; ?></td>
      <td><?php echo "$registro[3]"; ?></td>
      <td><?php echo "$registro[4]"; ?></td>
      <td><?php echo "$registro[5]"; ?></td>
      <td><?php echo "$registro[6]"; ?></td>
      <td><?php echo "$registro[7]"; ?></td>
      <td><?php echo "$registro[8]"; ?></td>
      <td><?php echo "$registro[9]"; ?></td>
      <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formalteraaluno.php?id=$registro[0]&volta=loginsecretaria'>Alterar</a>"; ?></button></td>
      <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formexcluialuno.php?id=$registro[0]&volta=loginsecretaria'>Excluir</a>"; ?></button></td>
     
         
    </tr>
  <?php } ?>
  </table>
   <div class="container">
   <center>
<td><button type="button" class="btn btn-secondary" name="alunos"><?php echo "<a href='formincluialuno.php?&volta=loginsecretaria'>Incluir Novo</a>";?></button></td>
 </center>
</div>
</div>
</div>
<br>



<div>
<div class="container" id="informativos">
<br><br><br><br><br><br>
<p class="text-center display-4">INFORMATIVOS GERAIS</p>

<table class="table table-bordered">
<thead class="thead-light">
      <tr>
      <?php
    include_once 'conexao.php';
    $query = mysqli_query($conecta,"SELECT * FROM informativos"); 
    ?>

        <th>ID</th>
        <th>INFORMATIVO</th>
        <th>DATA</th>
        <th>TURMA</th>
        <th>ALTERAR</th>
        <th>EXCLUIR</th>
        
        
      </tr>
    </thead>
  <?php 
  while ($registro = mysqli_fetch_array($query)){
    ?> 
    <tr>
      <td><?php echo "$registro[0]"; ?></td>
      <td><?php echo "$registro[1]"; ?></td>
      <td><?php echo "$registro[2]"; ?></td>
      <td><?php echo "$registro[3]"; ?></td>
      <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formalterainformativo.php?id=$registro[0]&volta=loginsecretaria'>Alterar</a>"; ?></button></td>
      <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formexcluiinformativo.php?id=$registro[0]&volta=loginsecretaria'>Excluir</a>"; ?></button></td>
     
         
    </tr> 
  <?php } ?>
  </table>
   <div class="container">
   <center>
   <td> <button type="button" class="btn btn-secondary" name="informativo"><?php echo "<a href='formincluiinformativo.php?&volta=loginsecretaria'>Incluir Novo</a>";?></button></td>
   </center>
</div>
</div>
</div>




<div>
<div class="container" id="ocorrencias">
<br><br><br><br><br><br>
<p class="text-center display-4">OCORRÊNCIAS</p>


<table class="table table-bordered">
<thead class="thead-light">
      <tr>
      <?php
    include_once 'conexao.php';
    $query = mysqli_query($conecta,"SELECT * FROM ocorrencias");
    ?>

        <th>ID</th>
        <th>NOME</th>
        <th>OCORRENCIA</th>
        <th>DATA</th>
        <th>ALTERAR</th>
        <th>EXCLUIR</th>
        
      </tr>
    </thead>
  <?php 
  while ($registro = mysqli_fetch_array($query)){
    ?> 
    <tr>
      <td><?php echo "$registro[0]"; ?></td>
      <td><?php echo "$registro[2]"; ?></td>
      <td><?php echo "$registro[3]"; ?></td>
      <td><?php echo "$registro[4]"; ?></td>
      <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formalteraocorrencia.php?id=$registro[0]&volta=loginsecretaria'>Alterar</a>"; ?></button></td>
      <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formexcluiocorrencia.php?id=$registro[0]&volta=loginsecretaria'>Excluir</a>"; ?></button></td>
     
  
    </tr>
  <?php } ?>
  </table>

</div>
</div>
<br><br><br><br><br><br>
      <div>
                                    <div class="container" id="mensagem">

                                        <p class="text-center display-4">MENSAGENS</p>


                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <?php
                                                    include_once 'conexao.php';
                                                    $query = mysqli_query($conecta, "SELECT * FROM mensagem");
                                                    ?>

                                                    <th>ID</th>
                                                    <th>NOME</th>
                                                    <th>EMAIL</th>
                                                    <th>TELEFONE</th>
                                                    <th>MENSAGEM</th>
                                                    <th>EXCLUIR</th>


                                                </tr>
                                            </thead>
                                            <?php
                                            while ($registro = mysqli_fetch_array($query)) {
                                                ?> 
                                                <tr>
                                                    <td><?php echo "$registro[0]"; ?></td>
                                                    <td><?php echo "$registro[1]"; ?></td>
                                                    <td><?php echo "$registro[2]"; ?></td>
                                                    <td><?php echo "$registro[3]"; ?></td>
                                                    <td><?php echo "$registro[4]"; ?></td>
                                                    <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formexcluimensagem.php?id=$registro[0]&volta=loginsecretaria'>Excluir</a>"; ?></button></td>


                                                </tr> 
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        

            
    </div>
</body>
</html> 
