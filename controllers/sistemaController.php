<?php

/*
 * Classe: sistema Controller
 *
 */

class sistema extends controller {
    var $campo_chave = 'id_sistema';
    
  public function index_action() {    
    $this->template->fetchJS('/files/js/sistema/sistema.js');
    $this->template->run();

    $model = new sistemaModel();
    $sql = $this->campo_chave ." > 0 and (status<>0)";
    $sistema_lista = $model->getlistasistema($sql);  
    $this->smarty->assign('sistema_lista', $sistema_lista);  

    $this->smarty->display('sistema/form_sistema_busca.html');
  }

  public function busca_sistema() {
    $texto = $_REQUEST['texto'];
    
    //var_dump($_REQUEST);die;

    sleep(1); //simula demora
    $model = new sistemaModel();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "upper(0) like upper('%" . $texto . "%') and (status<>0)";
    $resultado = $model->getlistasistema($sql);
    if (sizeof($resultado) > 0) {
      $this->smarty->assign('sistema_lista', $resultado);
      $tabela_html = $this->smarty->fetch('sistema/grid_sistema.tpl');
      echo $tabela_html;
    } else {
      echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
    }
  }
  
  //Novo Edita Registro
  public function novo_sistema(){   
    $campo_chave = $this->getParam($this->campo_chave);
    $campo_chave = isset($campo_chave)?$campo_chave:NULL;
    $model = new sistemaModel();
    $registro = $model->getsistema($campo_chave);
    if (!is_null($campo_chave)){
      
    }
   // var_dump($registro);die;
    $this->smarty->assign('registro', $registro[0]);    
    $this->smarty->display('sistema/form_sistema_novo.tpl');
  }
  
  
  //Gravar sistema
  public function gravar_sistema() {
    $model = new sistemaModel();
    $data = $this->trataPost($_POST);
    if ($data[$this->campo_chave] == NULL)
      $model->setsistema($data);
    else
      $model->updsistema($data);
    return;
  }

  private function trataPost($post) {
    //$date = new date();
            $data['id_sistema'] = isset($post['id_sistema'])? $post['id_sistema'] : NULL;
        $data['descricao'] = isset($post['descricao'])? $post['descricao'] : NULL;
        
    return $data;
  }  
  
  //Remove
  public function delsistema() {
    $chave = $this->getParam($this->campo_chave);
    if (!is_null($chave)) {
      $model = new sistemaModel();
      $dados[$this->campo_chave] = $chave;
      $retorno = $model->delsistema($dados);
      echo $retorno;
    }
  }  
  
}

?>