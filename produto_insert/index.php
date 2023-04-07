<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de produtos</title>
</head>
<body>
  <h1>Cadastro de produtos</h1>
  <hr/>
  <form name='cadastro' method='POST' action='./add.php'>
    <label for='descricao_produto'>Descrição do produto:</label>
    <input type='text' name='descricao_produto' required />
    <label for='preco_produto'>Preço do produto:</label>
    <input type='number' name='preco_produto' required />
    <button type='submit'>Cadastrar</button>
  </form>
</body>
</html>