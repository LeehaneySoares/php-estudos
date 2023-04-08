<?php
  $value = $_POST['value'] ?? 0;
  $result;

  function multiple (int $multiplicador, int $multiplicando): string {
    $result = $multiplicador * $multiplicando;

    return "$multiplicador x $multiplicando = $result <br/>";
  }

  for ($i = 0; $i <= 10; $i++) {
    echo multiple($value, $i);
  }
?>