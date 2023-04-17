<?php
  $numeros = [];

  function randNumbers(int $min = 0, int $max = 9): int {
    return rand($min, $max);
  };

  function generateArray (array $array): array {
    for ($i = 0; $i < 9; $i++) {
      array_push($array, randNumbers());
    }

    return $array;
  }

  function orderNumbers (array $array): array {
    for($i = 0; $i < count($array) - 1; $i++) {
      for($j = $i + 1; $j < count($array); $j++) {
        $temp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $temp;
      }
    }

    return $array;
  }

  $numeros = generateArray($numeros);
  $numeros = orderNumbers($numeros);
  print_r($numeros);
?>