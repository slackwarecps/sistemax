<?php /* Smarty version Smarty-3.1.13, created on 2013-11-28 15:07:47
         compiled from "template_tool/array_tratapost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28577357852977863207b39-57867723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81af47e6e57c35d087ae13f0fe79d2fec5ca6b2c' => 
    array (
      0 => 'template_tool/array_tratapost.tpl',
      1 => 1371877685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28577357852977863207b39-57867723',
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
  'unifunc' => 'content_52977863217c04_25986884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52977863217c04_25986884')) {function content_52977863217c04_25986884($_smarty_tpl) {?>    <?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lista_campos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
    $data['<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
'] = isset($post['<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
'])? $post['<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
'] : NULL;
    <?php }
if (!$_smarty_tpl->tpl_vars["data"]->_loop) {
?>    
    $data['CAMPO-VAI-AQUI'] = isset($post['CAMPO-VAI-AQUI']) ? $post['CAMPO-VAI-AQUI'] : NULL;
    <?php } ?><?php }} ?>