<?php
  require_once('../config.php');

  $cod_livro = isset($_POST['cod_livro']) ? $_POST['cod_livro'] : null;
  $titulo_livro = isset($_POST['titulo_livro']) ? $_POST['titulo_livro'] : null;
  $codigo_ibsn = isset($_POST['codigo_ibsn']) ? $_POST['codigo_ibsn'] : null;
  $autor_livro = isset($_POST['autor_livro']) ? $_POST['autor_livro'] : null;
  $nome_editora = isset($_POST['nome_editora']) ? $_POST['nome_editora'] : null;
  $quant_pagina = isset($_POST['quant_pagina']) ? $_POST['quant_pagina'] : null;

  if (empty($titulo_livro) || empty($codigo_ibsn) || empty($autor_livro) || empty($nome_autor) || empty($quant_pagina)) {
    echo "É preciso preencher todos os campos do formulário de cadastro!";
    exit;
  }
  $PDO = connectionBD();
  $stmt = $PDO->prepare("UPDATE Livros SET titulo_livro=:titulo_livro, quant_pagina=:quant_pagina WHERE cod_livro=:cod_livro");
  $stmt->bindParam(':cod_livro', $cod_livro, PDO::PARAM_INT);
  $stmt->bindParam(':titulo_livro', $titulo_livro);
  $stmt->bindParam(':codigo_ibsn', $codigo_ibsn);
  $stmt->bindParam(':autor_livro', $autor_livro);
  $stmt->bindParam(':nome_editora', $nome_editora);
  $stmt->bindParam(':quant_pagina', $quant_pagina);
  if ($stmt->execute()) {
    header('location: index.php');
    exit;
  } else {
    echo "Ocorreu um erro na alteração do livro";
    print_r($stmt->errorInfo());
  }
?>