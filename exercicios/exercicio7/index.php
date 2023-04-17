<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex-07</title>
</head>
<body>
  <h1>Exibindo a tabuada solicitada</h1>
  <hr />
  <form method='POST'>
    <div class='form__group'>
      <label>Mostrar tabuada do:</label>
      <input type='number' name='value' />
    </div>
    <button type='submit' class='form__submit' onclick='
      document.querySelector(this).addEventListener("click", (event) =>
      event.preventDefault())'
    >Verificar</button>
  </form>
  <?php include './tabuada.php' ?>
</body>
</html>