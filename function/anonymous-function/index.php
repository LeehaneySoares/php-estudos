<?php
  /**
   * TODO: O tipo de valor mixed podem ser:
   * "boolean"
   * "integer"
   * "double"
   * "string"
   * "array"
   * "object"
   * "resource"
   * "NULL"
   */

  $somar = function (int $n1, int $n2, mixed $n3 = 0) {
    return "A soma dos primeiros parâmetro é: ".$n1 + $n2.". O valor do terceiro parâmetro é: $n3";
  };

  # echo $somar(3, 4, "Leehaney");


  $dizimo = function (float $valor): float {
    return $valor * 0.1;
  };

  $funcao = $dizimo;

  # echo $funcao(89);

  $upperText = function (string $text): string {
    return mb_strtoupper($text);
  };

  function outraFuncao (int $valor, mixed $returnFunction): string {
    return "O primeiro parâmetro é: $valor e o segundo é: $returnFunction";
  }

  // Podemos passar funções como parâmetros para outra função
  echo outraFuncao(10, $upperText("Olá, eu sou Leehaney!"));

?>