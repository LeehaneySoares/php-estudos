<?php
  $firstValue = filter_input(INPUT_GET, 'firstValue') ?? 0;
  $secondValue = filter_input(INPUT_GET, 'secondValue') ?? 0;

  function calculate (int $x = 0, int $y = 0): int {
    $evaluate = $x + $y;

    if ($evaluate <= 20) {
      return $evaluate - 5;
    }

    return $evaluate + 8;
  }

  echo calculate($firstValue, $secondValue);
?>