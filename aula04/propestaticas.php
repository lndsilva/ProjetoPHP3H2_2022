<?php 

	class Aplicacao{
		static $Quantidade;

		//método construtor incremente a $quandiade de aplicaçãoes

		function __construct($Nome){
			//incrementa propriedade estática
			self::$Quantidade++;
			$i = self::$Quantidade;
			echo "Nova Aplicação número . $i: $Nome <br>";
		}
	}
	
	#criar os objetos
	new Aplicacao('Dia');
	new Aplicacao('Gimp');
	new Aplicacao('Gnumeric');
	new Aplicacao('Abiword');
	new Aplicacao('Evolution');

	echo '<br>Quantidade de Aplicações = ' . Aplicacao::$Quantidade . "<br>";

 ?>

 