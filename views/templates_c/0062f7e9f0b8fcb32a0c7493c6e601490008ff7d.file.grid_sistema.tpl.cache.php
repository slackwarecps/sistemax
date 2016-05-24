<?php /* Smarty version Smarty-3.1.8, created on 2013-07-04 11:15:26
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/sistema/grid_sistema.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164820244551d5837ec96268-70834565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0062f7e9f0b8fcb32a0c7493c6e601490008ff7d' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/sistema/grid_sistema.tpl',
      1 => 1371847417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164820244551d5837ec96268-70834565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sistema_lista' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51d5837ecb9344_57771173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d5837ecb9344_57771173')) {function content_51d5837ecb9344_57771173($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sistema_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
  <tr id="line_<?php echo $_smarty_tpl->tpl_vars['data']->value['id_sistema'];?>
">
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id_sistema'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['descricao'];?>
</td>    
    <td>
      <span class="link_falso" onclick="link_edita_sistema(<?php echo $_smarty_tpl->tpl_vars['data']->value['id_sistema'];?>
)">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_sistema(<?php echo $_smarty_tpl->tpl_vars['data']->value['id_sistema'];?>
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