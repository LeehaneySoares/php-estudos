<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro-PHP</title>
</head>
<body>
  <form name='cadastro' method='GET' action='cadastro.php'>
    <table>
      <tr>
        <td>
          <fieldset>
            <legend><label for='name'>Nome</label></legend>
            <input type='text' name='nome' placeholder='Digite seu nome' size='20'/>
          </fieldset>
        </td>
      </tr>
      <tr>
        <td>
          <fieldset>
            <legend><label for='dataNasc'>Data de nascimento:</label></legend>
            <input type='date' name='dataNasc' />
          </fieldset>  
        </td>
      </tr>
      <tr>
        <td>
          <fieldset>
            <legend><label for='addres'>Endereço:</label></legend>
            <input type='address' name='endereco' placeholder='seu endereço' />
          </fieldset>
        </td>
      </tr>
      <tr>
        <td>
          <fieldset>
            <legend><label for='estadoCivil'>Estado civil:</label></legend>
            <select>
              <option value='solteiro'>Solteiro</option>
              <option value='casado'>Casado</option>
              <option value='divorciado'>Divorciado</option>
              <option value='viuvo'>Viúvo(a)</option>
            </select>
          </fieldset>
        </td>
      </tr>
      <tr>
        <td>
          <fieldset>
            <legend><label for='sexo'>Sexo:</label></legend>
            <div class='form-group'>
              <label>masculino</label>
              <input type='radio' name='sexo[]' value='masculino' />
            </div>
            <div class='form-group'>
              <label>Feminino</label>
              <input type='radio' name='sexo[]' value='feminino' />
            </div>
            <div class='form-group'>
              <label>Outro</label>
              <input type='radio' name='sexo[]' value='outro' />
            </div>
          </fieldset>
        </td>
      </tr>
      <tr>
        <td>
          <fieldset>
            <legend><label for='locomotion'>Meio de locomoção:</label></legend>
            <div class='form-group'>
              <label>Veículo próprio</label>
              <input type='checkbox' name='locomocao[]' value='veiculoProprio' />
            </div>
            <div class='form-group'>
              <label>Coletivo</label>
              <input type='checkbox' name='locomocao[]' value='coletivo' />
            </div>
            <div class='form-group'>
              <label>Veículo próprio</label>
              <input type='checkbox' name='locomocao[]' value='bicicleta'/>
            </div>
          </fieldset>
        </td>
      </tr>
      <tr>
        <td>
          <fieldset>
            <legend><label for='senha'>Senha:</label></legend>
            <input type='password' name='senha' placeholder='senha de 8 dígitos' maxlength='8' />
            <input type='password' name='confirm' placeholder='Sua senha novamente' maxlength='8' />
          </fieldset>
        </td>
      </tr>
      <tr>
        <td>
          <button type='submit'>Enviar</button>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>