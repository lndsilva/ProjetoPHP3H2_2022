<?php
	
	class Produto {
		var $Codigo;
		var $Descricao;
		var $Preco;
		var $Quantidade;		
	

		function ImprimeEtiqueta()
		{
			print 'Código: ' . $this->Codigo . "<br>";
			print 'Descrição: ' . $this->Descricao . "<br>";
		}
	}

?>



