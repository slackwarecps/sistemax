<?php /* Smarty version Smarty-3.1.13, created on 2013-11-28 15:30:03
         compiled from "template_tool/cria_selecao_completo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156855851052977d9ba26a55-34688003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a049e19cb2b5c4d60b64465e7fb50f5cb729921' => 
    array (
      0 => 'template_tool/cria_selecao_completo.tpl',
      1 => 1371877684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156855851052977d9ba26a55-34688003',
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
  'unifunc' => 'content_52977d9ba567b4_00885390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52977d9ba567b4_00885390')) {function content_52977d9ba567b4_00885390($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/fabioalvaro/www/sistemax/tool/libs/plugins/function.html_options.php';
?><select id=<?php echo $_smarty_tpl->tpl_vars['sel_name']->value;?>
 name=<?php echo $_smarty_tpl->tpl_vars['sel_name']->value;?>
>
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['lista_campos']->value,'selected'=>$_smarty_tpl->tpl_vars['item_selecionado']->value),$_smarty_tpl);?>

</select>
<?php }} ?>