<?php
	// insere a classe
	include_once 'produto.php';

	// cria dois objetos
	$produtol = new Produto();
	$produto2 = new Produto();
	
	// atribuir valores
	$produtol->Codigo = 4001;
	$produtol->Descricao = 'CD - The Best of Eric Clapton';
	
	$produto2->Codigo = 4002;
	$produto2->Descricao = 'CD - The Eagles Hotel California';
	
	// imprime informações de etiqueta
	$produtol->ImprimeEtiqueta();
	$produto2->ImprimeEtiqueta();
?>

