<?php 
	# carrega as classes
	include 'Funcionario.php';
	include 'Estagiario.php';

	$pedrinho= new Estagiario();

	$pedrinho->SetSalario(248);

	echo 'O Salário do Pedrinho é R$: ' . $pedrinho->getSalario() . "<br>";


 ?>
