<?php

//Variáveis em PHP
  // $nome = 'Leehaney';
  // $sobrenome = 'Soares';

//Mesclando variáveis / concatenando
  // $nome = 'Leehaney';
  // $sobrenome = 'Soares';
  // $nomeCompleto = $nome.' '.$sobrenome;

//Aspas simples e duplas
  // '' -> Interpreta o valor literal de uma String, ou seja, usado apenas para strings
  // "" -> Interpreta strings e variáveis, similar ao Template String do Javascript `${}`

  // $nome = 'Leehaney';
  // $sobrenome = 'Soares';
  // $nomeCompleto = "$nome $sobrenome";
  // $idade = 25;

  // echo "o nome completo de $nome é: ($nomeCompleto) e sua idade é: $idade"

// Interpretação com Strings e números
  // $x = '3';
  // $y = 5;
  // /**
  //  * O PHP entende que o $x é uma string, mas ao verificar que possui o simbolo de adição
  //  * ele converte para número e faz a soma!
  //  */
  // $w = $x+$y; 

  // echo $w;

  $nome = 'Leehaney';
  $sobrenome = 'Soares';

  $nomeCompleto = $nome;
  $nomeCompleto .= $sobrenome; // . concatena Strings

  echo $nomeCompleto

?>