<?php
  function lerNomes () {
    $args = func_get_args();
    $quantity = func_num_args();

    for ($i = 0; $i < $quantity; $i++) {
      echo $args[$i].'Está na posição: '.$i.'</br>';
    }
  }

  lerNomes('Leehaney', 'Valmira', 'Taylor', 'Betania');
?>