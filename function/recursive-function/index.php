<?php
  function dividir ($numero) {
    if ($numero === 0) {
      return $numero;
    }

    $metade = $numero / 2;
    echo $metade."</br>";

    return dividir($metade);
  }

  //fatorial(10000);

  //================================================================================

  function fatorial ($numero = 7) {
    if ($numero == 1) return $numero;
    return $numero * fatorial($numero - 1);
  }

  echo 'O fatorial de 10 é: '.fatorial();
?>