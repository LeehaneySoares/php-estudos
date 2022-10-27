<?php
  /**
   * TODO: o include não trava aplicação caso um arquivo não exista;
   * Lançando um Warning
   */

  include_once('biblioteca.php');
  include('biblioteca.php');
  
  /**
   * TODO: o require trava aplicação caso um arquivo não exista;
   * Lançando um Fatal Error
   */
  require('biblioteca.php');
  require_once('biblioteca.php');
?>