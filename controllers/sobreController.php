<?php

class sobre extends controller {
  public function index_action() {
    $this->template->fetchJS('/files/js/sobre.js');
    $this->template->run();    
    $this->smarty->display('sobre.tpl');    
  }
}

?>
