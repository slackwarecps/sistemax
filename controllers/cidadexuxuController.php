<?php

/*
* Gerado pelo Framework Tools 1.0
* Classe: Controller
*
*/

class cidadexuxu extends controller {
  public function index_action() { 
    $this->template->fetchJS('/files/js/cidadexuxu/cidadexuxu.js');  
    $this->template->run();
    $this->smarty->display('cidadexuxu/cidadexuxu_page.html');    
  }
}
?>