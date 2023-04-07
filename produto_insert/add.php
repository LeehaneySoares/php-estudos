<?php
  require_once('./config.php');

  $descricao_produto = isset($_POST['descricao_produto']) ? $_POST['descricao_produto'] : null;
  $preco_produto = isset($_POST['preco_produto']) ? $_POST['preco_produto'] : null;

  $PDO = connectionBD();
  $sql = "INSERT INTO Produtos (descricao_produto, preco_produto) VALUES (:descricao_produto, :preco_produto)";

  $stmt = $PDO->prepare($sql);
  $stmt->bindParam(':descricao_produto', $descricao_produto);
  $stmt->bindParam(':preco_produto', $preco_produto);

  if ($stmt->execute()) {
    header('location: index.php');
    exit;
  } else {
    echo "Ocorreu um erro",
    print_r($stmt->errorInfo());
  }
?>