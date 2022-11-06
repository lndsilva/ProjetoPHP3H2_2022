<?php 

	class Fornecedor{

		var $Codigo;
		var $RazaoSocial;
		var $Endereco;
		var $Cidade;
		var $Contato;

		# método construtor
		function __construct(){
			//instancia novo Contato
			$this->Contato = new Contato;
		}

		# grava contato
		function SetContato($Nome, $Telefone, $Email){
			//delega chamada de método
			$this->Contato->SetContato($Nome, $Telefone, $Email);
		}

		# retorna contato
		function GetContato(){
			//delega chamada de método
			return $this->Contato->GetContato();
		}

	}

 ?>

 