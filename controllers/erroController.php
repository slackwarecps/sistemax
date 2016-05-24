<?php

class erro extends controller{
  
  public function index_action(){
    
    $msg = "Whoops!";
    
    $this->template->setTitle('Erro Whoops!');
    $this->smarty->assign('msg', $msg);
    $this->smarty->display('erro.html');
   
  }
}


?>
