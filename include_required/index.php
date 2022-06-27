<?php

  /**
   *  TODO: include é semelhante ao import do JS. 
   */
  include './biblioteca.php';
  /**
   * TODO: O require é semelhante ao include, diferença apenas na manipulação dos erros
   * Enquanto o include lança um warning o require lança um FATAL ERROR;
   */
  require './biblioteca.php';

  echo 'Quadrado: '.quadrado(9).'<br/>';
  echo '<h1>'.message('Hello, world!').'</h1>'

?>