<?php 

	include_once 'Fornecedor.php';
	include_once 'Contato.php';

	# instancia novo fornecedor
	$fornecedor= new Fornecedor();
	$fornecedor->RazaoSocial = 'Produtos Bom Gosto S.A.';

	# atribui informações de contato
	$fornecedor->SetContato('Mauro', '511234-5678', 'mauro@bomgosto.com.br');

	# imprime informações
	echo $fornecedor->RazaoSocial . "<br>";
	echo "Informações de Contato <br>";
	echo $fornecedor->GetContato();

 ?>

 