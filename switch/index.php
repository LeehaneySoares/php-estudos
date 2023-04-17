<?php
  // Switch

  $x = 1;
  $y = 2;
  $w = $x + $y;

  switch($w) {
    case 0:
      echo "O resultado é 0";
      break;
    case 1:
      echo "O resultado é 1";
      break;
    case 2 || 3:
      echo "O resultado é 2";
      break;
  }

?>