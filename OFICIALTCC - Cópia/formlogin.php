<!DOCTYPE html>


<html>
<title>Login</title>
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
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <!--<a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a> -->
    <a href="index.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="dentista.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Eventos</a>
    <a href="contato.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Fotos</a>
    <a href="sobre.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Patrono</a>
    <a href="formlogin.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Login</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Eventos</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Fotos</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Patrono</a>
    <a href="formlogin.php" class="w3-bar-item w3-button w3-padding-large">Login</a>
  </div>
</div>
    <div>
        <p> ........</p>
        <form  action="logar.php" method="POST">
        <p><h1> Login  </h1>
              <input type="hidden" name="nomedecadastro"  >
            <label class="w3-text-black"><b> Nome Completo de Cadastro</b></label>
            <input class="w3-input w3-border w3-light-gray" type="text" name="nomedecadastro">
            <br>            
            <label class="w3-text-black"><b> Senha: </b></label>
            <input class="w3-input w3-border w3-light-gray" type="password" name="senha">
            <br>
            <select  class="w3-select" name="tipo" required="yes">
            <option value="Professor">Professor</option>
            <option value="Aluno">Aluno</option>
            <option value="Secretaria">Secretaria</option>
            </select>
            <br>
            <input class="w3-input w3-border w3-blue" type="submit" name="Logar" value="Logar">
         <br>
         
        </form>
    </div>
       
    </body>
</html>
