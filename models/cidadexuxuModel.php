<?php
/*
* Gerado pelo Framework Tools 1.0
Classe: Modelo Da Entidade 
*/

class Model extends model {

	var $tab	 = 'cad_';	
  var $chaveTabela = 'ID_';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros
    private function estrutura_vazia(){
      /* Exemplo
      $dados[0]['IDUSER']=NULL;
      $dados[0]['USERNAME']=NULL;
      $dados[0]['LOGIN']=NULL;
      $dados[0]['PASSWORD']=NULL;
      $dados[0]['EMAIL']=NULL;
      $dados[0]['PRIVILEGED']=NULL;
      $dados[0]['TYPEREC']=NULL;
      $dados[0]['PROFILE']=NULL;
      $dados[0]['MYKEY']=NULL;
      */
      return $dados;
    }    
    
	/**
	 * Obtem uma lista dos s
	 * @param string $where
	 * @return array
	 */
	public function get($where = '') {
		$groupby = null;
		$orderby = 'username';
		$fields = array('*');
	
		return $this->read($this->tab, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a)  pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function get($id) {
		$groupby = null;
		$where = 'IDUSER='.$id;
		$orderby = 'IDUSER';
		$fields = array('*');	
		
        $dados = $this->read($this->tab, $fields, $where, $groupby, null, null, $orderby);
        
        if ($this->count <1){
          $dados = $this->estrutura_vazia();
        }        
        return $dados;
	}	
    

	
	
	/**
	 * Grava um  
	 * @param array $array	 
	 * @return int
	 */
	public function set($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tab, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function upd($array) {
        //Chave
		$where = "IDUSER = ". $array["IDUSER"];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tab, $array, $where));		
		$this->commit();	
		return true;
	}
	
	
	/**
	 * Obtem apenas um perfil pelo seu id
	 * @param int $id
	 * @return array
	 */
	public function getPerfilById($id) {
	
		$menu = $this->read($this->tabPerfil, array('*'), "per_id = $id");
		$menu[0]["permissoes"] =  $this->read($this->tabPermissao, array('*'), "per_id = $id");
	
		return $menu;
	}
		
	/**
	 * Grava as permissoes de um perfil
	 * @param int $per_id
	 * @param array $perms
	 * @return boolean
	 */
	public function setPermissoes($per_id, $perms) {
	
		$this->startTransaction();
	
		foreach ($perms as $k => $v){
			$array = array(
					'per_id' => $per_id,
					'men_id' => $k,
					'valor' => $v);
			$this->transaction($this->insert($this->tabPermissao, $array, false));
	
		}
	
		$this->commit();
	
		return true;
	
	}
	
	/**
	 * Atualiza as permissoes de um perfil
	 * @param int $per_id
	 * @param array $perms
	 * @return int
	 */
	public function updPermissoes($per_id, $perms) {
	
		$this->startTransaction();
	
		// Remove as permissoes
		$this->transaction($this->delete($this->tabPermissao, "per_id = $per_id"));
	
		// Insere novamente
		foreach ($perms as $k => $v){
			$array = array(
					'per_id' => $per_id,
					'men_id' => $k,
					'valor' => $v);
			$this->transaction($this->insert($this->tabPermissao, $array, false));
	
		}
	
		$this->commit();
	
		return true;
	
	}
	
	/**
	 * Obtem a soma das permissoes de um perfil em determinado menu
	 * 1 = Visualizar
	 * 2 = Cadastrar
	 * 4 = Editar
	 * 8 = Excluir
	 *
	 * Ex: 3 = Visualizar + Cadastrar
	 *
	 * @param int $per_id
	 * @param int $menu_id
	 * @return int
	 */
	public function getPerfilPermissao($per_id, $menu_id) {
	
		if (isset($this->cache[$per_id][$menu_id])){
			return $this->cache[$per_id][$menu_id];
		}
	
		$where = "per_id=";
	
		if ($menu_id != null){
			$where .= " AND men_id=" ;
		}
	
		$perm = $this->read($this->tabPermissao, array("valor"), $where);
	
		if (sizeof($perm) == 0){
			return 0;
		}
	
		$this->cache[$per_id][$menu_id] = (int)$perm[0]['valor'];
	
		return (int)$perm[0]['valor'];
	
	}
	

	/**
	 * Verifica a permissao bit a bit.
	 * Se a permissao requisitada coincidir com a permissao que o perfil possui, retornara true.
	 *
	 * @param int $per_id
	 * @param int $menu_id
	 * @param int $permissao
	 * @param bool $sessao - Se passado true, verifica a permissao do  logado
	 * @return int
	 */
	public function verificaPermissao($per_id, $menu_id, $perm_acao){
	
		$per_perm = $this->getPerfilPermissao($per_id, $menu_id);
	
		//Se retornou 0, o  nao tem nenhum acesso neste menu.
		if ($per_perm == 0){
			return -1;
		}
	
		/**
		 * Exemplo de comparacao p/ ação cadastrar (2):
		 *
		 * ACESSO    ACAO_MENU        PER_PERM
		 * ========  =========        ========
		 * false  =  2 (010)      &   1 (001)   (Visualizar)
		 * true   =  2 (010)      &   2 (010)   (Cadastrar)
		 * true   =  2 (010)      &   3 (011)   (Visualizar + Cadastrar)
		 */
		$acesso   =  $perm_acao   &   $per_perm;
	
		return ($acesso > 0);
	
	}
	
	/**
	 * Remove um 
	 * @param int $id
	 * @return boolean
	 */
	public function del($id) {
		$where = $this->chaveTabela . " = $id";		
		return $this->delete($this->tab,$where);
	}
	
}

?>