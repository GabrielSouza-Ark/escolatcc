<!DOCTYPE html>
<html>
<title>Inclusão</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<form name="forminclui" method="POST" action="inserealuno.php">
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
    
<body>


<!-- Navbar -->    
    
<div class="w3-top">
  <div class="w3-bar w3-blue w3-card-2 w3-left-align w3-large">
<a href="#" class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      

    <a href="formlogin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Logout</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">

    <a href="formlogin.php" class="w3-bar-item w3-button w3-padding-large">Logout</a>
  </div>
</div>
    <br>
    ......
<br>

  
    <div class="w3-container">
      <h2>Inclusão de Dados</h2>
    </div>

    <form name="forminclui" method="POST" action="inserealuno.php?dois=<?php echo $_GET['volta'];?>">
    <div  class="w3-container">
      <label class="w3-text-black"><b> Nome </b></label>
      <input class="w3-input w3-border w3-light-grey" type="text" name="nome" required="yes"> 
      <label class="w3-text-black"><b> Idade </b></label>
      <input class="w3-input w3-border w3-light-grey" type="text" name="idade" required="yes"> 
      <label class="w3-text-black"><b> Nome da Mãe </b></label>
      <input class="w3-input w3-border w3-light-grey" type="text" name="nomemae" required="yes"> 
      <label class="w3-text-black"><b> Nome do Pai </b></label>
      <input class="w3-input w3-border w3-light-grey" type="text" name="nomepai" required="yes"> 
      <label class="w3-text-black"><b> Data de Nascimento </b></label>
      <input class="w3-input w3-border w3-light-grey" type="date" name="datadenascimento" required="yes"> 
      <label class="w3-text-black"><b> Senha </b></label>
      <input class="w3-input w3-border w3-light-grey" type="password" name="senha" required="yes"> 
      <label class="w3-text-black"><b> E-Mail </b></label>
      <input class="w3-input w3-border w3-light-grey" type="text" name="email" required="yes">
      <label class="w3-text-black"><b> Telefone </b></label>
      <input class="w3-input w3-border w3-light-grey" type="text" name="telefone" required="yes">
      <br>      
      <!-- <select class="w3-select" name="tipo" required="yes">-->
       <!-- <option value="Dentista">Dentista</option>-->
       <!-- <option value="Paciente">Paciente</option>-->
       <!-- <option value="Secretaria">Secretaria</option>-->
      <!--</select>-->
      <br>
     
     <br>
     <div class="w3-center">
	 <div class="w3-bar">
     <button class="w3-btn w3-block w3-blue" type="submit" name="Enviar">Incluir</button>
     </div>
     </div>
    </div>
    </form>
  </div>
</div>

</body>
</html>


