<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da usuarios
*/

class usuariosModel extends model {
    var $tabusuarios = 'usuarios';	
    var $chaveTabela = 'id_usuario';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de usuarios
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
	 * Obtem uma lista dos usuarios(s)
	 * @param string $where
	 * @return array
	 */
	public function getlistausuarios($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
	
		return $this->read($this->tabusuarios, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) usuarios pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function getusuarios($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tabusuarios, $fields, $where, $groupby, null, null, $orderby);
          return $dados;
        }
	}	
    

	
	
	/**
	 * Grava um  usuarios
	 * @param array $array	 
	 * @return int
	 */
	public function setusuarios($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tabusuarios, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function updusuarios($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tabusuarios, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function delusuarios($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tabusuarios, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>