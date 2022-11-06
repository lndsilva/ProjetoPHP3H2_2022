<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  try {
    $conn = new PDO("mysql:host=$servername;dbname=livro", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Banco de dados conectado!!!";
  }
  catch(PDOException $e) {
    echo "Erro ao conectar o banco de dados: " . $e->getMessage();
  }
  
?>


