<?php /* Smarty version Smarty-3.1.8, created on 2013-07-10 22:03:39
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/cliente/grid_cliente_generico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177985850251de046b615be1-37355373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5660f3fcfe7df275eaec0066924908dec3a1acfb' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/cliente/grid_cliente_generico.tpl',
      1 => 1371666605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177985850251de046b615be1-37355373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cliente_lista' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51de046b67d722_77514758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51de046b67d722_77514758')) {function content_51de046b67d722_77514758($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cliente_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
  <tr id="<?php echo $_smarty_tpl->tpl_vars['data']->value['CLICOD'];?>
" xnome="<?php echo $_smarty_tpl->tpl_vars['data']->value['CLINOM'];?>
" >
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['CLICOD'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['CLINOM'];?>
</td>    
  </tr>   
  <?php }
if (!$_smarty_tpl->tpl_vars["data"]->_loop) {
?>    
  <tr>    
    <td colspan="2">Faça uma busca</td>    
  </tr>
<?php } ?>  

<?php }} ?>