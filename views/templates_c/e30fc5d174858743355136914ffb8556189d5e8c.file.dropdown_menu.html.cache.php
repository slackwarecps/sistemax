<?php /* Smarty version Smarty-3.1.8, created on 2013-11-29 19:12:00
         compiled from "/home/fabioalvaro/www/sistemax/views/templates/comuns/dropdown_menu.html" */ ?>
<?php /*%%SmartyHeaderCode:46755765752990320aa9ad7-13092771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e30fc5d174858743355136914ffb8556189d5e8c' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/comuns/dropdown_menu.html',
      1 => 1381922847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46755765752990320aa9ad7-13092771',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52990320aaaf75_78534610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52990320aaaf75_78534610')) {function content_52990320aaaf75_78534610($_smarty_tpl) {?><ul class="dropdown-menu">
  <li><a href="#">Ação</a></li>
  <li><a href="#">Another action</a></li>
  <li><a href="#">Something else here</a></li>
  <li class="divider"></li>
  <li class="dropdown-header">Envio de SMS</li>
  <li><a href="/paineldecontrole/sms">Teste de Envio</a></li>
  <li><a href="#">Saldo dos Clientes</a></li>
</ul><?php }} ?>