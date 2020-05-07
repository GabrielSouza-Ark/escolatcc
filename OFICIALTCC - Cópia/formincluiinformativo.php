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
  
<div class="container">
    <p class="text-center display-4">NOVO INFORMATIVO</p>
  </div>

    <form name="forminclui" method="POST" action="insereinformativo.php?dois=<?php echo $_GET['volta'];?>">
    <div  class="container">
      <label>Informativo</label>
      <input class="form-control" type="text" name="informativo" required="yes"><br> 
      <label> Data </label>
      <input class="form-control" type="date" name="data" required="yes"><br>
      <label>Turma </label>
      <input class="form-control" type="text" name="turma" required="yes"> <br>
      
 
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

