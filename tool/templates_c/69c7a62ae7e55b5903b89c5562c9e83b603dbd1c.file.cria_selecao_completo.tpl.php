<?php /* Smarty version Smarty-3.1.13, created on 2013-11-28 13:19:44
         compiled from "template_tool\cria_selecao_completo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18322529742f08b94c8-17173348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69c7a62ae7e55b5903b89c5562c9e83b603dbd1c' => 
    array (
      0 => 'template_tool\\cria_selecao_completo.tpl',
      1 => 1371877684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18322529742f08b94c8-17173348',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sel_name' => 0,
    'lista_campos' => 0,
    'item_selecionado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_529742f0913240_29960319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529742f0913240_29960319')) {function content_529742f0913240_29960319($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\wamp\\www\\www.fabioalvaro.com.br\\sistemax\\tool\\libs\\plugins\\function.html_options.php';
?><select id=<?php echo $_smarty_tpl->tpl_vars['sel_name']->value;?>
 name=<?php echo $_smarty_tpl->tpl_vars['sel_name']->value;?>
>
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['lista_campos']->value,'selected'=>$_smarty_tpl->tpl_vars['item_selecionado']->value),$_smarty_tpl);?>

</select>
<?php }} ?>