<?php /* Smarty version Smarty-3.1.13, created on 2013-06-07 16:16:16
         compiled from "modelos/controller.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65710856251b220de2a7347-24440651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9f0ff4fc30d42a07fff8191f7fdaf5a519916c2' => 
    array (
      0 => 'modelos/controller.tpl',
      1 => 1370628786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65710856251b220de2a7347-24440651',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51b220de2bcc54_42175546',
  'variables' => 
  array (
    'filename' => 0,
    'dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51b220de2bcc54_42175546')) {function content_51b220de2bcc54_42175546($_smarty_tpl) {?><<?php ?>?php

/*
* Gerado pelo Framework Tools 1.0
* Classe: Controller
*
*/

class <?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
 extends controller {
  public function index_action() { 
    $this->template->fetchJS('/files/js/<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
.js');  
    $this->template->run();
    $this->smarty->display('<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['filename']->value;?>
_page.html');    
  }
}
?<?php ?>><?php }} ?>