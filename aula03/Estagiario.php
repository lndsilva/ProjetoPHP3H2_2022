<?php 
	
	class Estagiario extends Funcionario{

		/*método GetSalario sobreescritoretorna o $Salário com 12% de bônus.*/
		function getSalario(){
			return $this->salario * 1.12;
		}
	}

 ?>


 