<?php 

	# carrega as classes
	
	include_once 'Pessoa.php';
	include_once 'Conta.php';
	
	# criação do objeto $carlos
	
	$carlos= new Pessoa;
	$carlos->Codigo = 10;
	$carlos->Nome = "Carlos da Silva";
	$carlos->Altura = 1.85;
	$carlos->Idade = 25;
	$carlos->Nascimento = '10/04/1976';
	$carlos->Escolaridade = "Ensino Médio";

	echo "Manipulando o objeto $carlos->Nome : <br>";
	echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} <br>";
	
	$carlos->formar('Técnico em Eletricidade');
	echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} <br>";
	echo "{$carlos->Nome} possui {$carlos->Idade} anos <br>";
	
	$carlos->envelhecer(1);
	echo "{$carlos->Nome} possui {$carlos->Idade} anos <br>";

	# criação do objeto $conta_carlos
	
	$conta_carlos = new Conta;
	$conta_carlos->Agencia = 6677;
	$conta_carlos->Codigo = "CC.12 34. 56";
	$conta_carlos->DataDeCriacao = "10/07/02";
	$conta_carlos->Titular = $carlos;
	$conta_carlos->Senha = 9876;
	$conta_carlos->Saldo = 567.89;
	$conta_carlos->Cancelada = false;

	echo "<br>";
	echo "Manipulando a conta de: {$conta_carlos->Titular->Nome} <br>";
	echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br>";
	
	$conta_carlos->Depositar(20);
	echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br>";
	
	$conta_carlos->Retirar(10);
	echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br>";

 ?>
