<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <h1>Cabeçalho</h1>
    <hr/>
    <form method='POST' action='recebedor.php'>
      <div class='form-group'>
        <label for='name'>Nome:</label>
        <input type='text' name='nome' placeholder='Insira seu nome'/>
      </div>
      <div class='form-group'>
        <label for='email'>Email:</label>
        <input type='email' name='email' placeholder='seu@email.com'/>
      </div>
      <div class='form-group'>
        <label for='senha'>Senha:</label>
        <input type='password' name='senha' maxlength='8' placeholder='máximo 8 dígito'/>
      </div>
      <button type='submit'>Enviar!</button>
    </form>
  </body>
  </html>