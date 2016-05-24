<?php

/*
 * Classe: lixo Controller
 *
 */

class lixo extends controller {
    var $campo_chave = 'id_usuario';
    
  public function index_action() {    
    $this->template->fetchJS('/files/js/lixo/lixo.js');
    $this->template->run();

    $model = new lixoModel();
    $sql = $this->campo_chave ." > 0 and (status<>0)";
    $lixo_lista = $model->getlistalixo($sql);  
    $this->smarty->assign('lixo_lista', $lixo_lista);  

    $this->smarty->display('lixo/form_lixo_busca.html');
  }

  public function busca_lixo() {
    $texto = $_REQUEST['texto'];
    
    //var_dump($_REQUEST);die;

    sleep(1); //simula demora
    $model = new lixoModel();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "upper(0) like upper('%" . $texto . "%') and (status<>0)";
    $resultado = $model->getlistalixo($sql);
    if (sizeof($resultado) > 0) {
      $this->smarty->assign('lixo_lista', $resultado);
      $tabela_html = $this->smarty->fetch('lixo/grid_lixo.tpl');
      echo $tabela_html;
    } else {
      echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
    }
  }
  
  //Novo Edita Registro
  public function novo_lixo(){   
    $campo_chave = $this->getParam($this->campo_chave);
    $campo_chave = isset($campo_chave)?$campo_chave:NULL;
    $this->template->fetchJS('/files/js/lixo/lixo.js');    
    $this->template->run();
    $model = new lixoModel();
    $registro = $model->getlixo($campo_chave);
    if (!is_null($campo_chave)){
      
    }
   // var_dump($registro);die;
    $this->smarty->assign('registro', $registro[0]);    
    $this->smarty->display('lixo/form_lixo_novo.tpl');
  }
  
  
  //Gravar lixo
  public function gravar_lixo() {
    $model = new lixoModel();
    $data = $this->trataPost($_POST);
    if ($data[$this->campo_chave] == NULL)
      $model->setlixo($data);
    else
      $model->updlixo($data);
    return;
  }

  private function trataPost($post) {
    //$date = new date();
            $data['id_usuario'] = isset($post['id_usuario'])? $post['id_usuario'] : NULL;
        $data['nome'] = isset($post['nome'])? $post['nome'] : NULL;
        $data['email'] = isset($post['email'])? $post['email'] : NULL;
        $data['sistema'] = isset($post['sistema'])? $post['sistema'] : NULL;
        $data['status'] = isset($post['status'])? $post['status'] : NULL;
        $data['senha'] = isset($post['senha'])? $post['senha'] : NULL;
        
    return $data;
  }  
  
  //Remove
  public function dellixo() {
    $chave = $this->getParam($this->campo_chave);
    if (!is_null($chave)) {
      $model = new lixoModel();
      $dados[$this->campo_chave] = $chave;
      $retorno = $model->dellixo($dados);
      echo $retorno;
    }
  }  
  
}

?>