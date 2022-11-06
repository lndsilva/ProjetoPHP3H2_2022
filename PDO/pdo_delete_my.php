<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
      
      //instancia objeto PDO, conectando no mysql
      $conn = new PDO("mysql:host=$servername;dbname=livro", $username, $password);
      
      //definindo o modo de exceção para o erro
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      //comando para excluir registro      
      $sql = "DELETE FROM famosos WHERE codigo=3";
      
      //utilizando a função exec() porque nenhum resultado é retornado      
      $conn->exec($sql);
      echo "Registro exluído com sucesso!!!";
      }catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();      
      }      
      $conn = null;
?>

