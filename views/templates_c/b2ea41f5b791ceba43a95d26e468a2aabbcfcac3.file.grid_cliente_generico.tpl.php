<?php /* Smarty version Smarty-3.1.8, created on 2013-07-04 20:48:50
         compiled from "D:/wamp/www/www.sistemax.com.br/views/templates\cliente\grid_cliente_generico.tpl" */ ?>
<?php /*%%SmartyHeaderCode:719751d609e297ea99-19599736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2ea41f5b791ceba43a95d26e468a2aabbcfcac3' => 
    array (
      0 => 'D:/wamp/www/www.sistemax.com.br/views/templates\\cliente\\grid_cliente_generico.tpl',
      1 => 1372975180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '719751d609e297ea99-19599736',
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
  'unifunc' => 'content_51d609e2b026b9_87178295',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d609e2b026b9_87178295')) {function content_51d609e2b026b9_87178295($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
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