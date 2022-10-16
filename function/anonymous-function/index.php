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

  echo $somar(3, 4, "Leehaney");

?>