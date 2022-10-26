<?php
  $timestamp =  mktime(0, 0, 0, date("m"), date("d"), date("Y") + 1);
  echo date('d/m/Y', $timestamp);

  #echo date('d-m-Y H.i.s');


?>