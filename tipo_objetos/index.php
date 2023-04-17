<?php
  include('../switch/index.php');

  class Computador {
    public $cpu;

    function ligar () {
      echo "Ligando o computador a {$this->cpu}...</br>";
      echo __LINE__.'</br>';
      echo __CLASS__;
      echo __FILE__.'</br>';
      echo $w;
    }
  }

  $obj = new Computador;
  $obj->cpu = '500Mhz';
  $obj->ligar();
?>