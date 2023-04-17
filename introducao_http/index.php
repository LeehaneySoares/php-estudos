<?php
  require('./header.php');
?>

<form method="POST" action="./receiver.php">
  <div class="form-group">
    <label for="name">Usuário:</label>
    <input type="text" name="name" />
  </div>
  <div class="form-group">
    <label for="senha">Senha:</label>
    <input type="password" name="senha" />
  </div>
  <button type="submit">Enviar</button>
</form>