<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da about
*/

class aboutModel extends model {
    var $tababout = 'usuarios';	
    var $chaveTabela = 'id_usuario';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de about
    private function estrutura_vazia(){ 
              $dados[0]['id_usuario']=NULL;
        $dados[0]['nome']=NULL;
        $dados[0]['email']=NULL;
        $dados[0]['sistema']=NULL;
        $dados[0]['status']=NULL;
        $dados[0]['senha']=NULL;
    
      return $dados;
    }    
    
	/**
	 * Obtem uma lista dos about(s)
	 * @param string $where
	 * @return array
	 */
	public function getlistaabout($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
	
		return $this->read($this->tababout, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) about pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function getabout($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tababout, $fields, $where, $groupby, null, null, $orderby);
          return $dados;
        }
	}	
    

	
	
	/**
	 * Grava um  about
	 * @param array $array	 
	 * @return int
	 */
	public function setabout($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tababout, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function updabout($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tababout, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function delabout($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tababout, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>