<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da cliente
*/

class clienteModel extends model {
    var $tabcliente = 'CLIENTES';	
    var $chaveTabela = 'CLICOD';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de cliente
    private function estrutura_vazia(){ 
        $dados[0]['CLICOD']=NULL;
        $dados[0]['CLINOM']=NULL;
        $dados[0]['CLIEND']=NULL;
        $dados[0]['CLICEP']=NULL;
        $dados[0]['CLIBAI']=NULL;
        $dados[0]['CLICID']=NULL;
        $dados[0]['CLIUF']=NULL;
        $dados[0]['CLIRG']=NULL;
        $dados[0]['CLILIM']=NULL;
        $dados[0]['status']=NULL;
        $dados[0]['CLIDNA']=NULL;
        $dados[0]['CLIDCA']=NULL;
        $dados[0]['CLIEMA']=NULL;
        $dados[0]['CLITIP']=NULL;
        $dados[0]['CLISIT']=NULL;
        $dados[0]['CLIFO1']=NULL;
        $dados[0]['CLIFO2']=NULL;
        $dados[0]['CLICLA']=NULL;
        $dados[0]['CLIOBS']=NULL;
        $dados[0]['DIAS_PRAZO']=NULL;
        $dados[0]['CONTROLA_LIMITE']=NULL;
        $dados[0]['BLOQUEIA_APOSLIMITE']=NULL;
        $dados[0]['CLIIE']=NULL;
        $dados[0]['CLICNP']=NULL;
        $dados[0]['CLICPF']=NULL;
        $dados[0]['CLIDCO']=NULL;
        $dados[0]['PONTOS']=NULL;
        $dados[0]['CONTROLA_PONTOS']=NULL;
    
      return $dados;
    }    
    
	/**
	 * Obtem uma lista dos cliente(s)
	 * @param string $where
	 * @return array
	 */
	public function getlistacliente($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
	
		return $this->read($this->tabcliente, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) cliente pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function getcliente($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tabcliente, $fields, $where, $groupby, null, null, $orderby);
        }
	}	
    

	
	
	/**
	 * Grava um  cliente
	 * @param array $array	 
	 * @return int
	 */
	public function setcliente($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tabcliente, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function updcliente($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tabcliente, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function delcliente($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tabcliente, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>