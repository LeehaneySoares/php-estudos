<?php
  // function calcular_obesidade($peso, $altura) {
  //   return $peso / ($altura ** 2);
  // };

  // $result = calcular_obesidade(80, 1.73);

  // echo $result.'</br>';

  // Utilizando variáveis globais;

  // function km2mi ($quilometro) { // Na primeira chamada $quilometro é = 100, e depois é = 200;
  //   global $total; // a variável total está disponível apenas neste arquivo;
  //   $total += $quilometro;
  //   return $quilometro * 0.6;
  // }

  // echo 'percorreu'.PHP_EOL.km2mi(100).PHP_EOL.'milhas </br>';
  // echo 'percorreu'.PHP_EOL.km2mi(200).PHP_EOL.'milhas </br>';
  // echo 'percorreu no total'.PHP_EOL.$total.PHP_EOL.'quilometros </br>';

  // Utilizando varáveis estáticas;

  // function percorre ($quilometro) {
  //   static $total;
  //   $total += $quilometro;

  //   echo "Percorreu mais $quilometro do total de $total </br>";
  // }

  // percorre(100);
  // percorre(250);
  // percorre(1000);

  // Trabalhando com passagem de parâmetros por valor e por referencia;

  function passagem (&$referencia, $valor) {
    echo "Esse argumento utiliza a passagem por referencia: $referencia </br>";
    $referencia = 'Testando a referencia';
    echo "Esse argumento é por valor: $valor </br>";
    $valor = 5255;
  }

  // parâmetros passados por referencia, caso tenha alguma alteração dentro da função,
  // seu valor original será alterado também;

  $nome = 'Leehaney';
  $valor = 50;

  passagem($nome, $valor);
  echo "Esse é o parâmetro (referencia) modificado dentro da função: $nome </br>";
  echo "Esse é o parâmetro (valor) modificado dentro da função: $valor </br>";
?>