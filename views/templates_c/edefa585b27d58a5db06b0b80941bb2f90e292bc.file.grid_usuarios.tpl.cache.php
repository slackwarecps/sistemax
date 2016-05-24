<?php /* Smarty version Smarty-3.1.8, created on 2013-11-28 19:45:22
         compiled from "/home/fabioalvaro/www/sistemax/views/templates/usuarios/grid_usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11045449815297b972eb61b1-23210209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edefa585b27d58a5db06b0b80941bb2f90e292bc' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/usuarios/grid_usuarios.tpl',
      1 => 1385659150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11045449815297b972eb61b1-23210209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuarios_lista' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5297b972eea626_95624234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5297b972eea626_95624234')) {function content_5297b972eea626_95624234($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
  <tr id="line_<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
">
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['nome'];?>
</td>    
    <td>
      <a href="#" class="btn btn-default glyphicon glyphicon-pencil" onclick="link_edita_usuarios(<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
)">Editar</a>            
      <a href="#" class="btn btn-default glyphicon glyphicon-trash" onclick="link_exclui_usuarios(<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
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