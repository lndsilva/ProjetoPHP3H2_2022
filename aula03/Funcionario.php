<?php 

	class Funcionario{

		private   $codigo;
		public    $nome;
		private   $nascimento;
		protected $salario;

		/* método SetSalario
		* atribui o parâmetro $Salario à propriedade $Salario
		*/

		function setSalario($salario){
			//verifica se é numérico e positivo
			if(is_numeric($salario)&&($salario > 0))
				{
					$this->salario = $salario;
				}
			}

		/* método GetSalario
		* retorna o valor da propriedade $Salario
		*/
		
		function getSalario(){
			return $this->salario;
		}
	}
?>


 