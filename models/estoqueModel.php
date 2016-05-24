<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da estoque
*/

class estoqueModel extends model {
    var $tabestoque = 'MOVESTOQUE';	
    var $chaveTabela = 'MOECOD';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de estoque
    private function estrutura_vazia(){ 
              $dados[0]['MOECOD']=NULL;
        $dados[0]['MOEDAT']=NULL;
        $dados[0]['MOEDOC']=NULL;
        $dados[0]['PROCOD']=NULL;
        $dados[0]['MOEHOR']=NULL;
        $dados[0]['TMOCOD']=NULL;
        $dados[0]['CLICOD']=NULL;
        $dados[0]['MOETCF']=NULL;
        $dados[0]['MOEQTD']=NULL;
        $dados[0]['MOEVLR']=NULL;
        $dados[0]['MOECUS']=NULL;
        $dados[0]['PERCOD']=NULL;
        $dados[0]['MOECAX']=NULL;
        $dados[0]['USUCOD']=NULL;
        $dados[0]['MOEDCX']=NULL;
        $dados[0]['MOECAN']=NULL;
        $dados[0]['MOEOPE']=NULL;
        $dados[0]['MOEDES']=NULL;
        $dados[0]['MOETOT']=NULL;
    
      return $dados;
    }    
    
	/**
	 * Obtem uma lista dos estoque(s)
	 * @param string $where
	 * @return array
	 */
	public function getlistaestoque($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
	
		return $this->read($this->tabestoque, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) estoque pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function getestoque($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tabestoque, $fields, $where, $groupby, null, null, $orderby);
        }
	}	
    

	
	
	/**
	 * Grava um  estoque
	 * @param array $array	 
	 * @return int
	 */
	public function setestoque($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tabestoque, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function updestoque($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tabestoque, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function delestoque($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tabestoque, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>