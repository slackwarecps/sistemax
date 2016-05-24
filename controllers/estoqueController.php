<?php

/*
 * Classe: estoque Controller
 *
 */

class estoque extends controller {
    var $campo_chave = 'MOECOD';
    
  public function index_action() {    
    $this->template->fetchJS('/files/js/estoque/estoque.js');
    $this->template->run();

    $model = new estoqueModel();
    $sql = $this->campo_chave ." > 0";
    $estoque_lista = $model->getlistaestoque($sql);  
    $this->smarty->assign('estoque_lista', $estoque_lista);  

    $this->smarty->display('estoque/form_estoque_busca.html');
  }

  public function busca_estoque() {
    $texto = $_REQUEST['texto'];
    
    //var_dump($_REQUEST);die;

    sleep(1); //simula demora
    $model = new estoqueModel();
    $sql = "upper(nome) like upper('%" . $texto . "%') and (status<>0)";
    $resultado = $model->getlistaestoque($sql);
    if (sizeof($resultado) > 0) {
      $this->smarty->assign('estoque_lista', $resultado);
      $tabela_html = $this->smarty->fetch('estoque/grid_estoque.tpl');
      echo $tabela_html;
    } else {
      echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
    }
  }
  
  //Novo Edita Registro
  public function novo_estoque(){   
    $campo_chave = $this->getParam($this->campo_chave);
    $campo_chave = isset($campo_chave)?$campo_chave:NULL;
    $model = new estoqueModel();
    $registro = $model->getestoque(NULL,NULL,$campo_chave);
    if (!is_null($campo_chave)){
      
    }
   // var_dump($registro);die;
    $this->smarty->assign('registro', $registro[0]);    
    $this->smarty->display('estoque/form_estoque_novo.tpl');
  }
  
  
  //Gravar estoque
  public function gravar_estoque() {
    $model = new estoqueModel();
    $data = $this->trataPost($_POST);
    if ($data[$this->campo_chave] == NULL)
      $model->setestoque($data);
    else
      $model->updestoque($data);
    return;
  }

  private function trataPost($post) {
    //$date = new date();
            $data['MOECOD'] = ($post['MOECOD'] != '') ? $post['MOECOD'] : null;
        $data['MOEDAT'] = ($post['MOEDAT'] != '') ? $post['MOEDAT'] : null;
        $data['MOEDOC'] = ($post['MOEDOC'] != '') ? $post['MOEDOC'] : null;
        $data['PROCOD'] = ($post['PROCOD'] != '') ? $post['PROCOD'] : null;
        $data['MOEHOR'] = ($post['MOEHOR'] != '') ? $post['MOEHOR'] : null;
        $data['TMOCOD'] = ($post['TMOCOD'] != '') ? $post['TMOCOD'] : null;
        $data['CLICOD'] = ($post['CLICOD'] != '') ? $post['CLICOD'] : null;
        $data['MOETCF'] = ($post['MOETCF'] != '') ? $post['MOETCF'] : null;
        $data['MOEQTD'] = ($post['MOEQTD'] != '') ? $post['MOEQTD'] : null;
        $data['MOEVLR'] = ($post['MOEVLR'] != '') ? $post['MOEVLR'] : null;
        $data['MOECUS'] = ($post['MOECUS'] != '') ? $post['MOECUS'] : null;
        $data['PERCOD'] = ($post['PERCOD'] != '') ? $post['PERCOD'] : null;
        $data['MOECAX'] = ($post['MOECAX'] != '') ? $post['MOECAX'] : null;
        $data['USUCOD'] = ($post['USUCOD'] != '') ? $post['USUCOD'] : null;
        $data['MOEDCX'] = ($post['MOEDCX'] != '') ? $post['MOEDCX'] : null;
        $data['MOECAN'] = ($post['MOECAN'] != '') ? $post['MOECAN'] : null;
        $data['MOEOPE'] = ($post['MOEOPE'] != '') ? $post['MOEOPE'] : null;
        $data['MOEDES'] = ($post['MOEDES'] != '') ? $post['MOEDES'] : null;
        $data['MOETOT'] = ($post['MOETOT'] != '') ? $post['MOETOT'] : null;
        
    return $data;
  }  
  
  //Remove
  public function delestoque() {
    $chave = $this->getParam($this->campo_chave);
    if (!is_null($chave)) {
      $model = new estoqueModel();
      $dados[$this->campo_chave] = $chave;
      $retorno = $model->delestoque($dados);
      echo $retorno;
    }
  }  
  
}

?>