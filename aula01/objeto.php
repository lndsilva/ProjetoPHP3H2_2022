<?php

	//insere a classe
	include_once 'produto.php';

	//cria um objeto	
	$valor = new Produto();

	// atribuir valores
	$valor->Codigo = 4011;

	$valor->Descricao = "CD The Best of Eric Clapton";

	//Imprimindo os valores
	echo $valor->Codigo ." - " . $valor->Descricao;

?>
