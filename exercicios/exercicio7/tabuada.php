<?php
  $value = $_POST['value'] ?? 0;

  function multiple ($multiplicando = 0) {
    if ($multiplicando > 10) return;

    global $value;
    $result = $value * $multiplicando;

    echo "$value x $multiplicando = $result </br>";

    return multiple($multiplicando += 1);
  }

  multiple();
?>