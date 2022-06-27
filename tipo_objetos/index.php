<?php
  class Computador {
    public $cpu;

    function ligar () {
      echo "Ligando o computador a {$this->cpu}...";
    }
  }

  $obj = new Computador;
  $obj->cpu = '500Mhz';
  $obj->ligar();
?>