<?php

/*
 * Classe: xuxu Controller
 *
 */

class xuxu extends controller {
    var $campo_chave = 'id_usuario';
    
  public function index_action() {   
    //echo 'die';
    $this->template->fetchJS('/files/js/xuxu/xuxu.js');
    $this->template->run();

    $model = new xuxuModel();
    $sql = $this->campo_chave ." > 0";
    $xuxu_lista = $model->getlistaxuxu($sql);  
    $this->smarty->assign('xuxu_lista', $xuxu_lista);  

    $this->smarty->display('xuxu/form_xuxu_busca.html');
  }

  public function busca_xuxu() {
    $texto = $_REQUEST['texto'];
    
    //var_dump($_REQUEST);die;

    sleep(1); //simula demora
    $model = new xuxuModel();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "upper(0) like upper('%" . $texto . "%') and (status<>0)";
    $resultado = $model->getlistaxuxu($sql);
    if (sizeof($resultado) > 0) {
      $this->smarty->assign('xuxu_lista', $resultado);
      $tabela_html = $this->smarty->fetch('xuxu/grid_xuxu.tpl');
      echo $tabela_html;
    } else {
      echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
    }
  }
  
  //Novo Edita Registro
  public function novo_xuxu(){   
    $campo_chave = $this->getParam($this->campo_chave);
    $campo_chave = isset($campo_chave)?$campo_chave:NULL;
    $this->template->run();
    $model = new xuxuModel();
    $registro = $model->getxuxu($campo_chave);
    if (!is_null($campo_chave)){
      
    }
   // var_dump($registro);die;
    $this->smarty->assign('registro', $registro[0]);    
    $this->smarty->display('xuxu/form_xuxu_novo.tpl');
  }
  
  
  //Gravar xuxu
  public function gravar_xuxu() {
    $model = new xuxuModel();
    $data = $this->trataPost($_POST);
    if ($data[$this->campo_chave] == NULL)
      $model->setxuxu($data);
    else
      $model->updxuxu($data);
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
  public function delxuxu() {
    $chave = $this->getParam($this->campo_chave);
    if (!is_null($chave)) {
      $model = new xuxuModel();
      $dados[$this->campo_chave] = $chave;
      $retorno = $model->delxuxu($dados);
      echo $retorno;
    }
  }  
  
}

?>