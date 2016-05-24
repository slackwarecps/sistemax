<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da xuxu
*/

class xuxuModel extends model {
    var $tabxuxu = 'usuarios';	
    var $chaveTabela = 'id_usuario';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de xuxu
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
	 * Obtem uma lista dos xuxu(s)
	 * @param string $where
	 * @return array
	 */
	public function getlistaxuxu($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
	
		return $this->read($this->tabxuxu, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) xuxu pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function getxuxu($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tabxuxu, $fields, $where, $groupby, null, null, $orderby);
          return $dados;
        }
	}	
    

	
	
	/**
	 * Grava um  xuxu
	 * @param array $array	 
	 * @return int
	 */
	public function setxuxu($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tabxuxu, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function updxuxu($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tabxuxu, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function delxuxu($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tabxuxu, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>