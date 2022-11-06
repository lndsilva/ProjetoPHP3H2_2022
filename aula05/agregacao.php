<?php 

	include_once 'Cesta.php';
	include_once 'Produto.php';

	$produtol = new Produto;
	$produto2 = new Produto;
	$produto3 = new Produto;
	$produto4 = new Produto;

	$produtol->Codigo = 1;
	$produtol->Descricao = 'Ameixa';
	$produtol->Preco = 1.40;

	$produto2->Codigo = 2;
	$produto2->Descricao = 'Morango';
	$produto2->Preco = 2.24;
	
	$produto3->Codigo = 3;
	$produto3->Descricao = 'Abacaxi';
	$produto3->Preco = 2.86;
	
	$produto4->Codigo = 4;
	$produto4->Descricao = 'Laranja';
	$produto4->Preco = 1.14;

	$cesta= new Cesta;

	$cesta->AdicionaItem($produtol);
	$cesta->AdicionaItem($produto2);
	$cesta->AdicionaItem($produto3);
	$cesta->AdicionaItem($produto4);

	echo $cesta->CalculaTotal();
	echo "<br>"; //quebra de linha
	echo $cesta->ExibeLista();

 ?>
 