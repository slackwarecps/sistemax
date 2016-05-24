<?php

/*
 * Classe: {$entidade} Controller
 *
 */

class {$entidade} extends controller {
    var $campo_chave = '{$nome_campo_chave}';
    
  public function index_action() {    
    $this->template->fetchJS('/files/js/{$dir}/{$entidade}.js');
    $this->template->run();

    $model = new {$entidade}Model();
    $sql = $this->campo_chave ." > 0 and (status<>0)";
    ${$entidade}_lista = $model->getlista{$entidade}($sql);  
    $this->smarty->assign('{$entidade}_lista', ${$entidade}_lista);  

    $this->smarty->display('{$dir}/form_{$entidade}_busca.html');
  }

  public function busca_{$entidade}() {
    $texto = $_REQUEST['texto'];
    
    //var_dump($_REQUEST);die;

    sleep(1); //simula demora
    $model = new {$entidade}Model();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "upper(0) like upper('%" . $texto . "%') and (status<>0)";
    $resultado = $model->getlista{$entidade}($sql);
    if (sizeof($resultado) > 0) {
      $this->smarty->assign('{$entidade}_lista', $resultado);
      $tabela_html = $this->smarty->fetch('{$entidade}/grid_{$entidade}.tpl');
      echo $tabela_html;
    } else {
      echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
    }
  }
  
  //Novo Edita Registro
  public function novo_{$entidade}(){   
    $campo_chave = $this->getParam($this->campo_chave);
    $campo_chave = isset($campo_chave)?$campo_chave:NULL;
    $this->template->fetchJS('/files/js/{$dir}/{$entidade}.js');    
    $this->template->run();
    $model = new {$entidade}Model();
    $registro = $model->get{$entidade}($campo_chave);
    if (!is_null($campo_chave)){
      
    }
   // var_dump($registro);die;
    $this->smarty->assign('registro', $registro[0]);    
    $this->smarty->display('{$entidade}/form_{$entidade}_novo.tpl');
  }
  
  
  //Gravar {$entidade}
  public function gravar_{$entidade}() {
    $model = new {$entidade}Model();
    $data = $this->trataPost($_POST);
    if ($data[$this->campo_chave] == NULL)
      $model->set{$entidade}($data);
    else
      $model->upd{$entidade}($data);
    return;
  }

  private function trataPost($post) {
    //$date = new date();
    {$array_tratapost}    
    return $data;
  }  
  
  //Remove
  public function del{$entidade}() {
    $chave = $this->getParam($this->campo_chave);
    if (!is_null($chave)) {
      $model = new {$entidade}Model();
      $dados[$this->campo_chave] = $chave;
      $retorno = $model->del{$entidade}($dados);
      echo $retorno;
    }
  }  
  
}

?>