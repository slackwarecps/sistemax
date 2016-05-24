<?php

class modelo extends controller {
  public function index_action() {
    $this->template->fetchJS('/files/js/modelo.js');
    $this->template->run();    
    $this->smarty->display('modelo.tpl');    
  }
}

?>
