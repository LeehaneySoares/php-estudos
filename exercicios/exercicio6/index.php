<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex-06</title>
</head>
<body>
  <h1>Verificando se um número é positivo, negativo ou igual a zero</h1>
  <hr />
  <form method='POST'>
    <div class='form__group'>
      <label>Primeiro valor:</label>
      <input type='number' name='firstValue' />
    </div>
    <button type='submit' class='form__submit' onclick='document.querySelector(this).addEventListener("click", (event) =>
      event.preventDefault())'>Verificar</button>
  </form>
  <?php
      $value = $_POST['firstValue'];

      if ($value < 0) {

        $result = 'número negativo';

      } elseif ($value == 0) {

        $result = 'número igual à zero';

      } else {

        $result = 'número positivo';
      }

    print_r($result);
  ?>
</body>
</html>