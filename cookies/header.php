<h1>Cabeçalho</h1>
<?php
  $cookie = $_COOKIE['nome'] ?? '';

  if (isset($cookie)) {
    echo $cookie;
  }
?>
<hr />