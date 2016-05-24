<?php

/*
 * Classe: departamento Controller
 *
 */

class departamento extends controller {
    var $campo_chave = 'DEPCOD';
    
  public function index_action() {    
    $this->template->fetchJS('/files/js/departamento/departamento.js');
    $this->template->run();

    $model = new departamentoModel();
    $sql = $this->campo_chave ." > 0";
    $departamento_lista = $model->getlistadepartamento($sql);  
    $this->smarty->assign('departamento_lista', $departamento_lista);  

    $this->smarty->display('departamento/form_departamento_busca.html');
  }

  public function busca_departamento() {
    $texto = $_REQUEST['texto'];
    
    //var_dump($_REQUEST);die;

    sleep(1); //simula demora
    $model = new departamentoModel();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "upper(0) like upper('%" . $texto . "%')";
    $resultado = $model->getlistadepartamento($sql);
    if (sizeof($resultado) > 0) {
      $this->smarty->assign('departamento_lista', $resultado);
      $tabela_html = $this->smarty->fetch('departamento/grid_departamento.tpl');
      echo $tabela_html;
    } else {
      echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
    }
  }
  
  //Novo Edita Registro
  public function novo_departamento(){   
    $campo_chave = $this->getParam($this->campo_chave);
    $campo_chave = isset($campo_chave)?$campo_chave:NULL;
    $model = new departamentoModel();
    $registro = $model->getdepartamento($campo_chave);
    if (!is_null($campo_chave)){
      
    }
   // var_dump($registro);die;
    $this->smarty->assign('registro', $registro[0]);    
    $this->smarty->display('departamento/form_departamento_novo.tpl');
  }
  
  
  //Gravar departamento
  public function gravar_departamento() {
    $model = new departamentoModel();
    $data = $this->trataPost($_POST);
    if ($data[$this->campo_chave] == NULL)
      $model->setdepartamento($data);
    else
      $model->upddepartamento($data);
    return;
  }

  private function trataPost($post) {
    //$date = new date();
            $data['DEPCOD'] = isset($post['DEPCOD'])? $post['DEPCOD'] : NULL;
        $data['DEPNOM'] = isset($post['DEPNOM'])? $post['DEPNOM'] : NULL;
        
    return $data;
  }  
  
  //Remove
  public function deldepartamento() {
    $chave = $this->getParam($this->campo_chave);
    if (!is_null($chave)) {
      $model = new departamentoModel();
      $dados[$this->campo_chave] = $chave;
      $retorno = $model->deldepartamento($dados);
      echo $retorno;
    }
  }  
  
}

?>