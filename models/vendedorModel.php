<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da vendedor
*/

class vendedorModel extends model {
    var $tabvendedor = 'vendedor';	
    var $chaveTabela = 'VENCOD';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de vendedor
    private function estrutura_vazia(){ 
              $dados[0]['VENCOD']=NULL;
        $dados[0]['VENNOM']=NULL;
        $dados[0]['SUPCOD']=NULL;
    
      return $dados;
    }    
    
	/**
	 * Obtem uma lista dos vendedor(s)
	 * @param string $where
	 * @return array
	 */
	public function getlistavendedor($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
	
		return $this->read($this->tabvendedor, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) vendedor pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function getvendedor($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tabvendedor, $fields, $where, $groupby, null, null, $orderby);
          return $dados;
        }
	}	
    

	
	
	/**
	 * Grava um  vendedor
	 * @param array $array	 
	 * @return int
	 */
	public function setvendedor($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tabvendedor, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function updvendedor($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tabvendedor, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function delvendedor($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tabvendedor, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>