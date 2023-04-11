<?php
  session_start();

  if ($_SESSION['nome']) {
    header('Location: index.php');
    exit;
  }
?>

<form method='POST' action='./recebe.php'>
  <div class='form-group'>
    <label>Qual é o seu nome?</label>
    <input type='text' name='nome' />
  </div>
  <button type='submit'>Enviar</button>
</form>