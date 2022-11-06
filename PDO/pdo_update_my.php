<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
      //instancia objeto PDO, conectando no mysql
      $conn = new PDO("mysql:host=$servername;dbname=livro", $username, $password);
       
       //definindo o modo de exceção para o erro
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "UPDATE famosos SET nome='Ayrton Senna da Silva' WHERE codigo=4";

      //Preparando a instancia
      $stmt = $conn->prepare($sql);

      //executando a query
      $stmt->execute();

      // mensagem caso a alteração ocorra
      echo $stmt->rowCount() . " Alteração realizada com sucesso!!!";
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
    $conn = null;
?>

