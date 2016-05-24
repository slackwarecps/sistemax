<?php /* Smarty version Smarty-3.1.8, created on 2013-07-05 17:20:05
         compiled from "/home/fabioalvaro/www/sistemax//views/templates/usuario/grid_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38730724651d72a7574a709-89775544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea3955080806a505d164f01ebd046184deece2d2' => 
    array (
      0 => '/home/fabioalvaro/www/sistemax//views/templates/usuario/grid_usuario.tpl',
      1 => 1371878645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38730724651d72a7574a709-89775544',
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
  'unifunc' => 'content_51d72a75798e19_44199972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d72a75798e19_44199972')) {function content_51d72a75798e19_44199972($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars["data"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["data"]->_loop = false;
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