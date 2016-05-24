<?php /* Smarty version Smarty-3.1.13, created on 2013-08-09 17:24:14
         compiled from "template_tool/formulario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135707232652054fee7e0b16-66463336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dba985d65fc61485d94e3fcd480adc82db35ba0' => 
    array (
      0 => 'template_tool/formulario.tpl',
      1 => 1371877685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135707232652054fee7e0b16-66463336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'entidade' => 0,
    'lista_campos' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52054feea18f08_30702985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52054feea18f08_30702985')) {function content_52054feea18f08_30702985($_smarty_tpl) {?><form id="my_cad_form_foo" name="my_cad_form_<?php echo $_smarty_tpl->tpl_vars['entidade']->value;?>
">
<?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_campos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
<label for="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</label><input id="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
" value="{$registro.<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
}"><br>
<?php }
if (!$_smarty_tpl->tpl_vars["data"]->_loop) {
?>    
  <input type="text" name="ok" value="" />
<?php } ?>
<button id="btn_salvar1" name="btn_salvar1" onclick="btn_salvar1click()">Salva FOO</button>
</form><?php }} ?>