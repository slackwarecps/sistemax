<?php

/*
 * Classe: vendedor Controller
 *
 */

class vendedor extends controller {
    var $campo_chave = 'VENCOD';
    
  public function index_action() {    
    $this->template->fetchJS('/files/js/vendedor/vendedor.js');
    $this->template->run();

    $model = new vendedorModel();
    $sql = $this->campo_chave ." > 0";
    $vendedor_lista = $model->getlistavendedor($sql);  
    $this->smarty->assign('vendedor_lista', $vendedor_lista);  

    $this->smarty->display('vendedor/form_vendedor_busca.html');
  }

  public function busca_vendedor() {
    $texto = $_REQUEST['texto'];
    
    //var_dump($_REQUEST);die;

    sleep(1); //simula demora
    $model = new vendedorModel();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "upper(0) like upper('%" . $texto . "%')";
    $resultado = $model->getlistavendedor($sql);
    if (sizeof($resultado) > 0) {
      $this->smarty->assign('vendedor_lista', $resultado);
      $tabela_html = $this->smarty->fetch('vendedor/grid_vendedor.tpl');
      echo $tabela_html;
    } else {
      echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
    }
  }
  
  //Novo Edita Registro
  public function novo_vendedor(){   
    $campo_chave = $this->getParam($this->campo_chave);
    $campo_chave = isset($campo_chave)?$campo_chave:NULL;
    $model = new vendedorModel();
    $registro = $model->getvendedor($campo_chave);
    if (!is_null($campo_chave)){
      
    }
   // var_dump($registro);die;
    $this->smarty->assign('registro', $registro[0]);    
    $this->smarty->display('vendedor/form_vendedor_novo.tpl');
  }
  
  
  //Gravar vendedor
  public function gravar_vendedor() {
    $model = new vendedorModel();
    $data = $this->trataPost($_POST);
    if ($data[$this->campo_chave] == NULL)
      $model->setvendedor($data);
    else
      $model->updvendedor($data);
    return;
  }

  private function trataPost($post) {
    //$date = new date();
            $data['VENCOD'] = isset($post['VENCOD'])? $post['VENCOD'] : NULL;
        $data['VENNOM'] = isset($post['VENNOM'])? $post['VENNOM'] : NULL;
        $data['SUPCOD'] = isset($post['SUPCOD'])? $post['SUPCOD'] : NULL;
        
    return $data;
  }  
  
  //Remove
  public function delvendedor() {
    $chave = $this->getParam($this->campo_chave);
    if (!is_null($chave)) {
      $model = new vendedorModel();
      $dados[$this->campo_chave] = $chave;
      $retorno = $model->delvendedor($dados);
      echo $retorno;
    }
  }  
  
}

?>