<?php
  $firstValue = $_GET['firstValue'] ?? 0;
  $secondValue = $_GET['secondValue'] ?? 0;

  function somador (int $x, int $y): string {
    $evaluate = $x + $y;

    if ($evaluate <= 20) {
      return ($evaluate - 5).'</br>';
    }

    return ($evaluate + 8).'</br>';
  }

  echo somador($firstValue, $secondValue);
?>