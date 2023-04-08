<?php
  function verificaNumero (): string {
    $firstValue = $_POST['firstValue'];

    if ($firstValue < 0) return print_r('número negativo');
    if ($firstValue === 0) return print_r('número igual a zero');
    if ($firstValue > 0) return print_r('número positivo');
  }

  verificaNumero()
?>