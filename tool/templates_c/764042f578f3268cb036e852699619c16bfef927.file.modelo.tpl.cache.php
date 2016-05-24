<?php /* Smarty version Smarty-3.1.13, created on 2013-06-07 16:46:26
         compiled from "modelos/modelo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42952351351b220de273ab7-32606446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '764042f578f3268cb036e852699619c16bfef927' => 
    array (
      0 => 'modelos/modelo.tpl',
      1 => 1370630589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42952351351b220de273ab7-32606446',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b220de299339_59111646',
  'variables' => 
  array (
    'entidade' => 0,
    'per_id' => 0,
    'menu_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b220de299339_59111646')) {function content_51b220de299339_59111646($_smarty_tpl) {?><<?php ?>?php
/*
* Gerado pelo Framework Tools 1.0
Classe: Modelo Da Entidade <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>

*/

class <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
Model extends model {

	var $tab<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
	 = 'cad_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
';	
  var $chaveTabela = 'ID_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
';
    
    
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
	 * Obtem uma lista dos <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
s
	 * @param string $where
	 * @return array
	 */
	public function get<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
($where = '') {
		$groupby = null;
		$orderby = 'username';
		$fields = array('*');
	
		return $this->read($this->tab<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
, $fields, $where, $groupby, null, null, $orderby);
	}
	
	
	/**
	 * Obtem um(a) <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
 pelo ID, caso informe NULL no id vira apenas a estrutura em branco.
	 * @param integers $id
	 * @return array
	 */
	public function get<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
($id) {
		$groupby = null;
		$where = 'IDUSER='.$id;
		$orderby = 'IDUSER';
		$fields = array('*');	
		
        $dados = $this->read($this->tab<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
, $fields, $where, $groupby, null, null, $orderby);
        
        if ($this->count <1){
          $dados = $this->estrutura_vazia();
        }        
        return $dados;
	}	
    

	
	
	/**
	 * Grava um <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
 
	 * @param array $array	 
	 * @return int
	 */
	public function set<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
($array) {
	
		$this->startTransaction();
	
		$id = $this->transaction(
                $this->insert($this->tab<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
, $array, false)
                );
			
		$this->commit();
	
		return $id;
	
	}
	
	/**
	 * Atualiza um <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>

	 * @param array $array	 
	 * @return boolean
	 */
	public function upd<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
($array) {
        //Chave
		$where = "IDUSER = ". $array["IDUSER"];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tab<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
, $array, $where));		
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
	
		$where = "per_id=<?php echo $_smarty_tpl->tpl_vars['per_id']->value;?>
";
	
		if ($menu_id != null){
			$where .= " AND men_id=<?php echo $_smarty_tpl->tpl_vars['menu_id']->value;?>
" ;
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
	 * @param bool $sessao - Se passado true, verifica a permissao do <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
 logado
	 * @return int
	 */
	public function verificaPermissao($per_id, $menu_id, $perm_acao){
	
		$per_perm = $this->getPerfilPermissao($per_id, $menu_id);
	
		//Se retornou 0, o <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
 nao tem nenhum acesso neste menu.
		if ($per_perm == 0){
			return -1;
		}
	
		/**
		 * Exemplo de comparacao p/ a��o cadastrar (2):
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
	 * Remove um <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>

	 * @param int $id
	 * @return boolean
	 */
	public function del<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
($id) {
		$where = $this->chaveTabela . " = $id";		
		return $this->delete($this->tab<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
,$where);
	}
	
}

?<?php ?>><?php }} ?>