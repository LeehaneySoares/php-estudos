<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ex-08</title>
</head>
<body>
  <form method='GET'>
    <div class='form-group'>
      <label>Primeiro valor</label>
      <input type='number' name='firstValue'/>
    </div>
    <div class='form-group'>
      <label>Segundo valor</label>
      <input type='number' name='secondValue'/>
    </div>
    <button type='submit'>Verificar</button>
  </form>
  <?php include './somador.php' ?>
  <script src='./script.js'></script>
</body>
</html>