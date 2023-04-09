<?php
  
  function multiple ($multiplicando = 0) {
    if ($multiplicando > 10) return;

    $value = $_POST['value'] ?? 0;
    $result = $value * $multiplicando;

    echo "$value x $multiplicando = $result </br>";

    return multiple($multiplicando += 1);
  }

  multiple();
?>