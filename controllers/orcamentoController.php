<?php

/*
 * Classe: orcamento Controller
 *
 */

class orcamento extends controller {
    var $campo_chave = 'ID_ORC';
    
  public function index_action() {    
    $this->template->fetchJS('/files/js/orcamento/orcamento.js');
    $this->template->run();

    $model = new orcamentoModel();
    $sql = $this->campo_chave ." > 0 and (ID_ORC=8)";
    $orcamento_lista = $model->getlistaorcamento($sql);  
    $this->smarty->assign('orcamento_lista', $orcamento_lista);  

    $this->smarty->display('orcamento/form_orcamento_busca.html');
  }

  public function busca_orcamento() {
    $texto = $_REQUEST['texto'];
    $model = new orcamentoModel();
    $sql = "upper(nome) like upper('%" . $texto . "%') and (ID_ORC=8)";
    $resultado = $model->getlistaorcamento($sql);
    if (sizeof($resultado) > 0) {
      $this->smarty->assign('orcamento_lista', $resultado);
      $tabela_html = $this->smarty->fetch('orcamento/grid_orcamento.tpl');
      echo $tabela_html;
    } else {
      echo '<tr><td colspan="3">A Busca não retornou resultados.</td><tr>';
    }
  }
  
  //Novo Edita Registro
  public function novo_orcamento(){  
   // $this->template->fetchJS('');
    $this->template->run();
    $campo_chave = $this->getParam($this->campo_chave);
    $campo_chave = isset($campo_chave)?$campo_chave:NULL;
    $model = new orcamentoModel();
    $registro = $model->getorcamento($campo_chave);
    
    //Recupera Vendedores
    $vendedor = new vendedorModel();
    $resultado_v = $vendedor->getlistavendedor();
    foreach ($resultado_v as $value) {
      $lista_vendedores[$value['VENCOD']] = $value['VENNOM'];
    }
    $this->smarty->assign('lista_vendedores', $lista_vendedores); 
    
    //Status
      $lista_status['O'] = 'Orçamento';
      $lista_status['A'] = 'Aguardando pagto';
      $lista_status['F'] = 'Fechado';  
    $this->smarty->assign('lista_status',$lista_status);     
    //Pagamentos
      $lista_pagamentos['1'] = 'A Vista';
      $lista_pagamentos['2'] = '2 vezes mais entrada';
      $lista_pagamentos['3'] = '3 vezes mais entrada';          
    $this->smarty->assign('lista_pagamentos',$lista_pagamentos);

    $this->smarty->assign('registro', $registro[0]);    
    $this->smarty->display('orcamento/form_orcamento_novo.tpl');
  }
  
  
  //Gravar orcamento
  public function gravar_orcamento() {
    var_dump($_POST['item'])  ;die;
      
    $model = new orcamentoModel();
    $data = $this->trataPost($_POST);
    if ($data[$this->campo_chave] == NULL)
      $model->setorcamento($data);
    else
      $model->updorcamento($data);
    return;
  }
  
    //Gravar orcamento
  public function gravar_orcamento_itens() {
    var_dump($_POST)  ;die;

  }

  private function trataPost($post) {
    //$date = new date();
        $data['ID_ORC'] = ($post['ID_ORC'] != '') ? $post['ID_ORC'] : null;
        $data['DATA'] = ($post['DATA'] != '') ? $post['DATA'] : null;
        $data['HORA'] = ($post['HORA'] != '') ? $post['HORA'] : null;
        $data['ID_CLIENTE'] = ($post['ID_CLIENTE'] != '') ? $post['ID_CLIENTE'] : null;
        $data['ID_VENDEDOR'] = ($post['ID_VENDEDOR'] != '') ? $post['ID_VENDEDOR'] : null;
        $data['FATURADO'] = ($post['FATURADO'] != '') ? $post['FATURADO'] : null;
        $data['NF_NUMERO'] = ($post['NF_NUMERO'] != '') ? $post['NF_NUMERO'] : null;
        $data['PEDIDO_COMPRA'] = ($post['PEDIDO_COMPRA'] != '') ? $post['PEDIDO_COMPRA'] : null;
        $data['DATA_COMPRA'] = ($post['DATA_COMPRA'] != '') ? $post['DATA_COMPRA'] : null;
        $data['VALOR_TOTAL'] = ($post['VALOR_TOTAL'] != '') ? $post['VALOR_TOTAL'] : null;
        $data['DESCONTO'] = ($post['DESCONTO'] != '') ? $post['DESCONTO'] : null;
        $data['OBSERVACAO'] = ($post['OBSERVACAO'] != '') ? $post['OBSERVACAO'] : null;
        $data['SITUACAO'] = ($post['SITUACAO'] != '') ? $post['SITUACAO'] : null;
        $data['PESSOAS'] = ($post['PESSOAS'] != '') ? $post['PESSOAS'] : null;
        $data['NOME'] = ($post['NOME'] != '') ? $post['NOME'] : null;
        $data['EMAIL'] = ($post['EMAIL'] != '') ? $post['EMAIL'] : null;
        $data['CIDADE'] = ($post['CIDADE'] != '') ? $post['CIDADE'] : null;
        $data['DT_EVENTO'] = ($post['DT_EVENTO'] != '') ? $post['DT_EVENTO'] : null;
        $data['ID_FORMA_PAGTO'] = ($post['ID_FORMA_PAGTO'] != '') ? $post['ID_FORMA_PAGTO'] : null;
        $data['OBS_RESERV'] = ($post['OBS_RESERV'] != '') ? $post['OBS_RESERV'] : null;
        $data['TELEFONE'] = ($post['TELEFONE'] != '') ? $post['TELEFONE'] : null;
        $data['HORA_CHEGADA'] = ($post['HORA_CHEGADA'] != '') ? $post['HORA_CHEGADA'] : null;
        
    return $data;
  }  
  
  //Remove
  public function delorcamento() {
    $chave = $this->getParam($this->campo_chave);
    if (!is_null($chave)) {
      $model = new orcamentoModel();
      $dados[$this->campo_chave] = $chave;
      $retorno = $model->delorcamento($dados);
      echo $retorno;
    }
  }  
  
}

?>