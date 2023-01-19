<?php
  require('./function/function_module1/index.php');
  /*
    mesmo importando o total do arquivo que ela pertence, não podemos utilizarmos em outro arquivo;
    Ela só está presente naquele "modulo" php.
  */
  echo $total; 
?>