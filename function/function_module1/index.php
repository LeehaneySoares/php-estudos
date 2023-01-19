<?php
  function calcular_obesidade($peso, $altura) {
    return $peso / ($altura ** 2);
  };

  $result = calcular_obesidade(80, 1.73);

  echo $result.'</br>';

  function km2mi ($quilometro) { // Na primeira chamada $quilometro é = 100, e depois é = 200;
    global $total; // a variável total está disponível apenas neste arquivo;
    $total += $quilometro;
    return $quilometro * 0.6;
  }

  echo 'percorreu'.PHP_EOL.km2mi(100).PHP_EOL.'milhas </br>';
  echo 'percorreu'.PHP_EOL.km2mi(200).PHP_EOL.'milhas </br>';
  echo 'percorreu no total'.PHP_EOL.$total.PHP_EOL.'quilometros </br>';

  header('location: teste.php');
?>