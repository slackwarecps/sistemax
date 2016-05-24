<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da sistema
*/

class sistemaModel extends model {
    var $tabsistema = 'sistemas';	
    var $chaveTabela = 'id_sistema';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de sistema
    private function estrutura_vazia(){ 
              $dados[0]['id_sistema']=NULL;
        $dados[0]['descricao']=NULL;
    
      return $dados;
    }    
    
	/**
	 * Obtem uma lista dos sistema(s)
	 * @param string $where
	 * @return array
	 */
	public function getlistasistema($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
	
		return $this->read($this->tabsistema, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) sistema pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function getsistema($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tabsistema, $fields, $where, $groupby, null, null, $orderby);
          return $dados;
        }
	}	
    

	
	
	/**
	 * Grava um  sistema
	 * @param array $array	 
	 * @return int
	 */
	public function setsistema($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tabsistema, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function updsistema($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tabsistema, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function delsistema($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tabsistema, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>