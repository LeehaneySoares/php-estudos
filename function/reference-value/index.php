<?php
  function somar ($n1, $n2, &$total) { // Já aqui a variável $total não é mais 0 e sim o próprio $z.
    $total = $n1 + $n2;
  }

  $x = 10;
  $y = 20;
  $z = 0;

  somar($x, $y, $z); // A variável $z é igual a 0.

  #echo "Total é: ".$z;


  //===================================================================================================

  function caixaAlta (string $text1, string $text2, &$phrase) {
    $phrase = mb_strtoupper($text1.$text2);
  }

  $text = '';

  caixaAlta("Olá Leehaney,", " Tudo bem ?", $text);

  echo $text;

?>