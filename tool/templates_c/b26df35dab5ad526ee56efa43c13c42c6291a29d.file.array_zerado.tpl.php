<?php /* Smarty version Smarty-3.1.13, created on 2013-11-28 15:07:47
         compiled from "template_tool/array_zerado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1937858608529778631d5f74-59134164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b26df35dab5ad526ee56efa43c13c42c6291a29d' => 
    array (
      0 => 'template_tool/array_zerado.tpl',
      1 => 1371877685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1937858608529778631d5f74-59134164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lista_campos' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52977863201f09_22979141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52977863201f09_22979141')) {function content_52977863201f09_22979141($_smarty_tpl) {?>    <?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_campos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
    $dados[0]['<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
']=NULL;
    <?php }
if (!$_smarty_tpl->tpl_vars["data"]->_loop) {
?>    
    $dados[0]['CAMPO-VAI-AQUI']=NULL;
    <?php } ?><?php }} ?>