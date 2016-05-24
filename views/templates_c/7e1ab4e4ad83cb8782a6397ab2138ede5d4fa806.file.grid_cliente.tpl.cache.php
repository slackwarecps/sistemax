<?php /* Smarty version Smarty-3.1.8, created on 2013-08-29 13:24:05
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/cliente/grid_cliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:856983187521f75a5e2eeb8-52393883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e1ab4e4ad83cb8782a6397ab2138ede5d4fa806' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/cliente/grid_cliente.tpl',
      1 => 1371645506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '856983187521f75a5e2eeb8-52393883',
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
  'unifunc' => 'content_521f75a5e4ccd7_87064503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521f75a5e4ccd7_87064503')) {function content_521f75a5e4ccd7_87064503($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cliente_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
  <tr id="line_<?php echo $_smarty_tpl->tpl_vars['data']->value['CLICOD'];?>
">
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['CLICOD'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['CLINOM'];?>
</td>    
    <td>
      <span class="link_falso" onclick="link_edita_cliente(<?php echo $_smarty_tpl->tpl_vars['data']->value['CLICOD'];?>
)">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_cliente(<?php echo $_smarty_tpl->tpl_vars['data']->value['CLICOD'];?>
)">
        <img src="/files/images/cad_exclui.png" title="Alterar" alt="Alterar" height="40px">
      </span> 

    </td>
  </tr>   
  <?php }
if (!$_smarty_tpl->tpl_vars["data"]->_loop) {
?>    
  <tr>
    <td></td>
    <td>Faça uma busca</td>
    <td></td>
  </tr>
<?php } ?>  

<?php }} ?>