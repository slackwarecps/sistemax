<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da home
*/

class homeModel extends model {
    var $tabhome = 'departamento';	
    var $chaveTabela = 'id_departamento';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de home
    private function estrutura_vazia(){ 
              $dados[0]['id_departamento']=NULL;
        $dados[0]['id_sistema']=NULL;
        $dados[0]['codigo']=NULL;
        $dados[0]['descricao']=NULL;
    
      return $dados;
    }    
    
	/**
	 * Obtem uma lista dos home(s)
	 * @param string $where
	 * @return array
	 */
	public function getlistahome($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
	
		return $this->read($this->tabhome, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) home pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function gethome($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tabhome, $fields, $where, $groupby, null, null, $orderby);
          return $dados;
        }
	}	
    

	
	
	/**
	 * Grava um  home
	 * @param array $array	 
	 * @return int
	 */
	public function sethome($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tabhome, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function updhome($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tabhome, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function delhome($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tabhome, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>