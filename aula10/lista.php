<?php 

	//abre conexão com o MySQL
	$conn = mysqli_connect("localhost","root","","livro");
	
	//define a consulta que será realizada
	$query = "SELECT codigo, nome FROM famosos";
	
	//envia consulta ao banco de dados
	$result = mysqli_query($conn,$query);

	if ($result)
	{
	 //percorre resultados da pesquisa
	 while ($row = mysqli_fetch_assoc($result)){
	
		echo $row['codigo']. ' - '. $row['nome']. "<br>\n";
		}
	}
				

	//fecha a conexão
	mysqli_close($conn);


 ?>

 