<?php

/*
 * Classe: xuxu Controller
 *
 */

class opa extends controller {
  
    
  public function index_action() {    
    $this->template->fetchJS('/files/js/opa/opa.js');
    $this->template->run();
    var_dump($_SESSION);
    $this->smarty->display('opa/opa.html');
  }
}

?>