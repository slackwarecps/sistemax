<?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da usuario
*/

class usuarioModel extends model {
    var $tabusuario = 'usuarios';	
    var $chaveTabela = 'id_usuario';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de usuario
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
	 * Obtem uma lista dos usuario(s)
	 * @param string $where
	 * @return array
	 */
	public function getlistausuario($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
		$fields = array('*');
	
		return $this->read($this->tabusuario, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) usuario pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function getusuario($id) {
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tabusuario, $fields, $where, $groupby, null, null, $orderby);
          return $dados;
        }
	}	
    

	
	
	/**
	 * Grava um  usuario
	 * @param array $array	 
	 * @return int
	 */
	public function setusuario($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tabusuario, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function updusuario($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tabusuario, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function delusuario($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tabusuario, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?>