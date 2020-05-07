<!DOCTYPE html>
<?php 
session_start();
$nome = $_SESSION['nome'];
?>
<html content="pt-br">
    <head>
        <title>Lista</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="CSS/jquery.min.js"></script>
        <script src="CSS/popper.min.js"></script>
        <script src="CSS/bootstrap.min.js"></script> 
        <script src="CSS/imprimir.css"></script> 
    </head> 

    <body> 

        <div class="bg-light-lg text-secondary">

            <nav class="navbar navbar-expand-LG bg-secondary navbar-secondary fixed-top">
                <form class="form-inline" action="/action_page.php">
                    
                    <a href="#alunos" class="btn btn-secondary"><i class="fa fa-user"></i> ALUNOS</a>
                    <a href="#informativos" class="btn btn-secondary"><i class="fa fa-envelope"></i> INFORMATIVOS</a>
                    <a href="#galeria" class="btn btn-secondary"><i class="fa fa-th"></i> GALERIA</a>

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
                <div>
                    <form method="POST" action="loginprofessor.php">
                        <div class="container">
                            <div class="form-group">
                                <label for="selecao">SELECIONE SUA TURMA:</label>
                                <select class="form-control" name="turma" id="sel1">
                                    <option value="1a">1ºA</option>
                                    <option value="2a">2ºA</option>
                                    <option value="3a">3ºA</option>
                                    <option value="4a">4ºA</option>
                                    <option value="5a">5ºA</option>
                                    <option value="1b">1ºB</option>
                                    <option value="2b">2ºB</option>
                                    <option value="3b">3ºB</option>
                                    <option value="4b">4ºB</option>
                                    <option value="5b">5ºB</option>    
                                </select><br>
                                <center>
                                    <td><button type="submit" class="btn btn-secondary" name="professor">Selecionar</button></td>
                                </center>
                            </div>
                    </form>
                </div>

                <div>

                    <div>
                        <?php
                        include_once 'conexao.php';



                        if (isset($_POST['turma'])) {
                            $turma = $_POST['turma'];

                            $_SESSION['turma']=$turma;
                            //echo "Turma: ".$turma;
                            ?>
                            <div class="container" id="alunos">
                                <br><br><br><br><br><br><br>
                                <p class="text-center display-4">SEUS ALUNOS</p>

                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>NOME</th>
                                        </tr>
                                    </thead>



                                    <?php
                                    $Consulta = "SELECT * FROM listaaluno WHERE turma='$turma'";
                                    $Query = mysqli_query($conecta, $Consulta);
                                    while ($registro = mysqli_fetch_array($Query)) {
                                        ?>
                                        <tr>
                                            <div class="w3-center">
                                            <td> <?php echo "$registro[1]"; ?> <button type="button" class="btn btn-secondary w3-right" style="margin-left:10px;" data-toggle="modal" data-target="#myModal<?php echo $registro[0]; ?>"  value="<?php $_SESSION['nome'] = $registro[1]; ?>">FICHA</button>
                                             <button type="button" class="btn btn-secondary w3-right" style="margin-left:10px;" data-toggle="modal" data-target="#myModal2<?php echo $registro[0]; ?>"  value="<?php $_SESSION['nome'] = $registro[1]; ?>">OCORRENCIAS</button>
                                            <button type="button" class="btn btn-secondary w3-right" style="margin-left:10px;" data-toggle="modal" data-target="#myModal3<?php echo $registro[0]; ?>"  value="<?php $_SESSION['nome'] = $registro[1]; ?>">FALTAS</button>
                                            </div>
                                        </tr>
                                    <?php } ?>
                                </table>
                                <?php
                                $Consulta = "SELECT * FROM listaaluno WHERE turma='$turma'";
                                $Query = mysqli_query($conecta, $Consulta);
                                while ($registro = mysqli_fetch_array($Query)) {
                                    ?>
                                    <div class="modal fade" id="myModal<?php echo $registro[0]; ?>">
                                        <div class="modal-dialog modal-dialog-centered  modal-lg">
                                            <div class="modal-content"  id="printable">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <center>
                                                <img src="IMGescola/logo.png" style="width:15%">
                                                 <h6 class="modal-title">            UNIDADE DE GESTÃO DE EDUCAÇÃO - JUNDIAÍ <br> FICHA DE AVALIAÇÃO DO DESENVOLVIMENTO ESCOLAR DO ALUNO - ENSINO FUNDAMENTAL DE 2018</h6>
                                                </center>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">


                                                                <b>NOME:</b> <?php echo "$registro[1]"; ?><br>

                                                                <b>IDADE:</b> <?php echo "$registro[3]"; ?><br>

                                                                <b>TURMA:</b> <?php echo "$registro[4]"; ?><br>

                                                                <b>RESPONSÁVEL:</b> <?php echo "$registro[5]"; ?><br>

                                                                <b>DATA DE NASCIMENTO:</b> <?php echo "$registro[6]"; ?><br>

                                                                <b>EMAIL:</b> <?php echo "$registro[8]"; ?><br>

                                                                <b>TELEFONE:</b> <?php echo "$registro[9]"; ?><br><br>









                                                    <table class="table table-bordered table-sm " >
                                                        <thead class="thead-light">
                                                        <tr>
                                                        <th>HIPOTESE DE ESCRITA</th>
                                                        </tr>
                                                        </thead>
                                                            
                                                            <td> <?php echo "$registro[10]"; ?> </td>
                                                    </table>
                                                    
                                                    <table class="table table-bordered table-sm ">
                                                        <thead class="thead-light">
                                                        <th>AVANCOS SIGNIFICATIVOS</th>
                                                        </tr>
                                                        </thead>
                                                        <tr>
                                                            <td> <?php echo "$registro[11]"; ?> </td>
                                                    </table>
                                                    <table class="table table-bordered table-sm ">
                                                        <thead class="thead-light">
                                                        <th>DIFICULDADES ENCONTRADAS NO ENSINO E APRENDIZAGEM</th>
                                                        </tr>
                                                        </thead>
                                                        <tr>
                                                            <td> <p><?php echo "$registro[12]"; ?></p> </td>
                                                    </table>
                                                    <table class="table table-bordered table-sm ">
                                                        <thead class="thead-light">
                                                        <th>PROVIDENCIAS TOMADAS PELA ESCOLA</th>
                                                        </tr>
                                                        </thead>
                                                        <tr>
                                                            <td> <?php echo "$registro[13]"; ?> </td>
                                                    </table>
                                                    <table class="table table-bordered table-sm ">
                                                        <thead class="thead-light">
                                                        <th>ENCAMINHAMENTOS E ORIENTACOES AOS RESPONSAVEIS</th>
                                                        </tr>
                                                        </thead>
                                                        <tr>
                                                            <td> <?php echo "$registro[14]"; ?> </td>
                                                    </table>
                                                    <table class="table table-bordered table-sm">
                                                        <thead class="thead-light">
                                                        <th>PORTUGUES</th>
                                                        <th>MATEMATICA</th>
                                                        <th>HISTORIA</th>
                                                        <th>GEOGRAFIA</th>
                                                        <th>CIENCIAS</th>
                                                        <th>ARTE</th>
                                                        <th>ED. FISICA</th>
                                                        <th>INGLES</th>
                                                        
                                                        
                                                        </tr>
                                                        </thead>
                                                        <tr>
                                                            <td> <?php echo "$registro[15]"; ?> </td>
                                                            <td> <?php echo "$registro[16]"; ?> </td>
                                                            <td> <?php echo "$registro[17]"; ?> </td>
                                                            <td> <?php echo "$registro[18]"; ?> </td>
                                                            <td> <?php echo "$registro[19]"; ?> </td>
                                                            <td> <?php echo "$registro[20]"; ?> </td>
                                                            <td> <?php echo "$registro[21]"; ?> </td>
                                                            <td> <?php echo "$registro[22]"; ?> </td>


                                                    </table>
                                                    <center>
                                                        <tr>

                                                            
                                                            <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formalteraaluno.php?id=$registro[0]&volta=loginprofessor'>ALTERAR</a>"; ?></button></td>
                                                        </tr>
                                                    </center>
                                                    </thead>
                                                    </table>
                                                    <br>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>


                                 <?php
                                $Consulta = "SELECT * FROM listaaluno WHERE turma='$turma'";
                                $Query = mysqli_query($conecta, $Consulta);
                                while ($registro = mysqli_fetch_array($Query)) {
                                    ?>
                                    <div class="modal fade" id="myModal2<?php echo $registro[0]; ?>">
                                        <div class="modal-dialog modal-dialog-centered  modal-lg">
                                            <div class="modal-content"  id="printable">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <center>
                                                <img src="IMGescola/logo.png" style="width:15%">
                                                 <h6 class="modal-title">            UNIDADE DE GESTÃO DE EDUCAÇÃO - JUNDIAÍ <br> FICHA DE OCORRÊNCIAS DO ALUNO - ENSINO FUNDAMENTAL DE 2018</h6>
                                                </center>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                <table class="table table-bordered table-sm">
                                                        <thead class="thead-light">
                                                            <tr>
                                                        <?php
                                                        $Consulta = "SELECT * FROM ocorrencias WHERE id='$registro[0]'";
                                                        $queryi = mysqli_query($conecta, $Consulta);
                                                        
                                                        ?>

                                                                <th>OCORRENCIA</th> 
                                                                <th>DATA</th>
                                                                <th>ALTERAR</th>
                                                                <th>EXCLUIR</th>

                                                            </tr>
                                                        </thead>
                                                        <?php
                                                        while ($registroocorrencia = mysqli_fetch_array($queryi)) {
                                                        ?>
                                                            <tr>

                                                                <td><?php echo "$registroocorrencia[3]"; ?></td>
                                                                <td><?php echo "$registroocorrencia[4]"; ?></td>
                                                                <td><button type="button" class="btn btn-secondary"><?php echo "<a  href='formalteraocorrenciaprof.php?id=$registro[0]&volta=loginprofessor'>Alterar</a>"; ?></button></td>
                                                                <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formexcluiocorrenciaprof.php?idocorrencia=$registroocorrencia[0]&volta=loginprofessor'>Excluir</a>"; ?></button></td>


                                                            </tr>
                                                        <?php } ?>
                                                    </table>
                                                    <br><br>
                                                    <center>
                                                        <td> <button type="button" class="btn btn-secondary"><?php echo "<a href='formincluiocorrencia.php?id=$registro[0]&volta=loginprofessor'>ADICIONAR OCORRENCIA</a>"; ?></button></td>
                                                    </center>
                                                    <br>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>




<?php
                                $Consulta = "SELECT * FROM listaaluno WHERE turma='$turma'";
                                $Query = mysqli_query($conecta, $Consulta);
                                while ($registro = mysqli_fetch_array($Query)) {
                                    ?>
                                    <div class="modal fade" id="myModal3<?php echo $registro[0]; ?>">
                                        <div class="modal-dialog modal-dialog-centered  modal-lg">
                                            <div class="modal-content"  id="printable">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <center>
                                                <img src="IMGescola/logo.png" style="width:15%">
                                                 <h6 class="modal-title">            UNIDADE DE GESTÃO DE EDUCAÇÃO - JUNDIAÍ <br> FICHA DE FALTAS DO ALUNO - ENSINO FUNDAMENTAL DE 2018</h6>
                                                </center>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                <table class="table table-bordered table-sm">
                                                        <thead class="thead-light">
                                                            <tr>
                                                        <?php
                                                        $Consulta = "SELECT * FROM falta WHERE id='$registro[0]'";
                                                        $queryi = mysqli_query($conecta, $Consulta);
                                                        
                                                        ?>

                                                                <th>FALTA</th> 
                                                                <th>DATA</th>
                                                                <th>ALTERAR</th>
                                                                <th>EXCLUIR</th>

                                                            </tr>
                                                        </thead>
                                                        <?php
                                                        while ($registrofalta = mysqli_fetch_array($queryi)) {
                                                        ?>
                                                            <tr>

                                                                <td><?php echo "$registrofalta[2]"; ?></td>
                                                                <td><?php echo "$registrofalta[3]"; ?></td>
                                                                 <td><button type="button" class="btn btn-secondary"><?php echo "<a  href='formalterafalta.php?id=$registro[0]&volta=loginprofessor'>Alterar</a>"; ?></button></td>
                                                                <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formexcluifalta.php?idfalta=$registrofalta[0]&volta=loginprofessor'>Excluir</a>"; ?></button></td>


                                                            </tr>

                                                        <?php } ?>
                                                    </table> 
                                                    <center>
                                                        <td> <button type="button" class="btn btn-secondary" name="falta"><?php echo "<a href='formincluifalta.php?id=$registro[0]&volta=loginprofessor'>ADICIONAR FALTA</a>"; ?></button></td>
                                                    </center>
                                                    <br><br>
                                                                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>




                            </div>
                        </div>







                        <br><br><br><br>
                        <?php
                        if (isset($_POST['turma'])) {
                            $turma = $_POST['turma'];
                            ?>
                            <div>

                            <?php } ?>


                            <p></p><br><br><br><br>
                            <?php
                            if (isset($_POST['turma'])) {
                                ?>


                                <div>
                                    <div class="container" id="informativos">

                                        <p class="text-center display-4">INFORMATIVOS GERAIS</p>


                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                                <tr>
                                                    <?php
                                                    include_once 'conexao.php';
                                                    $query = mysqli_query($conecta, "SELECT * FROM informativos");
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
                                            while ($registro = mysqli_fetch_array($query)) {
                                                ?> 
                                                <tr>
                                                    <td><?php echo "$registro[0]"; ?></td>
                                                    <td><?php echo "$registro[1]"; ?></td>
                                                    <td><?php echo "$registro[2]"; ?></td>
                                                    <td><?php echo "$registro[3]"; ?></td>
                                                    <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formalterainformativo.php?id=$registro[0]&volta=loginprofessor'>Alterar</a>"; ?></button></td>
                                                    <td><button type="button" class="btn btn-secondary"><?php echo "<a href='formexcluiinformativo.php?id=$registro[0]&volta=loginprofessor'>Excluir</a>"; ?></button></td>


                                                </tr> 
                                            <?php } ?>
                                        </table>
                                        <div class="container">
                                            <center>
                                                <td> <button type="button" class="btn btn-secondary" name="informativo"><?php echo "<a href='formincluiinformativo.php?&volta=loginprofessor'>Incluir Novo</a>"; ?></button></td>
                                            </center>
                                        </div>
                                    </div>
                                </div>

                                 <p></p><br><br><br><br><br><br><br>
                                <div>
                                    <div class="container" id="galeria">

                                        <p class="text-center display-4">GALERIA</p>
                                        <br><br><br>
                                        <div style="margin-left:60px">
                                        <form enctype="multipart/form-data" action="imagem.php?p=cadUsuario" method="POST">
                                            <p>Selecione o arquivo:</p>
                                            <input type="file" name="arquivo"/>
                                            <br><br>
                                            <button class="btn btn-secondary" type="submit" value="Enviar arquivo"/>Enviar Arquivo</button>
                                            
                                            <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
                                        </form> 
                                        </div>
                                    </div>
                                </div>
                                <div class="container" id="galeria">
 
                                   <?php


                                $Query = mysqli_query($conecta,"SELECT * FROM fotos WHERE turma = '$turma'");
                                   
                                while ($Registro = mysqli_fetch_array($Query)){


                                  ?>
                                
                                <div class="w3-col l3 m6" style="margin-left:60px; margin-top:50px; margin-bottom:30px">
                                <img src="<?php echo $Registro['foto']?>"  class="w3-round w3-border w3-padding" style="width:300px; height: 200px"><br><br>
                                <div class="w3-center">
                                <button type="button" class="btn btn-secondary"><?php echo "<a href='formexcluiimagem.php?id=$Registro[0]&volta=loginprofessor'>Excluir</a>"; ?></button>
                                </div>
                                </div>

                                </tr>
                                </thead>
                                </table>
                               <?php } ?>
                            </div>
                                <?php } ?>

                            <br>
                        </div>
                        </form>
                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </body>
                </html>
            <?php } ?>  