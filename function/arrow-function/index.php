<?php
  $somar = fn(int $n1, int $n2): int => $n1 + $n2;
  $sub = fn(int $n1, int $n2): int => $n1 - $n2;  
  $multiplicar = fn(int $n1, int $n2): int => $n1 * $n2;
  $dividir = fn(int $n1, int $n2): int => $n1 / $n2;

  echo "
  Soma: ".$somar(5, 5)."</br>".
  "Subtração: ".$sub(5, 5)."</br>".
  "Multiplicação: ".$multiplicar(5, 5)."</br>".
  "Divisão: ".$dividir(5, 5);
?>