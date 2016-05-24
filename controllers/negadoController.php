<?php

class negado extends controller {
  public function index_action() {    
    $this->template->run();    
    $this->smarty->display('negado.tpl');    
  }
}

?>