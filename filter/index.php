<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário - Filters</title>
</head>
<body>
  <form name='cadastro' method='POST' action='receveid.php'>
    <div class='form-group'>
      <label for='name'>Nome:</label>
      <input type='text' name='name' placeholder='Seu nome' />
    </div>
    <div class='form-group'>
      <label for='email'>Email:</label>
      <input type='email' name='email' placeholder='seu@email.com' />
    </div>
    <div class='form-group'>
      <label for='idade'>Idade:</label>
      <input type='number' name='idade' placeholder='apenas números' />
    </div>
    <div class='form-group'>
      <label for='senha'>Senha:</label>
      <input type='password' name='senha' placeholder='até 10 dígitos' />
    </div>
    <button type='submit'>Enviar informações</button>
  </form>
</body>
</html>