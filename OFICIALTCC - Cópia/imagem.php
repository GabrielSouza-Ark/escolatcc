<?php
include 'conexao.php';
session_start();
$turma = $_SESSION['turma'];
$passo = (isset($_GET['p'])) ? $_GET['p'] : "";
$dir = "_up/";

$ext_img = array('jpg','gif','png');
$ext_arq = array('doc','docx','pdf','zip','rar');

switch($passo){
	case "cadUsuario":
		cadUsuario($dir, $ext_img, $ext_arq, $turma, $conecta);
		break;
	default:
		uploadBasico($dir, $ext_img, $ext_arq);
		break;
}

function cadUsuario($dir, $ext_img, $ext_arq, $turma,$conecta){

	

	$foto = "";
	
	$arquivo = $_FILES['arquivo'];
	$file = $dir.$arquivo['name'];
	
	$extension = explode(".", $arquivo["name"]);
	$ext = strtolower(end($extension));
	
	if(array_search($ext,$ext_img) === 0) {
		if(move_uploaded_file($arquivo['tmp_name'], $file))
			$foto = $arquivo['name'];
			
		
	
			$sql = "INSERT INTO fotos (turma, foto) VALUES ('$turma','_up/$foto')";
	
			

			$resultado = mysqli_query($conecta,$sql);
	}
	if($resultado){
		//echo "Cadastro efetuado com sucesso!<br/>";
		header("Refresh:0;url=loginprofessor.php");
		

		//echo "Foto: <img width='150' src='_up/".$foto."' />";
		
	} else {
		header("Refresh:0;url=loginprofessor.php");
		?>
		<script>
		alert("Nenhum arquivo selecionado!");
		</script>
	<?php
	}
}

function uploadBasico($dir, $ext_img, $ext_arq){
	$arquivo = $_FILES['arquivo'];
	$file = $dir.$arquivo['name'];
	
	$extension = explode(".", $arquivo["name"]);
	$ext = strtolower(end($extension));
	
	if(array_search($ext,$ext_img) === false) {
		if(array_search($ext,$ext_arq) === false) {
			echo "O tipo do arquivo é incorreto!<br/>";
			return false;
		}
	}
	
	if(move_uploaded_file($arquivo['tmp_name'], $file)) {
		echo "O Arquivo foi enviado corretamente!<br/>";
		//echo "<a href='_up/".$arquivo['name']."'>arquivo</a><br/>";
		//print_r($_FILES);
		header("Refresh:0;url=loginprofessor.php");

	} else {
		echo "O envio do arquivo falhou!";
		print_r($_FILES);
	}
}