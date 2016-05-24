<?php

/*
 * Classe: supervisor Controller
 *
 */

class supervisor extends controller {
    var $campo_chave = 'SUPCOD';
    
  public function index_action() {    
    $this->template->fetchJS('/files/js/supervisor/supervisor.js');
    $this->template->run();    
    $model = new supervisorModel();
    $sql = $this->campo_chave ." > 0";
    $supervisor_lista = $model->getlistasupervisor($sql);  
    $this->smarty->assign('supervisor_lista', $supervisor_lista);  

    $this->smarty->display('supervisor/form_supervisor_busca.html');
  }

  public function busca_supervisor() {
    $texto = $_REQUEST['texto'];
    
    //var_dump($_REQUEST);die;

    sleep(1); //simula demora
    $model = new supervisorModel();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "upper(0) like upper('%" . $texto . "%')";
    $resultado = $model->getlistasupervisor($sql);
    if (sizeof($resultado) > 0) {
      $this->smarty->assign('supervisor_lista', $resultado);
      $tabela_html = $this->smarty->fetch('supervisor/grid_supervisor.tpl');
      echo $tabela_html;
    } else {
      echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
    }
  }
  
  //Novo Edita Registro
  public function novo_supervisor(){   
    $campo_chave = $this->getParam($this->campo_chave);
    $campo_chave = isset($campo_chave)?$campo_chave:NULL;
    $model = new supervisorModel();
    $registro = $model->getsupervisor($campo_chave);
    if (!is_null($campo_chave)){
      
    }
   // var_dump($registro);die;
    $this->smarty->assign('registro', $registro[0]);    
    $this->smarty->display('supervisor/form_supervisor_novo.tpl');
  }
  
  
  //Gravar supervisor
  public function gravar_supervisor() {
    $model = new supervisorModel();
    $data = $this->trataPost($_POST);
    if ($data[$this->campo_chave] == NULL)
      $model->setsupervisor($data);
    else
      $model->updsupervisor($data);
    return;
  }

  private function trataPost($post) {
    //$date = new date();
            $data['SUPCOD'] = isset($post['SUPCOD'])? $post['SUPCOD'] : NULL;
        $data['SUPNOM'] = isset($post['SUPNOM'])? $post['SUPNOM'] : NULL;
        
    return $data;
  }  
  
  //Remove
  public function delsupervisor() {
    $chave = $this->getParam($this->campo_chave);
    if (!is_null($chave)) {
      $model = new supervisorModel();
      $dados[$this->campo_chave] = $chave;
      $retorno = $model->delsupervisor($dados);
      echo $retorno;
    }
  }  
  
}

?>