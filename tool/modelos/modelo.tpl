<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da {$entidade}
*/

class {$entidade}Model extends model {
    var $tab{$entidade} = '{$nome_da_tabela}';	
    var $chaveTabela = '{$nome_campo_chave}';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de {$entidade}
    private function estrutura_vazia(){ 
      {$array_vazio}
      return $dados;
    }    
    
	/**
	 * Obtem uma lista dos {$entidade}(s)
	 * @param string $where
	 * @return array
	 */
	public function getlista{$entidade}($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
	
		return $this->read($this->tab{$entidade}, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) {$entidade} pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function get{$entidade}($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tab{$entidade}, $fields, $where, $groupby, null, null, $orderby);
          return $dados;
        }
	}	
    

	
	
	/**
	 * Grava um  {$entidade}
	 * @param array $array	 
	 * @return int
	 */
	public function set{$entidade}($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tab{$entidade}, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function upd{$entidade}($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tab{$entidade}, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function del{$entidade}($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tab{$entidade}, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>