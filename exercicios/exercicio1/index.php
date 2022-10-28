<?php
  // $lista = [
  //   'nome' => 'Leehaney',
  //   'idade' => 90,
  //   'atributos' => [
  //     'forca' => 60,
  //     'agilidade' => 80,
  //     'destreza' => 50
  //   ],
  //   'vida' => 1000,
  //   'mana' => 928
  // ];

  // echo "NOME: $lista[nome] <br/>";
  // echo "FORÇA: ".$lista['atributos']['forca']." <br/>";
  // echo "VIDA: ".$lista['vida'];

  $lista = [
    'nome' => 'Leehaney',
    'sobrenome' => 'Soares',
    'idade' => 25,
    'anoNasc' => 1997
  ];

  /**
   * Ao definirmos uma arrow (=>) conseguimos definir alias (atalhos) para os índices de arrays
   * Com isso, não precisamos pegar o conteúdo atráves de [0], [1], [2]...
   */

  echo "$lista[nome] $lista[sobrenome], nasceu em $lista[anoNasc] e tem $lista[idade] anos";

?>