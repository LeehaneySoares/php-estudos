<?php
  $numero = -8.95;
  $otherNumber = 5.55;

  echo abs($numero)."</br>"; // Torna um número negativo em positivo.

  echo pi()."</br>"; // Nos retorna o valor de PI.

  echo floor($otherNumber)."<hr/>"; // Arredonda para baixo
  /*
    Arredonda para cima se o número depois da vírgula é igual ou maior que 5 e arredonda para baixo se for menor
  */
  echo round($otherNumber, 1)."<hr/>";
  echo ceil($otherNumber)."</br>"; // Arredonda para cima.

  echo rand(50, 100)."</br>"; // Gerar números aleatórios

  $lista = [50, 40, 60, 80, 30];

  print_r($lista).PHP_EOL;
  echo "</br>";
  echo "MAX: ".max($lista)."</br>";
  echo "MIN: ".min($lista)."</br>";
?>