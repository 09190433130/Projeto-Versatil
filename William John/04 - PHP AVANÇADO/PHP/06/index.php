<?php namespace fub;
  include 'arquivo1.php';
  include 'arquivo2.php';
  include 'arquivo3.php';
  use bichano as felino;
  use toto as canino;
  use outro\animais;
  echo felino\Gato::diz(), "<br />\n";
  echo canino\Cachorro::diz(), "<br />\n";
  echo animais\Animal::respira(), "<br />\n";  
  ?>