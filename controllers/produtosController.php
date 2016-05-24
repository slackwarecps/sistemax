<?php

/*
 * Classe: produtos Controller
 *
 */

class produtos extends controller {
    var $campo_chave = 'PROCOD';
    
  public function index_action() {    
    $this->template->fetchJS('/files/js/produtos/produtos.js');
    $this->template->run();

    $model = new produtosModel();
    $sql = $this->campo_chave ." > 0";
    $produtos_lista = $model->getlistaprodutos($sql);  
    $this->smarty->assign('produtos_lista', $produtos_lista);  

    $this->smarty->display('produtos/form_produtos_busca.html');
  }

  public function busca_produtos() {
    $texto = $_REQUEST['texto'];
    
    //var_dump($_REQUEST);die;

    sleep(1); //simula demora
    $model = new produtosModel();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "upper(0) like upper('%" . $texto . "%')";
    $resultado = $model->getlistaprodutos($sql);
    if (sizeof($resultado) > 0) {
      $this->smarty->assign('produtos_lista', $resultado);
      $tabela_html = $this->smarty->fetch('produtos/grid_produtos.tpl');
      echo $tabela_html;
    } else {
      echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
    }
  }
  
  //Novo Edita Registro
  public function novo_produtos(){   
    $campo_chave = $this->getParam($this->campo_chave);
    $campo_chave = isset($campo_chave)?$campo_chave:NULL;
    $model = new produtosModel();
    $registro = $model->getprodutos($campo_chave);
    if (!is_null($campo_chave)){
      
    }
   // var_dump($registro);die;
    $this->smarty->assign('registro', $registro[0]);    
    $this->smarty->display('produtos/form_produtos_novo.tpl');
  }
  
  
  //Gravar produtos
  public function gravar_produtos() {
    $model = new produtosModel();
    $data = $this->trataPost($_POST);
    if ($data[$this->campo_chave] == NULL)
      $model->setprodutos($data);
    else
      $model->updprodutos($data);
    return;
  }

  private function trataPost($post) {
    //$date = new date();
            $data['PROCOD'] = isset($post['PROCOD'])? $post['PROCOD'] : NULL;
        $data['PRODES'] = isset($post['PRODES'])? $post['PRODES'] : NULL;
        $data['PROVVA'] = isset($post['PROVVA'])? $post['PROVVA'] : NULL;
        $data['PROUND'] = isset($post['PROUND'])? $post['PROUND'] : NULL;
        $data['PROQTD'] = isset($post['PROQTD'])? $post['PROQTD'] : NULL;
        $data['PROQTM'] = isset($post['PROQTM'])? $post['PROQTM'] : NULL;
        $data['PROCUS'] = isset($post['PROCUS'])? $post['PROCUS'] : NULL;
        $data['PROMAR'] = isset($post['PROMAR'])? $post['PROMAR'] : NULL;
        $data['DEPCOD'] = isset($post['DEPCOD'])? $post['DEPCOD'] : NULL;
        $data['PROBAR'] = isset($post['PROBAR'])? $post['PROBAR'] : NULL;
        $data['MARCOD'] = isset($post['MARCOD'])? $post['MARCOD'] : NULL;
        $data['PROQTI'] = isset($post['PROQTI'])? $post['PROQTI'] : NULL;
        $data['PROICM'] = isset($post['PROICM'])? $post['PROICM'] : NULL;
        $data['ALICOD'] = isset($post['ALICOD'])? $post['ALICOD'] : NULL;
        $data['PRODTU'] = isset($post['PRODTU'])? $post['PRODTU'] : NULL;
        $data['PRONEG'] = isset($post['PRONEG'])? $post['PRONEG'] : NULL;
        $data['PROVVP'] = isset($post['PROVVP'])? $post['PROVVP'] : NULL;
        $data['PEDEQUANTIDADE'] = isset($post['PEDEQUANTIDADE'])? $post['PEDEQUANTIDADE'] : NULL;
        $data['PROD_COMPOSTO'] = isset($post['PROD_COMPOSTO'])? $post['PROD_COMPOSTO'] : NULL;
        $data['PONTOS'] = isset($post['PONTOS'])? $post['PONTOS'] : NULL;
        $data['RELACAO1'] = isset($post['RELACAO1'])? $post['RELACAO1'] : NULL;
        $data['CARNE'] = isset($post['CARNE'])? $post['CARNE'] : NULL;
        $data['RELMIN'] = isset($post['RELMIN'])? $post['RELMIN'] : NULL;
        $data['TIPOKIT'] = isset($post['TIPOKIT'])? $post['TIPOKIT'] : NULL;
        
    return $data;
  }  
  
  //Remove
  public function delprodutos() {
    $chave = $this->getParam($this->campo_chave);
    if (!is_null($chave)) {
      $model = new produtosModel();
      $dados[$this->campo_chave] = $chave;
      $retorno = $model->delprodutos($dados);
      echo $retorno;
    }
  } 
  
  //Busca de produto para ajax
  public function bbbb(){
    
    $texto =$this->getParam('term');
 
    $model = new produtosModel();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "upper(PRODES) like upper('%".$texto."%')";
    $resultado = $model->getlistaprodutos($sql);

    
    if (sizeof($resultado) > 0) {
      foreach ($resultado as $value) {
        $retorno[]=$value['PRODES'];
        //$cod[]=$value['PROCOD'];
      }
    } 
   
    echo json_encode($retorno);
   // echo json_encode($cod);


  }
  
    //Busca de produto para ajax
  public function getVendaProduto(){   
    
    $texto =$this->getParam('PROCOD');     
    var_dump($_REQUEST);
    $model = new produtosModel();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "PROCOD=".$texto;
    $resultado = $model->getlistaprodutos($sql);     
    if (sizeof($resultado) > 0) {
      echo json_encode($resultado[0]);
    } else{
      $vazio[]=0;
      echo json_encode($vazio);
    }      
    
  }
  
  public function getVendaProdutoByDescricao(){   
    
    $texto =$this->getParam('descricao');         
    $model = new produtosModel();
    //Mude o zero pelo nome do campo a aser buscado....
    $sql = "PRODES='".$texto."'";
    $resultado = $model->getlistaprodutos($sql); 
    //print_a_die($resultado);
    //echo $resultado[0]['PROVVA'];die;
    if (sizeof($resultado) > 0) {
      echo json_encode($resultado[0]);
    } else{
      $vazio[]=0;
      echo json_encode($vazio);
    }      
    
  }
  
}

?>