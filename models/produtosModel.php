<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da produtos
*/

class produtosModel extends model {
    var $tabprodutos = 'PRODUTOS';	
    var $chaveTabela = 'PROCOD';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de produtos
    private function estrutura_vazia(){ 
              $dados[0]['PROCOD']=NULL;
        $dados[0]['PRODES']=NULL;
        $dados[0]['PROVVA']=NULL;
        $dados[0]['PROUND']=NULL;
        $dados[0]['PROQTD']=NULL;
        $dados[0]['PROQTM']=NULL;
        $dados[0]['PROCUS']=NULL;
        $dados[0]['PROMAR']=NULL;
        $dados[0]['DEPCOD']=NULL;
        $dados[0]['PROBAR']=NULL;
        $dados[0]['MARCOD']=NULL;
        $dados[0]['PROQTI']=NULL;
        $dados[0]['PROICM']=NULL;
        $dados[0]['ALICOD']=NULL;
        $dados[0]['PRODTU']=NULL;
        $dados[0]['PRONEG']=NULL;
        $dados[0]['PROVVP']=NULL;
        $dados[0]['PEDEQUANTIDADE']=NULL;
        $dados[0]['PROD_COMPOSTO']=NULL;
        $dados[0]['PONTOS']=NULL;
        $dados[0]['RELACAO1']=NULL;
        $dados[0]['CARNE']=NULL;
        $dados[0]['RELMIN']=NULL;
        $dados[0]['TIPOKIT']=NULL;
    
      return $dados;
    }    
    
	/**
	 * Obtem uma lista dos produtos(s)
	 * @param string $where
	 * @return array
	 */
	public function getlistaprodutos($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
	
		return $this->read($this->tabprodutos, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) produtos pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function getprodutos($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tabprodutos, $fields, $where, $groupby, null, null, $orderby);
          return $dados;
        }
	}	
    

	
	
	/**
	 * Grava um  produtos
	 * @param array $array	 
	 * @return int
	 */
	public function setprodutos($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tabprodutos, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function updprodutos($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tabprodutos, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function delprodutos($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tabprodutos, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>