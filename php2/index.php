<?php
 //Arrays

  // $ingredientes = [
  //   'açucar',
  //   'farinha de trigo',
  //   'ovo',
  //   'leite',
  //   'fermento em pó'
  // ];

  // $i = 0;
  // while ($i < 5) {
  //   echo "$ingredientes[$i] <br/>";
  //   $i++;
  // }

 //Array Spread
 //Similiar com o que temos em Javascript 

  $bolo1 = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
  ];

  $bolo2 = [
    'Leehaney',
    'Soares',
    ...$bolo1,
    'corante',
    'farinha lacta'
  ];

  print_r($bolo1)

?>