<?php 

	class Conta
	{
		var $agencia;
		var $codigo;
		var $dataDeCriacao;
		var $titular;
		var $senha;
		var $saldo;
		var $cancelada;
		
		//diminui o saldo em quantia
		function retirar($quantia)
		{
			if ($quantia > 0) {
				$this->saldo-=$quantia;
			}
		}

		//aumenta o saldo em quantia
		function depositar($quantia){
			if ($quantia > 0) {
				$this->saldo+=$quantia;
			}
		}

		//retorna o saldo atual
		function obterSaldo(){
			return $this->saldo;
		}

	}

 ?>
 