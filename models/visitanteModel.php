<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da visitante
*/

class visitanteModel extends model {
    var $tabvisitante = 'cad_portaria_visitante';	
    var $chaveTabela = 'por_vis_id';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de visitante
    private function estrutura_vazia(){ 
              
    $dados[0]['CAMPO-VAI-AQUI']=NULL;
    
      return $dados;
    }    
    
	/**
	 * Obtem uma lista dos visitante(s)
	 * @param string $where
	 * @return array
	 */
	public function getlistavisitante($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
	
		return $this->read($this->tabvisitante, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) visitante pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function getvisitante($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tabvisitante, $fields, $where, $groupby, null, null, $orderby);
          return $dados;
        }
	}	
    

	
	
	/**
	 * Grava um  visitante
	 * @param array $array	 
	 * @return int
	 */
	public function setvisitante($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tabvisitante, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function updvisitante($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tabvisitante, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function delvisitante($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tabvisitante, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>