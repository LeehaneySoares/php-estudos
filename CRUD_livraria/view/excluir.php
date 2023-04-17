<?php
  session_start();
  require('../config.php');
  $PDO = connectionBD();

  $codLivro = isset($_GET['cod_livro']) ? (int) $_GET['cod_livro'] : null;

  if (isset($codLivro)) {
    $stmt = $PDO->prepare("DELETE FROM Livros WHERE cod_livro = $codLivro");
    $stmt->execute();
    header('location: index.php');
    exit;
  } else {
    $_SESSION['error'] = 'Por favor informe um código para livro que será excluido!';
  }
?>