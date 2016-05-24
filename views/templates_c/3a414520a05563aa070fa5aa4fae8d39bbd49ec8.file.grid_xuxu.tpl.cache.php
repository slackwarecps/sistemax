<?php /* Smarty version Smarty-3.1.8, created on 2013-11-28 14:08:43
         compiled from "/home/fabioalvaro/www/sistemax/views/templates/xuxu/grid_xuxu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181277857252976a8b672bb2-64314689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a414520a05563aa070fa5aa4fae8d39bbd49ec8' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/xuxu/grid_xuxu.tpl',
      1 => 1385654376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181277857252976a8b672bb2-64314689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'xuxu_lista' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52976a8b68de32_38865738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52976a8b68de32_38865738')) {function content_52976a8b68de32_38865738($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xuxu_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
  <tr id="line_<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
">
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
</td>
    <td> Configure o nome que irá aparecer aqui</td>    
    <td>
      <a href="" class="btn btn-default glyphicon glyphicon-pencil" onclick="link_edita__xuxu(<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
)">Editar</a>            
      <a href="" class="btn btn-default glyphicon glyphicon-trash" onclick="link_exclui_xuxu(<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
)">Excluir</a>
    </td>
  </tr>   
  <?php }
if (!$_smarty_tpl->tpl_vars["data"]->_loop) {
?>    
  <tr>
    <td></td>
    <td>Não foram encontrados Resultados</td>
    <td></td>
  </tr>
<?php } ?>  

<?php }} ?>