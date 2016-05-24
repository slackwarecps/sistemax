<?php

class dashboard extends controller {
  public function index_action() {
    $this->template->fetchJS('/files/js/dashboard.js');
    $this->template->run();    
    //$this->smarty->display('dashboard.tpl');    
    $this->smarty->display('home.tpl');  
  }
}

?>
