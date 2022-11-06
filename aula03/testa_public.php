<?php 
	
	# carrega as classes
	include 'Funcionario.php';
	include 'Estagiario.php';

	//cria objeto Funcionaria
	$pedrinho= new Funcionario();
	$pedrinho->nome = 'Pedrinho';
	
	//cria objeto Estagiaria
	$mariana= new Estagiario();
	$mariana->nome = '<br> Mariana';
	
	//imprime propriedade nome
	
	echo $pedrinho->nome;
	echo $mariana->nome;

 ?>

 