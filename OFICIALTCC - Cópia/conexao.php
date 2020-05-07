<?php
	$conecta = mysqli_connect("localhost","root","","escolatcc");

	if (!$conecta) {
		echo "Error: Falha ao conectar-se com o banco de dados MYSQL";
		echo mysqli_connect_error();
	}
?>