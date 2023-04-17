<?php
  require_once('../config.php');
  $PDO = connectionBD();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de livros cadastrados</title>
</head>
<body>
  <button class='viewer__back' type='button'>
    <a href='../index.php'>Voltar</a>
  </button>
  <?php session_start(); $_SESSION['error']; ?>
  <?php 
    $stmt_count = $PDO->prepare("SELECT COUNT(*) AS total FROM Livros");
    $stmt_count->execute();
    $stmt = $PDO->prepare("SELECT cod_livro, titulo_livro, codigo_ibsn, autor_livro, nome_editora, quant_pagina FROM Livros ORDER BY titulo_livro");
    $stmt->execute();
    $total = $stmt_count->fetchColumn();

    if ($total > 0):
  ?>
  <table border='1'>
    <thead>
      <tr>
        <th>Título</th>
        <th>IBSN</th>
        <th>Autor</th>
        <th>Editora</th>
        <th>Qtd. Páginas</th>
        <th>Opções para o livro</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
      <tr>
        <td><?php echo $resultado['titulo_livro']?></td>
        <td><?php echo $resultado['codigo_ibsn']?></td>
        <td><?php echo $resultado['autor_livro']?></td>
        <td><?php echo $resultado['nome_editora']?></td>
        <td><?php echo $resultado['quant_pagina']?></td>
        <td>
          <a href='form_altera.php?cod_livro=<?php echo $resultado['cod_livro']?>'>Alterar</a>
          <a href='excluir.php?cod_livro=<?php echo $resultado['cod_livro']?>' onclick="return confirm('Tem certeza que deseja excluir ?');">Excluir</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
  <p>Total de livros cadastrados: <?php echo $total ?></p>
  <?php else: ?>
  <p>Não há livro Cadastrado</p>
  <?php endif; ?>
</body>
</html>