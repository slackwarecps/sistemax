<?php /* Smarty version Smarty-3.1.8, created on 2013-11-28 12:18:40
         compiled from "/home/fabioalvaro/www/sistemax/views/templates/usuario/grid_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1895060181529750c0366c64-09310914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e33acd7a97ea4ce6efc027da7dc49ee450da4944' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax/views/templates/usuario/grid_usuario.tpl',
      1 => 1371878645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1895060181529750c0366c64-09310914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuario_lista' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_529750c0383ae2_83952589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529750c0383ae2_83952589')) {function content_529750c0383ae2_83952589($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario_lista']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["data"]->key => $_smarty_tpl->tpl_vars["data"]->value){
$_smarty_tpl->tpl_vars["data"]->_loop = true;
?>
  <tr id="line_<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
">
    <td><?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
</td>
    <td> <?php echo $_smarty_tpl->tpl_vars['data']->value['nome'];?>
</td>    
    <td>
      <span class="link_falso" onclick="link_edita_usuario(<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
)">
        <img src="/files/images/cad_edit.png" title="Alterar" alt="Alterar" height="40px">
      </span> 
      
      
      <span class="link_falso" onclick="link_exclui_usuario(<?php echo $_smarty_tpl->tpl_vars['data']->value['id_usuario'];?>
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