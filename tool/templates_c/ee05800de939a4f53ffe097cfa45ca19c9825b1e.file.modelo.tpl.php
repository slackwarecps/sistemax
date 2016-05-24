<?php /* Smarty version Smarty-3.1.13, created on 2013-11-28 13:21:44
         compiled from "modelos\modelo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:377452974368cb0ec1-45072605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee05800de939a4f53ffe097cfa45ca19c9825b1e' => 
    array (
      0 => 'modelos\\modelo.tpl',
      1 => 1371877684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '377452974368cb0ec1-45072605',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entidade' => 0,
    'nome_da_tabela' => 0,
    'nome_campo_chave' => 0,
    'array_vazio' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52974368d68841_02101528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52974368d68841_02101528')) {function content_52974368d68841_02101528($_smarty_tpl) {?><<?php ?>?php
/*
* Gerado pelo Framework Tools 1.0
 Classe: Modelo Da <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>

*/

class <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
Model extends model {
    var $tab<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
 = '<?php echo $_smarty_tpl->tpl_vars['nome_da_tabela']->value;?>
';	
    var $chaveTabela = '<?php echo $_smarty_tpl->tpl_vars['nome_campo_chave']->value;?>
';
    
    
    //Estrutura da Tabela Vazia Utilizada para novos Cadastros de <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>

    private function estrutura_vazia(){ 
      <?php echo $_smarty_tpl->tpl_vars['array_vazio']->value;?>

      return $dados;
    }    
    
	/**
	 * Obtem uma lista dos <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
(s)
	 * @param string $where
	 * @return array
	 */
	public function getlista<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
($where = '') {
		$groupby = null;
		$orderby = $this->chaveTabela; //ou uma outra coluna ex: 'username';
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
        if ($id == null) {      
           $dados = $this->estrutura_vazia();
           return $dados;              
        } else {   
          $groupby = null;
          $where = $this->chaveTabela.'='.$id;
          $orderby = $this->chaveTabela;
          $fields = array('*');			
          $dados = $this->read($this->tab<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
, $fields, $where, $groupby, null, null, $orderby);
          return $dados;
        }
	}	
    

	
	
	/**
	 * Grava um  <?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>

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
	 * Atualiza um 
	 * @param array $array	 
	 * @return boolean
	 */
	public function upd<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
($array) {
        //Chave
		$where = $this->chaveTabela." = ". $array[$this->chaveTabela];	
		$this->startTransaction();	
		$this->transaction($this->update($this->tab<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
, $array, $where));		
		$this->commit();	
		return true;
	}
    
  //Remove o registro
 public function del<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
($array) {
    //Chave
    $where = $this->chaveTabela . " = " . $array[$this->chaveTabela];
    $array['status']=0;    
    $this->startTransaction();
    $this->transaction($this->update($this->tab<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
, $array, $where));
    $this->commit();
    return true;
  }    
	
}

?<?php ?>><?php }} ?>