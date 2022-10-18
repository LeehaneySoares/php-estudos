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

  function fatorial ($numero, $fator = 1) {
    $fator *= $numero;
    echo "$numero x ";
    $numero--;
    if ($numero > 1) {
      fatorial($numero, $fator);
    } else {
      echo "$numero = $fator";
    }
  }

  fatorial(8)
?>