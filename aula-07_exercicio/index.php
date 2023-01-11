<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario - Cadastro</title>
</head>
<body>
  <main>
    <form method='POST' action='recebedor.php'>
      <fieldset>
        <legend><label for='name'>Nome:</label></legend>
        <input type='text' name='nome' placeholder='Seu nome completo' />
      </fieldset>
      <fieldset>
        <legend><label for='age'>Idade:</label></legend>
        <input type='number' name='idade' placeholder='Apenas números' />
      </fieldset>
      <fieldset>
        <legend><label for='city'>Cidade:</label></legend>
        <input type='text' name='cidade' placeholder='Sua cidade atual' />
      </fieldset>
      <fieldset>
        <legend><label for='state'>Estados que visitou:</label></legend>
        <select name='uf[]' multiple size='10'>
          <optgroup label='nordeste'>
            <option value='MA'>Maranhão</option>
            <option value='PI'>Píaui</option>
            <option value='CE'>Ceara</option>
            <option value='RN'>Rio grade do norte</option>
          </optgroup>
          <optgroup label='sudeste'>
            <option value='ES'>Espirito Santo</option>
            <option value='RJ'>Rio de Janeiro</option>
            <option value='SP'>São Paulo</option>
            <option value='MG'>Minas Gerais</option>
          </optgroup>
        </select>
      </fieldset>
      <button type='submit'>Enviar formulario</button>
    </form>
  </main>
</body>
</html>