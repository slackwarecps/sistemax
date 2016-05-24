<?php

/*
 * Classe: about Controller
 *
 */

class about extends controller {
    var $campo_chave = 'id_usuario';
    
  public function index_action() {    
    $this->template->fetchJS('/files/js/about/about.js');
    $this->template->run();

    $model = new aboutModel();
    $sql = $this->campo_chave ." > 0 and (status<>0)";
    $about_lista = $model->getlistaabout($sql);  
    $this->smarty->assign('about_lista', $about_lista);  

    $this->smarty->display('about/form_about_busca.html');
  }

  public function busca_about() {
    $texto = $_REQUEST['texto'];
    
    //var_dump($_REQUEST);die;

    sleep(1); //simula demora
    $model = new aboutModel();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "upper(0) like upper('%" . $texto . "%') and (status<>0)";
    $resultado = $model->getlistaabout($sql);
    if (sizeof($resultado) > 0) {
      $this->smarty->assign('about_lista', $resultado);
      $tabela_html = $this->smarty->fetch('about/grid_about.tpl');
      echo $tabela_html;
    } else {
      echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
    }
  }
  
  //Novo Edita Registro
  public function novo_about(){   
    $campo_chave = $this->getParam($this->campo_chave);
    $campo_chave = isset($campo_chave)?$campo_chave:NULL;
    $model = new aboutModel();
    $registro = $model->getabout($campo_chave);
    if (!is_null($campo_chave)){
      
    }
   // var_dump($registro);die;
    $this->smarty->assign('registro', $registro[0]);    
    $this->smarty->display('about/form_about_novo.tpl');
  }
  
  
  //Gravar about
  public function gravar_about() {
    $model = new aboutModel();
    $data = $this->trataPost($_POST);
    if ($data[$this->campo_chave] == NULL)
      $model->setabout($data);
    else
      $model->updabout($data);
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
  public function delabout() {
    $chave = $this->getParam($this->campo_chave);
    if (!is_null($chave)) {
      $model = new aboutModel();
      $dados[$this->campo_chave] = $chave;
      $retorno = $model->delabout($dados);
      echo $retorno;
    }
  }  
  
}

?>