<?php /* Smarty version Smarty-3.1.13, created on 2013-06-07 15:33:54
         compiled from "modelos/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88242579251b21e31819b91-24967933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecfc834c0bb964e376572c6f84a13a8ec12a8a70' => 
    array (
      0 => 'modelos/page.tpl',
      1 => 1370626246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88242579251b21e31819b91-24967933',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b21e3183a7b2_58432994',
  'variables' => 
  array (
    'filename' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b21e3183a7b2_58432994')) {function content_51b21e3183a7b2_58432994($_smarty_tpl) {?><!--
Gerado pelo Framework Tools 1.0
Classe: Viewer
-->

<div class='container_padrao'>

<h1><?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
</h1>

<p>
Mude o conteudo do arquivo :<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
.

:) Good Luck!
 
</p>

</div><?php }} ?>