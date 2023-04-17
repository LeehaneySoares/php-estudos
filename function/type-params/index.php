<?php
  function somar( int | string $n1, int $n2 ) {
    if (is_string($n1)) {
      return $n1.$n2;
    } else {
      return $n1 + $n2;
    }
  }

  $result1 = somar("Leehaney", 3);
  $result2 = somar(5, 5);

  echo "A primeira Função: ".$result1." A segunda função: ".$result2;
?>