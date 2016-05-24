<?php /* Smarty version Smarty-3.1.13, created on 2013-11-28 13:21:56
         compiled from "template_tool\array_tratapost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18097529743746e0a47-99716889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d96d60875ded0bb8470c49a0dbf36c3d21a6b9d' => 
    array (
      0 => 'template_tool\\array_tratapost.tpl',
      1 => 1371877685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18097529743746e0a47-99716889',
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
  'unifunc' => 'content_5297437470f846_79801593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297437470f846_79801593')) {function content_5297437470f846_79801593($_smarty_tpl) {?>    <?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
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