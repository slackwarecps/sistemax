<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da departamento
*/

class departamentoModel extends model {
    var $tabdepartamento = 'DEPARTAMENTOS';	
    var $chaveTabela = 'DEPCOD';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de departamento
    private function estrutura_vazia(){ 
              $dados[0]['DEPCOD']=NULL;
        $dados[0]['DEPNOM']=NULL;
    
      return $dados;
    }    
    
	/**
	 * Obtem uma lista dos departamento(s)
	 * @param string $where
	 * @return array
	 */
	public function getlistadepartamento($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
	
		return $this->read($this->tabdepartamento, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) departamento pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function getdepartamento($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tabdepartamento, $fields, $where, $groupby, null, null, $orderby);
          return $dados;
        }
	}	
    

	
	
	/**
	 * Grava um  departamento
	 * @param array $array	 
	 * @return int
	 */
	public function setdepartamento($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tabdepartamento, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function upddepartamento($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tabdepartamento, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function deldepartamento($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tabdepartamento, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>