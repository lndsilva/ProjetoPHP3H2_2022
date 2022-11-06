<?php 

	include_once 'Cesta.php';
	include_once 'Fornecedor.php';
	include_once 'Produto.php';

	$fornecedor= new Fornecedor;
	$fornecedor->RazaoSocial = 'Produtos Bom Gosto S.A. ';

	$cesta= new Cesta();

	$cesta->Adicionaltem($fornecedor);

	$cesta->CalculaTotal();

 ?>

 

 