<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da supervisor
*/

class supervisorModel extends model {
    var $tabsupervisor = 'supervisor';	
    var $chaveTabela = 'SUPCOD';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de supervisor
    private function estrutura_vazia(){ 
              $dados[0]['SUPCOD']=NULL;
        $dados[0]['SUPNOM']=NULL;
    
      return $dados;
    }    
    
	/**
	 * Obtem uma lista dos supervisor(s)
	 * @param string $where
	 * @return array
	 */
	public function getlistasupervisor($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
	
		return $this->read($this->tabsupervisor, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) supervisor pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function getsupervisor($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tabsupervisor, $fields, $where, $groupby, null, null, $orderby);
          return $dados;
        }
	}	
    

	
	
	/**
	 * Grava um  supervisor
	 * @param array $array	 
	 * @return int
	 */
	public function setsupervisor($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tabsupervisor, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function updsupervisor($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tabsupervisor, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function delsupervisor($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tabsupervisor, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>