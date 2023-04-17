<?php
  require_once 'config.php';

  # Pegando os valores dos inputs
  $title = isset($_POST['title']) ? $_POST['title'] : null;
  $isbn = isset($_POST['isbn']) ? $_POST['isbn'] : null;
  $author = isset($_POST['autor']) ? $_POST['autor'] : null;
  $publishing = isset($_POST['editora']) ? $_POST['editora'] : null;
  $quantityPage = isset($_POST['qtdPaginas']) ? $_POST['qtdPaginas'] : null;

  # Inserindo as informações na tabela dos livros
  $PDO = connectionBD();
  $sql = "INSERT INTO Livros (titulo_livro, codigo_ibsn, autor_livro, nome_editora, quant_pagina) VALUES (:titulo_livro, :codigo_ibsn, :autor_livro, :nome_editora, :quant_pagina)";

  # Adicionando os valores recebidos do formulário na tabela Livros em seus respectivos campos
  $stmt = $PDO->prepare($sql);
  $stmt->bindParam(':titulo_livro', $title);
  $stmt->bindParam(':codigo_ibsn', $isbn);
  $stmt->bindParam(':autor_livro', $author);
  $stmt->bindParam(':nome_editora', $publishing);
  $stmt->bindParam(':quant_pagina', $quantityPage);

  if ($stmt->execute()) {
    header('location: index.php');
    exit;
  } else {
    echo 'Ocorreu um error na inclusão de registro';
    print_r($stmt->errorInfo());
  }
?>