<?php
  require_once('../connection.php');
  $PDO = connectionBD();

  $stmt_count = $PDO->prepare("SELECT COUNT (*) AS total FROM Livros");
  $stmt_count->execute();
  $stmt = $PDO->prepare("SELECT cod_livro, titulo_livro, codigo_ibsn, autor_livro, nome_editora, quant_pagina");
  $stmt->execute();
  $total = $stmt_count->fetchColumn();

  echo $total;
?>