<?php
  require_once('../config.php');

  $cod_livro = isset($_POST['cod_livro']) ? $_POST['cod_livro'] : null;

  if (empty($cod_livro)) {
    echo "Codigo $cod_livro não foi encontrado";
    exit;
  }

  $PDO = connectionBD();
  $titulo_autor = isset($_POST['titulo_autor']) ? $_POST['titulo_autor'] : null;
  $codigo_ibsn = isset($_POST['codigo_ibsn']) ? $_POST['codigo_ibsn'] : null;
  $autor_livro = isset($_POST['autor_livro']) ? $_POST['autor_livro'] : null;
  $nome_editora = isset($_POST['nome_editora']) ? $_POST['nome_editora'] : null;
  $quant_pagina = isset($_POST['quant_pagina']) ? $_POST['quant_pagina'] : null;

  $stmt = $PDO->prepare("SELECT cod_livro, titulo_livro, codigo_ibsn, autor_livro, nome_editora, quant_pagina FROM Livros WHERE cod_livro = :$cod_livro");
  $stmt->bindParam(':cod_livro', $cod_livro, PDO::PARAM_INT);
  $stmt->execute();
  $result = $stmt->fetch(PDO::FETCH_ASSOC);

  if (!is_array($result)) {
    echo 'Não foi possível encontrar o codigo_livro';
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' type='text/css' href='../assets/css/style.css' />
  <title>Document</title>
</head>
<body>
  <main class='book'>
    <form class='book__form' name='book' method='POST' action='./addEdit.php' onsubmit="submit()">
      <header class='book__logo'>
        <img src='../assets/images/logo.png' alt='Leeh' />
          <hgroup class='book__hgroup'>
            <h1>Altere as informações do livro</h1>
            <h4>Bem vindo de volta! Por favor, preencha o formulário.</h4>
          </hgroup>
      </header>
      <div class='book__form-group'>
        <label for='titulo_livro'>Título</label>
        <input type='text' name='titulo_livro' placeholder='Qual é o nome do livro?' value='<?php $result['titulo_livro'] ?>' required />
      </div>
      <div class='book__form-group'>
        <label for='codigo_ibsn'>ISBN</label>
        <input type='text' name='codigo_ibsn' placeholder='Possuí o ISBN' value='<?php $result['codigo_ibsn'] ?>' required />
      </div>
      <div class='book__form-group'>
        <label for='autor_livro'>Autor</label>
        <input type='text' name='autor_livro' placeholder='Quem é o autor?' value='<?php $result['autor_livro'] ?>' required />
      </div>
      <div class='book__form-group'>
        <label for='nome_editora'>Editora</label>
        <input type='text' name='nome_editora' placeholder='O livro é de qual editora?' value='<?php $result['nome_editora'] ?>' required />
      </div>
      <div class='book__form-group'>
        <label for='quant_pagina'>Qtd. Páginas</label>
        <input type='number' name='quant_pagina' placeholder='Ex.: 100, 350...' value='<?php $result['quant_pagina'] ?>' required />
      </div>
      <div class='book__action'>
        <button class='book__button add' type='submit'>Alterar</button>
        <button class='book__button clear' type='reset'>Limpar campos</button>
        <input type='hidden' name='cod_livro' value='<?php $cod_livro ?>' />
      </div>
    </form>
  </main>
</body>
</html>
