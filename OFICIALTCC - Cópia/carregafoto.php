<?php



function usuario_excluir($conexao, $id_usuario){
	$sql = sprintf("DELETE FROM fotos WHERE id = %s", $id_usuario);
	$resultado = mysqli_query($conexao, $sql);
	
	return $resultado;
}

function usuario_cadastrar( $conexao, $foto = ''){
	
	if( $usuario_nome == "" ) {
		return false;
	}
	
	if( $usuario_idade == "" ) {
		$usuario_idade = 'NULL';
	}
	
	$sql = "INSERT INTO fotos (foto) VALUES  ('$foto')";
	
	
	$resultado = mysqli_query($conexao, $sql);
	
	return $resultado;
	
}

