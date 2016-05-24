<?php

/*
 * Classe: visitante Controller
 *
 */

class visitante extends controller {
    var $campo_chave = 'por_vis_id';
    
  public function index_action() {    
    $this->template->fetchJS('/files/js/visitante/visitante.js');
    $this->template->run();

    $model = new visitanteModel();
    $sql = $this->campo_chave ." > 0 and (status<>0)";
    $visitante_lista = $model->getlistavisitante($sql);  
    $this->smarty->assign('visitante_lista', $visitante_lista);  

    $this->smarty->display('visitante/form_visitante_busca.html');
  }

  public function busca_visitante() {
    $texto = $_REQUEST['texto'];
    
    //var_dump($_REQUEST);die;

    sleep(1); //simula demora
    $model = new visitanteModel();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "upper(0) like upper('%" . $texto . "%') and (status<>0)";
    $resultado = $model->getlistavisitante($sql);
    if (sizeof($resultado) > 0) {
      $this->smarty->assign('visitante_lista', $resultado);
      $tabela_html = $this->smarty->fetch('visitante/grid_visitante.tpl');
      echo $tabela_html;
    } else {
      echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
    }
  }
  
  //Novo Edita Registro
  public function novo_visitante(){   
    $campo_chave = $this->getParam($this->campo_chave);
    $campo_chave = isset($campo_chave)?$campo_chave:NULL;
    $model = new visitanteModel();
    $registro = $model->getvisitante($campo_chave);
    if (!is_null($campo_chave)){
      
    }
   // var_dump($registro);die;
    $this->smarty->assign('registro', $registro[0]);    
    $this->smarty->display('visitante/form_visitante_novo.tpl');
  }
  
  
  //Gravar visitante
  public function gravar_visitante() {
    $model = new visitanteModel();
    $data = $this->trataPost($_POST);
    if ($data[$this->campo_chave] == NULL)
      $model->setvisitante($data);
    else
      $model->updvisitante($data);
    return;
  }

  private function trataPost($post) {
    //$date = new date();
            
    $data['CAMPO-VAI-AQUI'] = isset($post['CAMPO-VAI-AQUI']) ? $post['CAMPO-VAI-AQUI'] : NULL;
        
    return $data;
  }  
  
  //Remove
  public function delvisitante() {
    $chave = $this->getParam($this->campo_chave);
    if (!is_null($chave)) {
      $model = new visitanteModel();
      $dados[$this->campo_chave] = $chave;
      $retorno = $model->delvisitante($dados);
      echo $retorno;
    }
  }  
  
}

?>