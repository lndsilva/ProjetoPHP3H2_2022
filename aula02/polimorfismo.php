<?php 

	# carrega as classes
	include_once 'Pessoa_Cons_Destr.php';
	include_once 'Conta_Cons_Destr.php';
	include_once 'ContaPoupanca.php';
	include_once 'ContaCorrente.php';

	#Criação do objeto $carlos
	$carlos= new Pessoa(10, "Carlos da Silva", 1.85, 25, "10/04/1976", "Ensino Médio", 650.00);

	echo "Manipulando o objeto {$carlos->nome}: <br>";

	#Criação do objeto $conta_carlos
	$contas[1] = new ContaCorrente(6677, "CC.1234.56", "10/07/02", $carlos, 9876, 500.00, 200.00);
	$contas[2] = new ContaPoupanca(6678, "PP.1234.57", "10/07/02", $carlos, 9876, 500.00, '10/07');

	//percorremos as contas
	foreach ($contas as $key => $conta)
	{
		echo "Manipulando a conta $key de: {$conta->titular->nome}: <br>";
		echo "O saldo atual da conta $key é R\$ {$conta->obterSaldo()} <br>";

		$conta->depositar(200);
		echo "O saldo atual da conta $key é R\$ {$conta->obterSaldo()} <br>";
		
		$conta->retirar(100);
		echo "O saldo atual da conta $key é R\$ {$conta->obterSaldo()} <br>";
	}


?>