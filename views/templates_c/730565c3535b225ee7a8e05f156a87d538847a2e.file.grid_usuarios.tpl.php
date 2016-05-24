<?php /* Smarty version Smarty-3.1.15, created on 2013-11-29 20:19:49
         compiled from "/var/www/htdocs/www.fabioalvaro.com.br/sistemax/views/templates/usuarios/grid_usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121982224852991305b464f9-48229803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '730565c3535b225ee7a8e05f156a87d538847a2e' => 
    array (
      0 => '/var/www/htdocs/www.fabioalvaro.com.br/sistemax/views/templates/usuarios/grid_usuarios.tpl',
      1 => 1385676443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121982224852991305b464f9-48229803',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuarios_lista' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52991305b57d38_12027060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52991305b57d38_12027060')) {function content_52991305b57d38_12027060($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value) {
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
