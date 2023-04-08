<?php
  $value = $_POST['value'] ?? 0;

  for ($i = 0; $i <= 10; $i++) {
    $result = $value * $i;
    echo "$value x $i = $result </br>";
  }
?>