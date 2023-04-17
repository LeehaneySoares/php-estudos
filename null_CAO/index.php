<?php
  //NULL CAO e isset()

  $nome = 'Leehaney';
  // $sobrenome = 'Soares';


  $nomeCompleto = $nome;
  $nomeCompleto .= $sobrenome ?? ' Ferreira';
  
  echo $nomeCompleto;
?>