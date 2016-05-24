<?php

class contato extends controller {
  public function index_action() {
    $this->template->fetchJS('/files/js/contato.js');
    $this->template->run();    
    $this->smarty->display('contato.tpl');    
  }
  public function gravar() {
    //var_dump($_REQUEST);die;
    header("Location: /index");   
    exit();    
  }  
}

?>