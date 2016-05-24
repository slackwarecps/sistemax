<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da orcamento
*/

class orcamentoModel extends model {
    var $taborcamento = 'SSORCAMENTOS';	
    var $chaveTabela = 'ID_ORC';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de orcamento
    private function estrutura_vazia(){ 
              $dados[0]['ID_ORC']=NULL;
        $dados[0]['DATA']=NULL;
        $dados[0]['HORA']=NULL;
        $dados[0]['ID_CLIENTE']=NULL;
        $dados[0]['ID_VENDEDOR']=NULL;
        $dados[0]['FATURADO']=NULL;
        $dados[0]['NF_NUMERO']=NULL;
        $dados[0]['PEDIDO_COMPRA']=NULL;
        $dados[0]['DATA_COMPRA']=NULL;
        $dados[0]['VALOR_TOTAL']=NULL;
        $dados[0]['DESCONTO']=NULL;
        $dados[0]['OBSERVACAO']=NULL;
        $dados[0]['SITUACAO']=NULL;
        $dados[0]['PESSOAS']=NULL;
        $dados[0]['NOME']=NULL;
        $dados[0]['EMAIL']=NULL;
        $dados[0]['CIDADE']=NULL;
        $dados[0]['DT_EVENTO']=NULL;
        $dados[0]['ID_FORMA_PAGTO']=NULL;
        $dados[0]['OBS_RESERV']=NULL;
        $dados[0]['TELEFONE']=NULL;
        $dados[0]['HORA_CHEGADA']=NULL;
    
      return $dados;
    }    
    
	/**
	 * Obtem uma lista dos orcamento(s)
	 * @param string $where
	 * @return array
	 */
	public function getlistaorcamento($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
        $limit=30;
	
		return $this->read($this->taborcamento, $fields, $where, $groupby, $limit, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) orcamento pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function getorcamento($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->taborcamento, $fields, $where, $groupby, null, null, $orderby);
          return $dados;
        }
	}	
    

	
	
	/**
	 * Grava um  orcamento
	 * @param array $array	 
	 * @return int
	 */
	public function setorcamento($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->taborcamento, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function updorcamento($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->taborcamento, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function delorcamento($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->taborcamento, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>