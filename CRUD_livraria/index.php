<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='icon' type='icon/png' href='./assets/images/logo.png' />
  <link rel='stylesheet' type='text/css' href='./assets/css/style.css' />
  <title>Cadastro de livros</title>
</head>
  <body>
    <main class='book'>
      <form class='book__form' name='book' method='POST' action='./addBook.php'>
        <header class='book__logo'>
          <img src='./assets/images/logo.png' alt='Leeh' />
          <hgroup class='book__hgroup'>
            <h1>Cadastro de livros</h1>
            <h4>Bem vindo de volta! Por favor, preencha o formulário.</h4>
          </hgroup>
        </header>
        <div class='book__form-group'>
          <label for='title'>Título</label>
          <input type='text' name='title' placeholder='Qual é o nome do livro?' required />
        </div>
        <div class='book__form-group'>
          <label for='isbn'>ISBN</label>
          <input type='text' name='isbn' placeholder='Possuí o ISBN' required />
        </div>
        <div class='book__form-group'>
          <label for='autor'>Autor</label>
          <input type='text' name='autor' placeholder='Quem é o autor?' required />
        </div>
        <div class='book__form-group'>
          <label for='editora'>Editora</label>
          <input type='text' name='editora' placeholder='O livro é de qual editora?' required />
        </div>
        <div class='book__form-group'>
          <label for='qtdPaginas'>Qtd. Páginas</label>
          <input type='number' name='qtdPaginas' placeholder='Ex.: 100, 350...' required />
        </div>
        <div class='book__action'>
          <button class='book__button add' type='submit'>Adicionar</button>
          <button class='book__button viewer add' type='button'>
            <a href=./view/index.php>Visualizar registros</a>
          </button>
          <button class='book__button clear' type='reset'>Limpar campos</button>
        </div>
      </form>
    </main>
  </body>
</html>