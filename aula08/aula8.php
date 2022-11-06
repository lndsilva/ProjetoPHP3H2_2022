<?php 

	require 'classes/produto.php';
	require 'models/produto.php';

	use models\Produto as productModel;
	use classes\Produto as productClass;

	$produto = new productModel();
	$produto->mostrarDetalhes();

	echo "<br>";

	$produto1 = new productClass();
	$produto1->mostrarDetalhes();


 ?>

 