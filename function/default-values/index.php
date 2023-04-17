<?php
  function somar ($n1, $n2, $n3 = 0) {
    return $n1 + $n2 + $n3;
  }

  $result1 = somar(5, 5, 3);
  $result2 = somar(5, 4);

  echo "Resultado da função1: ".$result1." .Resultado da função2: ".$result2;
?>