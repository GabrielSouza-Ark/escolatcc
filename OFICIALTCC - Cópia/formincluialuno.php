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
   <button class="btn btn-secondary btn-right" type="submit" ahref="index.html">SAIR</button>
</nav>
</div> 
</nav>
<br><br><br><br><br>
     


    <div>
<div class="container">
<p class="text-center display-4">INCLUIR UM ALUNO</p>
    <form name="forminclui" method="POST" action="inserealuno.php?dois=<?php echo $_GET['volta'];?>">
    <input type="hidden" name="tipo" value="<?php echo $id;?>">
      <label>Nome</label>
      <input class="form-control" type="text" name="nome" required="yes"> <br>
      <label>Idade</label>
      <input class="form-control" type="text" name="idade" required="yes"><br> 
      <label>Turma</label>
      <input class="form-control" type="text" name="turma" required="yes"> <br>
      <label>Nome do Responsavel</label>
      <input class="form-control" type="text" name="nomeresponsavel" required="yes"> <br>
      <label>Data de Nascimento</label>
      <input class="form-control" type="date" name="datadenascimento" required="yes"> <br>
      <label>Senha</label>
      <input class="form-control" type="password" name="senha" required="yes"> <br>
      <label>E-Mail</label>
      <input class="form-control" type="text" name="email" required="yes"><br>
      <label>Telefone</label>
      <input class="form-control" type="text" name="telefone" required="yes"><br>
      <br>      
      <!-- <select class="w3-select" name="tipo" required="yes">-->
       <!-- <option value="Dentista">Dentista</option>-->
       <!-- <option value="Paciente">Paciente</option>-->
       <!-- <option value="Secretaria">Secretaria</option>-->
      <!--</select>-->
      <br>
     
     <div class="w3-center">
	 <div class="w3-bar">
     <button type="submit" class="btn btn-secondary btn-center" name="Enviar">Incluir</button><br><br><br><br>
     </div>
     </div>
    </div>
    </form>
  </div>
</div>

</body>
</html>


