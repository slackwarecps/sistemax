<?php

class depto extends controller {
  
  public function index_action() {
    $this->template->fetchJS('/files/js/depto.js');
    $this->template->run();
    $this->smarty->display('departamento/form_departamento_busca.html');    
  }
  
 public function formulario_contato() {

    $this->template->fetchJS('/files/js/jquery.mask.js');
    $this->template->fetchJS('/files/js/empresa/contato.js');

    /* Executa */
    $this->template->run();

    /* Breadcrumbs */
    $this->trail->add('Home', $this->path_root, 0);
    $this->trail->add(translate::t('Empresa'), $this->path_root . '/empresa', 1);
    $this->trail->add(translate::t('Formulário de contato'), $this->path_root . '/empresa/formulario_contato', 2);
    $breadcrumb = $this->trail->output();

    /* Atribui os campos */
    $this->smarty->assign('breadcrumb', $breadcrumb);

    /* Chama a view */
    $this->smarty->display('comuns/' . $this->template->pasta_organizacao . '/formulario_contato.html');
  }
  
}

?>