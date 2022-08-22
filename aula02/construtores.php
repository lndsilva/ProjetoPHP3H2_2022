<?php 

	# carrega as classes
	include_once 'Pessoa_Cons_Destr.php';
	include_once 'Conta_Cons_Destr.php';

	# criação do objeto $carlos
	$carlos= new Pessoa(10, "Carlos da Silva", 1.85, 25, "1010411976", "Ensino Médio", 650.00);

	echo "Manipulando o objeto {$carlos->nome}: <br>";

	echo "<br>";

	echo "{$carlos->nome} é formado em: {$carlos->escolaridade} <br>";
	
	$carlos->formar('Técnico em desenvolvimento de sistemas');

	echo "{$carlos->nome} é formado em: {$carlos->escolaridade} <br>";
	echo "{$carlos->nome} possui {$carlos-> idade} anos <br>";
	
	$carlos->envelhecer(1);
	
	echo "{$carlos->nome} possui {$carlos->idade} anos <br>";

	# Criação do objeto $conta_carlos
	$conta_carlos = new Conta(6677, "CC.1234.56", "10/07/02", $carlos, 9876, 567.89);
	
	echo "<br>";
	
	echo "Manipulando a conta de: {$conta_carlos->titular->nome}: <br>";
	echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br>";
	
	$conta_carlos->depositar(20);
	echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} <br>";
	
	$conta_carlos->retirar(10);
	echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br>";

?>