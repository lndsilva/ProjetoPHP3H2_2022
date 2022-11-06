<?php 

	class Cesta{


		private $itens;

		#adiciona itens na cesta
		function AdicionaItem(Produto $item){
			$this->itens[] = $item;
		}
		
		#exibe a lista de produtos
		function ExibeLista(){
			foreach ($this->itens as $item) {
				$item->ImprimeEtiqueta();
			}
		}

		#calcula o valor total da cesta
		function CalculaTotal(){
			$total = 0;
			foreach ($this->itens as $item) {
		
				$total += $item->Preco;
		
			}
		
			return 'Total: R$ ' . $total . '<br>';
		}

	}

 ?>
 